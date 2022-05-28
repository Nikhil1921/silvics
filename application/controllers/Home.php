<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Public_controller {
	
	public function index()
	{
		if($this->input->is_ajax_request() && $this->input->server('REQUEST_METHOD') === "POST"):
			$post = [
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'subject' => $this->input->post('subject'),
				'message' => $this->input->post('message'),
				'prod_id' => 0,
			];

			$id = $this->main->add($post, 'inquiry');

			$response = [
				'error' => $id ? false : true,
				'message' => $id ? "Thank you for showing interest. Your request is saved. we will get back to you shortly." : "Your request is not saved. Try again.",
			];

			die(json_encode($response));
		else:
			$data['title'] = "Home";
			$data['banners'] = $this->main->getAll('banners', 'CONCAT("'.$this->config->item('banners').'", banner) banner', []);
			$data['validate'] = true;
			return $this->template->load('template', "home", $data);
		endif;
	}

	public function about()
	{
        $data['title'] = "About us";
        $data['bread'] = "About Us";
        $data['teams'] = $this->main->getAll('teams', 't_name, description, position, CONCAT("'.$this->config->item('teams').'", image) image', ['is_deleted' => 0]);
        $data['owl'] = true;
		
		return $this->template->load('template', "about", $data);
	}
	
	public function categories()
	{
        $data['title'] = "Our Products";
        $data['bread'] = "Our Products";
		$data['cats'] = $this->main->getAll('category', 'c_name, slug', ['is_deleted' => 0]);
		
		return $this->template->load('template', "categories", $data);
	}

	public function category($slug)
	{
		$cat = $this->main->get('category', 'id, c_name, details, slug, CONCAT("'.$this->config->item('category').'", image) image', ['is_deleted' => 0, 'slug' => $slug]);
		
		if($cat){
			$data['title'] = $cat['c_name'];
        	$data['bread'] = $cat['c_name'];
        	$data['cat'] = $cat;
			$data['prods'] = $this->main->getAll('products', 'p_name, slug, CONCAT("'.$this->config->item('products').'", image) image', ['is_deleted' => 0, 'cat_id' => $cat['id']]);
        	$data['fancybox'] = true;
			
			return $this->template->load('template', "category", $data);
		}
		else
			return $this->error_404();
	}

	public function product($c_slug, $p_slug)
	{
		$this->load->model(admin('product_model'));
		$prod = $this->product_model->getProd($c_slug, $p_slug);
		
		if($prod){
			if($this->input->is_ajax_request() && $this->input->server('REQUEST_METHOD') === "POST"):
				$post = [
					'name' => $this->input->post('name'),
					'email' => $this->input->post('email'),
					'mobile' => $this->input->post('phone'),
					'message' => $this->input->post('message'),
					'prod_id' => $this->input->post('prod_id') ? d_id($this->input->post('prod_id')) : 0,
				];

				$id = $this->main->add($post, 'inquiry');

				$response = [
					'error' => $id ? false : true,
					'message' => $id ? "Thank you for showing interest. Your request is saved. we will get back to you shortly." : "Your request is not saved. Try again.",
				];

				die(json_encode($response));
			else:
				$data['title'] = $prod->p_name;
				$data['bread'] = $prod->p_name;
				$data['prod'] = $prod;
				$data['prods'] = $this->main->getAll('products', 'p_name, slug, CONCAT("'.$this->config->item('products').'", image) image', ['is_deleted' => 0, 'cat_id' => $prod->cat_id, 'id != ' => $prod->id]);
				$data['validate'] = true;
				
				return $this->template->load('template', "product", $data);
			endif;
		}
		else
			return $this->error_404();
	}

	public function trending_product()
	{
		$this->load->model(admin('product_model'));

        $data['title'] = "Trending Products";
        $data['bread'] = "Trending Products";
        $data['prods'] = $this->product_model->getAll('products p', 'p.p_name, CONCAT(c.slug, "/", p.slug) slug, CONCAT("'.$this->config->item('products').'", p.image) image', ['p.is_tranding' => 0]);
		
		return $this->template->load('template', "trending_product", $data);
	}

	public function tutorials()
	{
        $data['title'] = "Tutorials";
        $data['bread'] = "Tutorials";
		$data['tuts'] = $this->main->getAll('tutorials', 't_name, CONCAT("'.$this->config->item('tutorials').'", t_pdf) t_pdf', ['is_deleted' => 0]);
		
		return $this->template->load('template', "tutorials", $data);
	}

	public function gallery()
	{
        $data['title'] = "Gallery";
		$data['bread'] = "Gallery";
		$data['fancybox'] = true;
        $data['gallery'] = $this->main->getAll('gallery', 'image, video_id, g_type', ['is_deleted' => 0]);

		return $this->template->load('template', "gallery", $data);
	}

	public function contact()
	{
		if($this->input->is_ajax_request() && $this->input->server('REQUEST_METHOD') === "POST"):
			$post = [
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'mobile' => $this->input->post('phone'),
				'subject' => $this->input->post('subject'),
				'message' => $this->input->post('message'),
				'prod_id' => 0,
			];

			$id = $this->main->add($post, 'inquiry');

			$response = [
				'error' => $id ? false : true,
				'message' => $id ? "Thank you for showing interest. Your request is saved. we will get back to you shortly." : "Your request is not saved. Try again.",
			];

			die(json_encode($response));
		else:
			$data['title'] = "Contact Us";
			$data['bread'] = "Contact Us";
			$data['validate'] = true;
			
			return $this->template->load('template', "contact", $data);
		endif;
	}
}