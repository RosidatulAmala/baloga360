<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_spot extends CI_Model {
        

        // menampilkan data spot pariwisata
        function model_tampilspot() {

            return $this->db->get('spot');
        }



        // menampilkan data spot by id
        function model_tampilspotById( $id_spot ) {

            return $this->db->get_where('spot', ['id_spot' => $id_spot]);
        }




        
        // proses tambah
        function model_tambahspot() {

            // inisialisasi variabel 
            $foto = "";
            $config['upload_path']  = './assets/img/baloga-spot/';
            $config['allowed_types']        = 'jpg|png|jpeg';
            $config['max_size']             = 50000; // max 3 mb
            $config['file_name']    = uniqid();

            $this->load->library('upload', $config);
            
            // cek apakah user melakukan upload foto
            if ( ! empty($_FILES['foto']['name']) ) {

                // cek
                if ( $this->upload->do_upload('foto') ) {
    
                    $foto = $this->upload->data('file_name');

                
                } else { // upload gagal
                    

                    // pemberitahuan
                    $html = $this->pesan( $this->upload->display_errors() );
                    $this->session->set_flashdata('msg', $html);

                    redirect('spot/tambah');
                }
            }


            $nilaiSpot = array(

                'nama'      => $this->input->post('nama_spot'),
                'deskripsi' => $this->input->post('deskripsi'),
                'foto'      => $foto,
                'status_ditampilkan'    => $this->input->post('status'),
            );


             // execute query insert
             $this->db->insert('spot', $nilaiSpot);

            // pemberitahuan
            $html = $this->pesan( "Menambahkan spot baloga 360 berhasil" );
            $this->session->set_flashdata('msg', $html);


            // redirect
            redirect('spot');
        }





        // proses edit
        function model_prosesedit() {

            // inisialisasi variabel 
            $id_spot = $this->input->post('id_spot');
            $getDataBalogaById = $this->model_tampilspotById( $id_spot )->row_array();

            $foto = "";
            $config['upload_path']  = './assets/img/baloga-spot/';
            $config['allowed_types']        = 'jpg|png|jpeg';
            $config['max_size']             = 50000; // max 3 mb
            $config['file_name']    = uniqid();

            $this->load->library('upload', $config);
            
            // cek apakah user melakukan upload foto
            if ( ! empty($_FILES['foto']['name']) ) {

                // cek
                if ( $this->upload->do_upload('foto') ) {

                    if ( $getDataBalogaById['foto']) {

                        $direktori = $config['upload_path'] . $getDataBalogaById['foto'];
                        unlink( $direktori );
                    }
    
                    $foto = $this->upload->data('file_name');

                
                } else { // upload gagal
                    

                    // pemberitahuan
                    $html = $this->pesan( $this->upload->display_errors() );
                    $this->session->set_flashdata('msg', $html);

                    redirect('spot/edit/'. $id_spot);
                }
            } else {

                $foto = $getDataBalogaById['foto'];
            }


            $nilaiSpot = array(

                'nama'      => $this->input->post('nama_spot'),
                'deskripsi' => $this->input->post('deskripsi'),
                'foto'      => $foto,
                'status_ditampilkan'    => $this->input->post('status'),
            );


             // execute query update
             $this->db->where('id_spot', $id_spot);
             $this->db->update('spot', $nilaiSpot);

            // pemberitahuan
            $html = $this->pesan( "Mengubah spot baloga 360 berhasil" );
            $this->session->set_flashdata('msg', $html);


            // redirect
            redirect('spot');
        }







        // proses hapus
        function model_hapusspot( $id_spot ) {

            $this->db->where('id_spot', $id_spot);
            $this->db->delete('spot');

            // pemberitahuan
            $html = $this->pesan( "Hapus spot baloga 360 berhasil" );
            $this->session->set_flashdata('msg', $html);


            // redirect
            redirect('spot');
        }









        // alert pesan
        function pesan( $pesan ) {

            $html = '<div class="alert alert-custom alert-default" role="alert">
                        <div class="alert-icon">
                            <span class="svg-icon svg-icon-primary svg-icon-xl">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3" />
                                        <path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </div>
                        <div class="alert-text"><b>Pemberitahuan</b> '.$pesan.'</div>
                    </div>';

            return $html;
        }
    }
    
    /* End of file M_spot.php */
    