<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Admin_controller extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->auth) 
			return redirect(admin('login'));
		
		$this->user = (object) $this->main->get("admins", 'name, mobile, email', ['id' => $this->session->auth]);
        
		$this->redirect = admin($this->redirect);
	}

    public function slug_check($slug)
    {
        $check = $this->uri->segment(4) ? d_id($this->uri->segment(4)) : 0;

        $where = ['slug' => $slug, 'id != ' => $check, 'is_deleted' => 0];

        if ($this->main->check($this->table, $where, 'id'))
        {
            $this->form_validation->set_message('slug_check', 'The %s is already in use');
            return FALSE;
        } else
            return TRUE;
    }

	public function forbidden()
	{
		$data['title'] = 'Error 403';
        $data['name'] = 'error_403';

		return $this->template->load('template', 'error_403', $data);
	}
}