<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_message extends CI_Model {
    
        
        function model_prosestambah() {

            $data = array(

                'name'  => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'message' => $this->input->post('comments')
            );

            $html = '<div style="text-align: left; background-color: #e8f5e9; padding: 16px; border-radius: 5px;">
                        <span style="color: #2e7d32"><b>Pesan</b> terkirim </span><br>
                        <small style="color: #757575; font-size: 11px">Terima kasih telah menghubungi pusat Batu Love Garden</small>
                    </div>';
            $this->session->set_flashdata('msg', $html);

            $this->db->insert('message', $data);
            redirect('main/profile');
        }
    }
    
    /* End of file M_message.php */
        