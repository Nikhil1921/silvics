<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Inquiry extends Admin_controller  {

	private $table = 'inquiry';
	protected $redirect = 'inquiry';
	protected $title = 'Inquiry';
	protected $name = 'inquiry';
	
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
        $this->load->model('Inquiry_model', 'data');
        $fetch_data = $this->data->make_datatables();
        $sr = $this->input->get('start') + 1;
        $data = [];

        foreach($fetch_data as $row)
        {
            $sub_array = [];
            $sub_array[] = $sr;
            $sub_array[] = $row->name;
            $sub_array[] = $row->mobile ? $row->mobile : 'NA';
            $sub_array[] = $row->email;
            $sub_array[] = $row->p_name ? $row->p_name : 'NA';
            
            $action = '<div class="dropdown">
                          <button type="button" class="btn btn-round btn-outline-info dropdown-toggle btn-sm" data-toggle="dropdown" aria-expanded="false">
                            <i class="nc-icon nc-settings-gear-65"></i>
                          </button>
                          <div class="dropdown-menu" style="will-change: transform;">';
            
            $action .= '<a class="dropdown-item" onclick="script.viewInquiry('.e_id($row->id).');" href="javascript:;"><i class="fa fa-eye"></i> View</a>';

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
}