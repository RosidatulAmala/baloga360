<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Message extends CI_Controller {
        

        function __construct(){

            parent::__construct();

            // load model . . .
            $this->load->model('M_message');
        }

        public function index(){
            
        }
    
    }
    
    /* End of file Message.php */
    