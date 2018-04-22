<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Urlshort_model extends CI_Model {
	
	function does_alias_exist($alias)
    {
	$this->db->select('id');
	$query = $this->db->get_where('links', array('alias' => $alias), 1, 0);
	if ($query->num_rows() > 0)
	{
	    return true;
	}
	else
	{
	    return false;
	}
    }
    /**
     * Save a new Alias to the table
     * @param type $url URL to shorten
     * @param type $alias  The new Alias for this URL
     */
    function save_new_alias($url, $alias)
    {
	$data = array(
	    'alias' => $alias,
	    'url' => $url,
	    'created' => date("Y-m-d H:i:s")
	);
	$this->db->insert('links', $data);
    }
    /**
     * Return an existing Alias, if any
     * @param type $url String, the URL to check
     * @return type $lias String, the alias, if any
     */
    function alias_from_url($url)
    {
	$alias = "";
	$this->db->select('alias');
	$query = $this->db->get_where('links', array('url' => $url), 1, 0);
	if ($query->num_rows() > 0)
	{
	    foreach ($query->result() as $row)
	    {
		$alias = $row->alias;
	    }
	}
	return $alias;
    }

	function get_url_with_alias($alias)
    {
	$this->db->select('url');

		$query = $this->db->get_where('links', array('alias' => $alias), 1, 0);
		//print_r($query);die;
	if ($query->num_rows() > 0)

		{

		return $query->result();
		}
		else{
			return 0;
		}
    }
	

}