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
        $data['globalId'] = 1;
        $data['partnerName'] = $this->api->getPartnerName(1);
      $data['leftSide'] = $this->api->getPartnerLeft(1);
      $this->load->view('partner', $data);
	}

    public function partner($id){
        $data['globalId'] = $id;
      $data['partnerName'] = $this->api->getPartnerName($id);
      $data['leftSide'] = $this->api->getPartnerLeft($id);
      $this->load->view('partner', $data);

    }
}
