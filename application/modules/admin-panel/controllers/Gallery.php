<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends Admin_controller  {

    public function __construct()
	{
		parent::__construct();
		$this->path = $this->config->item('gallery');
	}

	private $table = 'gallery';
	protected $redirect = 'gallery';
	protected $title = 'Gallery';
	protected $name = 'gallery';
	
	public function index()
	{
        $data['title'] = $this->title;
        $data['name'] = $this->name;
        $data['url'] = $this->redirect;
        $data['operation'] = "List";
        $data['datatable'] = "$this->redirect/get";
		
		return $this->template->load('template', "$this->redirect/home", $data);
	}

    public function get()
    {
        check_ajax();
        $this->load->model('Gallery_model', 'data');
        
        $fetch_data = $this->data->make_datatables();
        $sr = $this->input->get('start') + 1;
        $data = [];

        foreach($fetch_data as $row)
        {
            $sub_array = [];
            $sub_array[] = $sr;
            $sub_array[] = $row->g_type;
            $sub_array[] = $row->video_id ? $row->video_id : 'NA';
            $sub_array[] = is_file($this->path.$row->image) ? img($this->path.$row->image, '', 'height="50"') : 'NA';

            $action = '<div class="dropdown">
                          <button type="button" class="btn btn-round btn-outline-info dropdown-toggle btn-sm" data-toggle="dropdown" aria-expanded="false">
                            <i class="nc-icon nc-settings-gear-65"></i>
                          </button>
                          <div class="dropdown-menu" style="will-change: transform;">';
            
            $action .= anchor($this->redirect."/add-update/".e_id($row->id), '<i class="fa fa-edit"></i> Edit</a>', 'class="dropdown-item"');

            $action .= form_open($this->redirect.'/delete', 'id="'.e_id($row->id).'"', ['id' => e_id($row->id)]).
                '<a class="dropdown-item" onclick="script.delete('.e_id($row->id).'); return false;" href=""><i class="fa fa-trash"></i> Delete</a>'.
                form_close();

            $action .= '</div></div>';
            
            $sub_array[] = $action;
            
            $data[] = $sub_array;  
            $sr++;
        }

        $output = [
            "draw"              => intval($this->input->get('draw')),  
            "recordsTotal"      => $this->data->count(),
            "recordsFiltered"   => $this->data->get_filtered_data(),
            "data"              => $data
        ];
        
        die(json_encode($output));
    }

    public function add_update($id=0)
	{
        $this->form_validation->set_rules($this->validate);

        $data['title'] = $this->title;
        $data['name'] = $this->name;
        $data['operation'] = $id === 0 ? "Add" : "Update";
        $data['url'] = $this->redirect;
        $data['image'] = true;

        if($id !== 0) $data['data'] = $this->main->get($this->table, 'id, image, video_id, g_type', ['id' => d_id($id)]);
        
        if ($this->form_validation->run() == FALSE)
        {
            return $this->template->load('template', "$this->redirect/form", $data);
        }else{
            $img = '';

            if($id === 0 && $this->input->post('g_type') !== 'Videos'){
                $image = $this->uploadImage('image');
                if ($image['error'] == TRUE){
                    $this->session->set_flashdata('error', $image["message"]);
                    return $this->template->load('template', "$this->redirect/form", $data);
                }else
                    $img = $image["message"];
            }else{
                if (!empty($_FILES['image']['name'])) {
                    $image = $this->uploadImage('image');
                    if ($image['error'] == TRUE){
                        $this->session->set_flashdata('error', $image["message"]);
                        return $this->template->load('template', "$this->redirect/form", $data);
                    }else
                        $img = $image["message"];
                }else
                    $img = $this->input->post('image');
            }

            $post = [
                'g_type'   => $this->input->post('g_type'),
                'video_id' => $this->input->post('video_id'),
                'image'    => $img
            ];

            $uid = ($id === 0) ? $this->main->add($post, $this->table) : $this->main->update(['id' => d_id($id)], $post, $this->table);

            $msg = ($id === 0) ? 'added' : 'updated';

            if ($id !== 0) {
                $unlink = $this->input->post('image');

                if($uid && $unlink !== $img && is_file($this->path.$unlink))
                    unlink($this->path.$unlink);

                if(!$uid && is_file($this->path.$img))
                    unlink($this->path.$img);
            }

            flashMsg($uid, "$this->title $msg.", "$this->title not $msg. Try again.", $this->redirect);
        }
	}

    public function delete()
    {
        $this->form_validation->set_rules('id', 'id', 'required|is_natural');
        if ($this->form_validation->run() == FALSE)
            flashMsg(0, "", "Some required fields are missing.", $this->redirect);
        else{
            $id = $this->main->update(['id' => d_id($this->input->post('id'))], ['is_deleted' => 1],$this->table);
            flashMsg($id, "$this->title deleted.", "$this->title not deleted.", $this->redirect);
        }
    }

    public function video_check($str)
    {   
        if ($this->input->post('g_type') === 'Videos' && !$str)
        {
            $this->form_validation->set_message('video_check', '%s is required');
            return FALSE;
        } else
            return TRUE;
    }

    protected $validate = [
        [
            'field' => 'g_type',
            'label' => 'Gallery type',
            'rules' => 'required|in_list[Factory,Corporate Office & Display Gallery,Videos]|trim',
            'errors' => [
                'required' => "%s is required",
                'in_list' => "%s is invalid",
            ],
        ],
        [
            'field' => 'video_id',
            'label' => 'Youtube Video ID',
            'rules' => 'max_length[100]|callback_video_check|alpha_numeric|trim',
            'errors' => [
                'max_length' => "Max 100 chars allowed.",
                'alpha_numeric' => "%s is invalid",
            ],
        ]
    ];
}