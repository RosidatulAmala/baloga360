<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Login extends CI_Controller {
    
        public function index(){   
            
            $data = [

                'nama_folder'   => "pariwisata",
                'namadalamview' => "V_pariwisata"
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

        public function tampilanPariwisata(){   
            
            $data = [

                'nama_folder'   => "dashboard",
                'namadalamview' => "tampilan_dashboard"
            ];
            $this->load->view('template/template_backend', $data);
            $this->load->view('pariwisata/V_pariwisata', $data);
        }
    }
    
    /* End of file Login.php */
    