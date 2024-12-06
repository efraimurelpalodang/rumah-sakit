<?php

class Pasien extends Controller {

  public function index()
  {
    $data['judul'] = 'Data Pasien';
    $data['style'] = DASHBOARD;
    $data['stylePage'] = '<link rel="stylesheet" href="'. BASEURL .'/css/tablestyle.css">';
    $data['pasien'] = 'active';
    $this->view('templates/header', $data);
    $this->view('templates/sideNav', $data);
    $this->view('pasien/index');
    $this->view('templates/footer');
  }
}