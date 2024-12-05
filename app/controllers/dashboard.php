<?php

class Dashboard extends Controller {

  public function index()
  {
    $data['judul'] = 'Dashboard';
    $data['style'] = DASHBOARD;
    $data['dash'] = 'active';
    $this->view('templates/header', $data);
    $this->view('templates/sideNav', $data);
    $this->view('dashboard/index');
    $this->view('templates/footer');
  }
}