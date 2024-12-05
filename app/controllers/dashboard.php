<?php

class Dashboard extends Controller {

  public function index()
  {
    // $data['bootstrap'] = '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">';
    $data['judul'] = 'Dashboard';
    $data['style'] = BASEURL . 'css/styleDashboard.css';
    $this->view('templates/header', $data);
    $this->view('templates/sideNav');
    $this->view('dashboard/index');
    $this->view('templates/footer');
  }
}