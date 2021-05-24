<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Spot extends CI_Controller {
        

        function __construct(){
            
            parent::__construct();

            // load model
            $this->load->model('M_spot');
        }

        public function index(){
            
            $tampilView = array(

                'namemodule'    => "spot",
                'namefileview'  => "V_spot",

                'baloga'    => $this->M_spot->model_tampilspot()
            );
            $this->load->view('template/template_backend', $tampilView);
        }




        // view edit
        function edit( $id_spot = null ) {

            if ( $id_spot ) {

                $tampilView = array(

                    'namemodule'    => "spot",
                    'namefileview'  => "V_spot_edit",
    
                    'baloga'    => $this->M_spot->model_tampilspotById( $id_spot )->row_array()
                );
                $this->load->view('template/template_backend', $tampilView);


            } else {

                show_404();
            }
        }



        // proses edit
        function prosesedit(){

            $this->M_spot->model_prosesedit();
        }



        // tambah
        function tambah() {

            $tampilView = array(

                'namemodule'    => "spot",
                'namefileview'  => "V_spot_tambah"
            );  
            $this->load->view('template/template_backend', $tampilView);
        }



        // proses tambah
        function prosestambah() {

            $this->M_spot->model_tambahspot();
        }






        // hapus
        function hapus( $id_spot ) {

            $this->M_spot->model_hapusspot( $id_spot );
        }





        // test marzipano
        function marzipano() {

            // $tampilView = array(

            //     'namemodule'    => "spot",
            //     'namefileview'  => "V_spot_marzipano"
            // );  
            // $this->load->view('template/template_backend', $tampilView);
            $this->load->view('spot/V_spot_marzipano');
        }





        // data API
        function dataSpotAPI() {

            $getDataSpot = $this->M_spot->model_tampilspot();

            $meta = array(

                'page'  => 1,
                'pages' => 1, 
                'perpage' => -1,
                'total'   => $getDataSpot->num_rows(),
                'sort'    => "asc",
                'field'   => "id_spot"
            );

            $data = array();

            if ( $getDataSpot->num_rows() > 0 ) {

                foreach ( $getDataSpot->result_array() AS $row ) {

                    array_push( $data, array(

                        'id_spot'   => $row['id_spot'],
                        'nama'      => $row['nama'],
                        'deskripsi' => $row['deskripsi'],
                        'status_ditampilkan' => $row['status_ditampilkan'],
                        'created_at'         => $row['created_at']
                    ) );
                }
            }

            header('Content-Type: application/json');
            echo json_encode( ['meta' => $meta, 'data' => $data], JSON_PRETTY_PRINT );


        }
    
    }



    /**
     * 
     * 
     * {
    "meta": {
        "page": 1,
        "pages": 1,
        "perpage": -1,
        "total": 350,
        "sort": "asc",
        "field": "RecordID"
    },
    "data": [
        {
            "RecordID": 1,
            "OrderID": "64616-103",
            "Country": "Brazil",
            "ShipCountry": "BR",
            "ShipCity": "S\u00e3o F\u00e9lix do Xingu",
            "ShipName": "Gerhold Inc",
            "ShipAddress": "698 Oriole Pass",
            "CompanyEmail": "hboule0@hp.com",
            "CompanyAgent": "Hayes Boule",
            "CompanyName": "Casper-Kerluke",
            "Currency": "BRL",
            "Notes": "vel enim sit amet nunc viverra dapibus nulla suscipit ligula in lacus",
            "Department": "Shoes",
            "Website": "thetimes.co.uk",
            "Latitude": -7.0179497,
            "Longitude": -52.3613378,
            "ShipDate": "10\/15\/2017",
            "PaymentDate": "2016-07-28 03:44:46",
            "TimeZone": "America\/Santarem",
            "TotalPayment": "$563997.38",
            "Gender": "M",
            "Status": 5,
            "Type": 1,
            "Actions": null
        },
     * 
     */
    
    /* End of file Spot.php */
    