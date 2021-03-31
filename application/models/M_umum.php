<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_employee extends CI_Model {
    
        function __construct(){

            parent::__construct();
        }


        // get employee
        function getDataEmployee( $key = null) {

            if ( $key ) {

                $query = $this->db->get_where('data_employee', $key);
            } else $query = $this->db->get('data_employee');

            $data = array();

            if ( $query->num_rows() > 0 ) {

                foreach ( $query->result() AS $row ) {

                    // get data login
                    $requestLogin = $this->db->get_where('user_login', ['id_login' => $row->id_login]);
                    $dataLogin = array();

                    if ( $requestLogin->num_rows() > 0 ) {

                        $rowLogin = $requestLogin->row();
                        $dataLogin = array(

                            'id_login'  => $rowLogin->id_login,
                            'username'  => $rowLogin->username,
                            'level'     => $rowLogin->level,
                            'status_account' => $rowLogin->status_account,
                            'created_at'     => $rowLogin->created_at
                        );
                    }


                    array_push( $data, array(

                        'id_employee'   => $row->id_employee,
                        'no_induk'      => $row->no_induk,
                        'id_login'  => $row->id_login,
                        'name'      => $row->name,
                        'gender'    => $row->gender,
                        'place_of_birth' => $row->place_of_birth,
                        'date_of_birth'  => $row->date_of_birth,
                        'religion'       => $row->religion,
                        'married_status' => $row->married_status,
                        'children'       => $row->children,
                        'address'   => $row->address,
                        'phone'     => $row->phone,
                        'education' => $row->education,
                        'name_of_education'     => $row->name_of_education,
                        'majors_of_education'   => $row->majors_of_education,
                        'position'  => $row->position,
                        'division'  => $row->division,
                        'upt'       => $row->upt,
                        'date_contract' => $row->date_contract,
                        'photo'         => $row->photo,
                        'updated_at'    => $row->updated_at,

                        // data login
                        'dataLogin' => $dataLogin
                    ) );
                }
            }


            return [

                'status'    => count( $data ) > 0 ? true : false,
                'data'      => $data
            ];
        }




        // update data employee
        function onUpdateEmployee(){

            // get id
            $id = $this->input->get('id');

            // data employee
            $dataEmployeeById = $this->db->get_where('data_employee', ['id_employee' => decrypt_data($id)])->row();
            
            // uplaod
            $photo = "";
            $config['upload_path']          = './assets/img/employee/';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['max_size']             = 3000;
            $config['file_name']       = 'EMP-ID'.decrypt_data($id).'-'.uniqid();

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ( !empty($_FILES['userfile']['name']) ) {

                
                if ( $this->upload->do_upload('userfile') ) {

                    if ( $dataEmployeeById->photo ) {

                        $dir = $config['upload_path'].$dataEmployeeById->photo;
                        unlink( $dir ); // remove old file
                    } $photo = $this->upload->data('file_name');
                } else {

                    $err_upload = $this->upload->display_errors();
                    $msg = '<div class="alert alert-primary">'.$err_upload.'</div>';
                    $this->session->set_flashdata( 'msg', $msg );

                    redirect('detail-employee?id='. $id);
                }

            } else {

                if ( $dataEmployeeById->photo ) {

                    $photo = $dataEmployeeById->photo;
                }
            }

            $data = array(

                'id_information'          => $this->input->post('id_information'),
                'id_profile'        => $this->input->post('id_profile'),
                'name'=> $this->input->post('name'),
                'email' => $this->input->post('email')
                
            );


            $this->db->where('id_employee', decrypt_data( $id ))->update('data_employee', $data);
            
            $msg = '<div class="alert alert-success"><b>Pemberitahuan</b> <br> Informasi data pegawai berhasil diperbarui pada '.date('d F Y H.i A').' </div>';
            $this->session->set_flashdata( 'msg', $msg );

            redirect('employee');
        }



        // remove photo
        function onRemovePhotoProfile() {

            $id = $this->input->get('id');
            if ( decrypt_data( $id ) ) {

                $getId = decrypt_data( $id );
                $dataEmployee = $this->db->get_where('data_employee', ['id_employee' => $getId])->row();
                // remove old file
                if ( $dataEmployee->photo ) {

                    $dir = './assets/img/employee/'. $dataEmployee->photo;
                    unlink( $dir );
                }

                // exec
                $this->db->where('id_employee', $getId)->update('data_employee', ['photo' => null]);

                // flashdata
                $msg = '<div class="alert alert-primary">Foto berhasil di hapus</div>';
                $this->session->set_flashdata( 'msg', $msg );

                redirect('detail-employee?id='. encrypt_data($dataEmployee->id_login));

            } else show_404();
        }





        // delete employee
        function processDeleteEmployee( $id ){

            $this->db->where('id_login', decrypt_data( $id ))->update('user_login', ['status_account' => "inactive"]);
            redirect('employee');
        }











        // export
        function onExportEmployee() {


            // data account request
            $data = array();
            $dataEmployee = $this->getDataEmployee();

            // filter
            $date_start = $this->input->get('start');
            $date_end = $this->input->get('end');

            $data = array('status' => false, 'data' => []);
            $dataRow = [];
            if ( $dataEmployee['status'] ) {

                foreach ( $dataEmployee['data'] AS $row ) {

                    if ( $row['dataLogin']['status_account'] == "active" )  {

                        if ( $date_start ) {

                            // convert date
                            $start = date('Y-m-d', strtotime($date_start));
                            $end = date('Y-m-d', strtotime($date_end));

                            $dateKey = date('Y-m-d', strtotime( $row['dataLogin']['created_at'] ));

                            if( ($start == $end) && ($start == $dateKey) ) {
                            

                                array_push( $dataRow, $row );
                                $partial_text = "Pegawai pada tanggal ". date('d F Y', strtotime($start));                                

                            } else if ( ($start <= $dateKey) && ($end >= $dateKey) ){

                                array_push( $dataRow, $row );
                                $partial_text = "Pegawai berdasarkan tanggal ". date('d F Y', strtotime($start)).' sampai '.date('d F Y', strtotime($end));
                            }

                        } else {

                            array_push( $dataRow, $row );
                            $partial_text = "Keseluruhan Pegawai";
                        }

                        
                    }
                }
            }

            $data = array('status' => count($dataRow) > 0 ? true : false, 'data' => $dataRow);

            


            // $sub_header_text = ($type != "all" ? "" : "Data Keseluruhan Mahasiswa dan Dosen").$partial_text;
            $sub_header_text = "Menampilkan Data ".$partial_text;



            // header attribute
            $name_file = 'LA-PEGAWAI -'.rand(1, 999999).'-'.date('Y-m-d');
            $pdf = $this->header_attr( $name_file );

            // add a page
            $pdf->AddPage('L', 'A4');


            // Sub header
            // $pdf->Ln(5, false);
            $html = '<table border="0">
                <tr>
                    <td align="center"><h2>LAPORAN DATA PEGAWAI</h2></td>
                </tr>
                <tr>
                    <td align="center"><h3>'.$sub_header_text.'</h3></td>
                </tr>
            </table>';

            $pdf->writeHTML($html, true, false, true, false, '');
            $pdf->Ln(5, false);




            // table body
            $table_body = "";
            if ( $data['status'] ) {

                foreach ( $data['data'] AS $rowP ) {

                    $ttl = "";
                    if ( $rowP['place_of_birth'] ) {

                        $tempat_lahir  = $rowP['place_of_birth'];
                        $tanggal_lahir = date('d/m/Y', strtotime( $rowP['date_of_birth'] ));

                        $ttl = $tempat_lahir.', '.$tanggal_lahir;
                    }

                    $contract = "";
                    if ( $rowP['date_contract'] ) {

                        $contract = date('d F Y', strtotime( $rowP['date_contract'] ));
                    }

                    $table_body .= '<tr>
                    
                        <td>'.$rowP['no_induk'].'</td>
                        <td>'.$rowP['name'].'</td>
                        <td>'.$ttl.'</td>
                        <td>'.$rowP['phone'].'</td>
                        <td>'.($rowP['gender'] == "P" ? "Laki-laki" : "Perempuan").'</td>
                        <td align="center">'.$rowP['position'].'</td>
                        <td align="center">'.strtoupper($rowP['division']).'</td>
                        <td>'.$contract.'</td>
                        <td>'.$rowP['upt'].'</td>

                    </tr>';
                }
            }


            
            

            // header table
            $table = '
                <table border="1" width="100%" cellpadding="6" style="font-size: 10px">
                    <tr>
                        <th width="10%" align="center"><b>No.Induk</b></th>
                        <th width="15%" align="center"><b>Nama</b></th>
                        <th width="10%" align="center"><b>TTL</b></th>
                        <th width="10%" align="center"><b>Telepon</b></th>
                        <th width="10%" align="center"><b>Gender</b></th>
                        <th width="10%" align="center"><b>Jabatan</b></th>
                        <th width="10%" align="center"><b>Divisi</b></th>
                        <th width="10%" align="center"><b>Tanggal Kontrak</b></th>
                        <th width="15%" align="center"><b>UPT</b></th>
                    </tr>

                    '.$table_body.'
                    

                </table>';

            $pdf->writeHTML($table, true, false, true, false, '');



            $pdf->Ln(10, false);
            $ttd = '
                <table border="0">
                    <tr>
                        <td colspan="2" align="right">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '.date('Y').'</td>
                    </tr>
                    <tr>
                        <td colspan="2" height="80"></td>
                    </tr>
                    <tr>
                        <td width="75%"></td>
                        <td width="20%" align="center">(. . . . . . . . . . . . . . . . .)</td>
                    </tr>
                </table>
            ';

            $pdf->writeHTML($ttd, true, false, true, false, '');


            // output
            $pdf->Output($name_file.'.pdf', 'I');

        }






        // header attr
        function header_attr( $title ) {

            // create new PDF document
            $this->load->library('pdf');
            $pdf = new Pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

            // set document information
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor('Dwi Nur Cahyo');
            $pdf->SetTitle($title);
            // $pdf->SetSubject('TCPDF Tutorial');
            // $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

            // set default header data
            $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 006', PDF_HEADER_STRING);

            // set header and footer fonts
            $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
            $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

            // set default monospaced font
            $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

            // set margins
            $pdf->SetMargins(PDF_MARGIN_LEFT, 35, PDF_MARGIN_RIGHT);
            $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
            $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

            // set auto page breaks
            $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

            // set image scale factor
            $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

            // set some language-dependent strings (optional)
            if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
                require_once(dirname(__FILE__).'/lang/eng.php');
                $pdf->setLanguageArray($l);
            }

            // ---------------------------------------------------------

            // set font
            $pdf->SetFont('times', '', 10);

            return $pdf;
        }

    
    }
    
    /* End of file M_employee.php */
    