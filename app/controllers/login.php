<?php

class Login extends Controller {

  public function index() {
    $data['judul'] = 'Form Login';
    $this->view('templates/header', $data);
    $this->view('login/index');
    $this->view('templates/footer');
  }

}