<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Dashboard extends CI_Controller {
        
        function __construct()
        {
            parent::__construct();

            // $this->load->model();
        }

        public function index(){

            $tampilView = array(

                'namemodule'    => "dashboard",
                'namefileview'  => "V_dashboard"
            );
            $this->load->view('template/template_backend', $tampilView);
        }
    
    }
    
    /* End of file Dashboard.php */
    