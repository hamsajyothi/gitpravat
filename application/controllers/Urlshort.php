<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Urlshort extends CI_Controller {

	function __construct() {
        parent::__construct();
        }

	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	 /**
     * Take in a URL from the form and shorten it
     */
    public function create()
    {
	$data = array(
			'error' => false,
			'show_details' => false,
		);

			
			 $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    //$url = $request->url;
    
	if (isset($request->url)) {	
	$url = $request->url;
	// validate url
	if (filter_var($url, FILTER_VALIDATE_URL)) {	
	$short_url = "";
	$url = prep_url($url);
	$link_length = $this->config->item('link_length');
	 $this->load->model('urlshort_model');
	$existing_alias = $this->urlshort_model->alias_from_url($url);
	if ($existing_alias == "")
	{
	    $this->load->helper('string');
	    $alias = random_string('alnum', $link_length);
	    while ($this->urlshort_model->does_alias_exist($alias))
	    {
		$alias = random_string('alnum', $link_length);
	    }
	    $this->urlshort_model->save_new_alias($url, $alias);
	    $short_url = $alias;
	}
	else
	{
	    $short_url = $existing_alias;
	}
	// display the short url
		echo base_url() . $short_url;
	}
	else 
	{
				echo "Invalid URL!";
			}
		}
	else 
	{
				echo "Please Enter Your URL!";
			}
			
    }
    /**
     * Method to see if a generated Alias already exists in the table
     * @param type $alias String to check to see if it exists
     * @return Bool True or False
     */
    
}
