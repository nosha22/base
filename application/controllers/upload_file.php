<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Upload_file extends CI_Controller{


    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }


    function upload_it() {
        //load the helper
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('Excel');
        $this->load->model('Getdataexcel');
        //Configure
        //set the path where the files uploaded will be copied. NOTE if using linux, set the folder to permission 777
        $config['upload_path'] = 'application/views/uploads/';

        // set the filter image types
        //$config['allowed_types'] = 'gif|jpg|png';
        $config['allowed_types'] = 'xls|xlsx|xslm';

        //load the upload library
        $this->load->library('upload', $config);

        $this->upload->initialize($config);

        $this->upload->set_allowed_types('*');

        $data['upload_data'] = '';

        //mkdir($config['upload_path'] . $this->input->post('pasta'), 0777, true);

        //if not successful, set the error message
        if (!$this->upload->do_upload('userfile')) {
            $data = array('msg' => $this->upload->display_errors());

        } else { //else, set the success message
            $data = array('msg' => "Upload success!");
            //$data['upload_data'] = $this->input->post('pasta');
            $data['upload_data'] = $this->upload->data();
            $data['nomefx']= $data['upload_data']['file_name'];
            $data['caminhofx']=$config['upload_path'].$data['nomefx'];
            $data['valor_cel']=$this->Getdataexcel->get_step1($data['caminhofx']);
        }

        //load the view/upload.php
        $this->load->view('welcome_message', $data);

    }

}