<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends Admin_controller  {

    public function __construct()
	{
		parent::__construct();
		$this->path = $this->config->item('products');
		$this->cats = $this->main->getAll('category', 'id, c_name', ['is_deleted' => 0]);
	}

	protected $table = 'products';
	protected $redirect = 'product';
	protected $title = 'Product';
	protected $name = 'product';
	
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
        $this->load->model('Product_model', 'data');
        
        $fetch_data = $this->data->make_datatables();
        $sr = $this->input->get('start') + 1;
        $data = [];

        foreach($fetch_data as $row)
        {
            $sub_array = [];
            $sub_array[] = $sr;
            $sub_array[] = $row->p_name;
            $sub_array[] = $row->p_code;
            $sub_array[] = $row->rate;
            $sub_array[] = $row->stock;
            $sub_array[] = $row->status;
            $sub_array[] = $row->c_name;

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

        if($id !== 0) $data['data'] = $this->main->get($this->table, 'p_name, p_code, rate, stock, status, is_tranding, slug, image, cat_id', ['id' => d_id($id)]);
        
        if ($this->form_validation->run() == FALSE)
        {
            return $this->template->load('template', "$this->redirect/form", $data);
        }else{
            $img = '';

            if($id === 0){
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
                'p_name'       => $this->input->post('p_name'),
                'p_code'       => $this->input->post('p_code'),
                'rate'         => $this->input->post('rate'),
                'stock'        => $this->input->post('stock'),
                'status'       => $this->input->post('status'),
                'is_tranding'  => $this->input->post('is_tranding'),
                'cat_id'       => d_id($this->input->post('cat_id')),
                'slug'         => strtolower($this->input->post('slug')),
                'image'        => $img
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

    public function slug_check($slug)
    {
        $check = $this->uri->segment(4) ? d_id($this->uri->segment(4)) : 0;
        $cat_id = $this->input->post('cat_id') ? d_id($this->input->post('cat_id')) : 0;

        $where = ['slug' => $slug, 'id != ' => $check, 'is_deleted' => 0, 'cat_id' => $cat_id];
        
        if ($this->main->check($this->table, $where, 'id'))
        {
            $this->form_validation->set_message('slug_check', 'The %s is already in use');
            return FALSE;
        } else
            return TRUE;
    }

    protected $validate = [
        [
            'field' => 'p_name',
            'label' => 'Product name',
            'rules' => 'required|alpha_numeric_spaces|trim',
            'errors' => [
                'required' => "%s is required",
                'alpha_numeric_spaces' => "%s is invalid",
            ],
        ],
        [
            'field' => 'slug',
            'label' => 'Product slug',
            'rules' => 'required|max_length[100]|alpha_dash|trim|callback_slug_check',
            'errors' => [
                'required' => "%s is required",
                'max_length' => "Max 100 chars allowed.",
                'alpha_dash' => "Only characters and numbers are allowed.",
            ],
        ],
        [
            'field' => 'p_code',
            'label' => 'Product code',
            'rules' => 'required|max_length[20]|trim',
            'errors' => [
                'required' => "%s is required",
                'max_length' => "Max 20 chars allowed.",
            ],
        ],
        [
            'field' => 'rate',
            'label' => 'Product rate',
            'rules' => 'required|max_length[9]|is_natural|trim',
            'errors' => [
                'required' => "%s is required",
                'is_natural' => "%s is invalid",
                'max_length' => "Max 9 chars allowed.",
            ],
        ],
        [
            'field' => 'stock',
            'label' => 'Product stock',
            'rules' => 'required|max_length[9]|is_natural|trim',
            'errors' => [
                'required' => "%s is required",
                'is_natural' => "%s is invalid",
                'max_length' => "Max 9 chars allowed.",
            ],
        ],
        [
            'field' => 'status',
            'label' => 'Product status',
            'rules' => 'required|in_list[Available,Hold,Sold]|trim',
            'errors' => [
                'required' => "%s is required",
                'in_list' => "%s is invalid",
            ],
        ],
        [
            'field' => 'is_tranding',
            'label' => 'Tranding',
            'rules' => 'required|in_list[0,1]|trim',
            'errors' => [
                'required' => "%s is required",
                'in_list' => "%s is invalid",
            ],
        ],
        [
            'field' => 'cat_id',
            'label' => 'Category',
            'rules' => 'required|is_natural|trim',
            'errors' => [
                'required' => "%s is required",
                'is_natural' => "%s is invalid",
            ],
        ],
    ];
}