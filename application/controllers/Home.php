<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
        $response = array('version' => '1.0.1');

        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
            ->_display();
        exit;
	}

public function level($level){

$this->api->level($level);
    }
}
