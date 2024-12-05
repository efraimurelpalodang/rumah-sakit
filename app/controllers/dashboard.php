<?php

class Dashboard extends Controller {

  public function index()
  {
    $data['judul'] = 'Dashboard';
    $data['style'] = BASEURL . 'css/styleDashboard.css';
    $this->view('templates/header', $data);
    $this->view('templates/sideNav');
    $this->view('dashboard/index');
    $this->view('templates/footer');
  }
}