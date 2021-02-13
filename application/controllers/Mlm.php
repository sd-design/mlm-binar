<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlm extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form'));
        $this->load->model('Api_model', 'api');
    }
	public function index()
	{
    $data = $this->api->getPartner(1);
    echo $data;
	}

    public function partner($id){

      $data = $this->api->getPartner($id);
      echo $data;

    }
}
