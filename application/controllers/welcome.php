<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	/*public function index()
	{
        $this->load->library('Excel');
        $this->load->library('xml_writer');
        $this->load->model('Getdataexcel');
        $this->load->helper('url');
        $this->load->helper('file');

        $xml = new Xml_writer();
        $xml->setRootName('CertificadoEnergetico');





        $xml->initiate();
        $xml->startBranch('Tipo');
        $xml->addNode('ID','4');
        $xml->endBranch();
        $xml->startBranch('Contexto');
        $xml->addNode('ID','1');
        $xml->endBranch();
        $xml->startBranch('MotivoEmissao');
        $xml->addNode('ID','1');
        $xml->endBranch();
        $data=array();
        $data['xml'] = $xml->getXml(FALSE);

        //$data['nome']=$this->Getdataexcel->get_step1();

        if ( ! write_file('d:/adene/joaobrito.xml', $data['xml']))
        {
            $data['nome'] ='Unable to write the file';
        }
        else
        {
            $data['nome']= 'File written!';
        }
        //$this->load->view('xml', $data);
        $this->load->view('welcome_message',$data);
	}*/

    public function index()
    {
        $this->load->helper('url');
        $this->load->view('welcome_message');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */