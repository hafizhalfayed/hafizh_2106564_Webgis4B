<?php
defined('BASEPATH') OR exit('NO direct script access allowed')
class Home extends CI_Controller {
    public function index()
    {
        $data= array(
            'judul' => 'Latihan Webgis',
            'content' => 'peta_leaflet'
        );
        $this->load->view('layout/viewunion', $data, FALSE);
    }
}
/* End of file Home.php */