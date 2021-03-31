<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class pengguna extends CI_Controller {
    
        public function index(){   
            
            $data = [

                'nama_folder'   => "pengguna",
                'namadalamview' => "V_pengguna"

              
               
            ];
            $this->load->view('template/template_backend', $data);
        }


        function tampilanDua() {

            // siapkan lokasi tampilan
            $data = [

                'nama_folder'   => "dashboard",
                'namadalamview' => "tampilan_dashboard"
            ];

            // panggil template -> data tampilan
            $this->load->view('template/template_backend', $data);
        }

        function viewBiodata(){

            echo "iki biodata";
        }
    
    }


    
    /* End of file Login.php */
    