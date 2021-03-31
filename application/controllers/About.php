<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
    
class About extends CI_Controller {


    function __construct() {

        parent::__construct();

        // panggil model
    }


    // panggil view atau tampilan
    public function index(){   

        $data = [

            'nama_folder'   => "tentang_kami",
            'namadalamview' => "V_tentangkami"
        ];
        //  template
        $this->load->view('template/template_backend', $data);
    }



    // tambah
    function viewTambah() {

        echo "Oke this is view";
    }
}