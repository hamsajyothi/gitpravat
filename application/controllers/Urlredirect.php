<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Urlredirect extends CI_Controller

{

	public function index()

	{
	
		$alias = $this->uri->segment(1);
		$this->load->model('urlshort_model');
		$query = $this->urlshort_model->get_url_with_alias($alias);

		//print_r($alias);die;
		if ($query!= 0)

		{

		foreach ($query as $row)

		{

			redirect($row->url, 'refresh');

		}

		}

		else

		{

		echo "Alias '$alias'not found";

		}

	}

}


