<?php

class App {
  private $controller = 'login',
          $method     = 'index',
          $params     = [];

  public function __construct()
  {
    $url = $this->parseURL();
    
    // Controller
    if( isset($_GET['url']) && file_exists("../app/controllers/{$url[0]}.php") ) {
      $this->controller = $url[0];
      unset($url[0]);
    }

    require_once "../app/controllers/{$this->controller}.php";

    if(class_exists($this->controller)) {
      $this->controller = new $this->controller;
    }

    // Method
    if( isset($url[1]) && method_exists($this->controller, $url[1]) ) {
      $this->method = $url[1];
      unset($url[1]);
    }

    // mengelola parameter
    if(!empty($url)) {
      $this->params = array_values($url);
    }

    // menjalankan Controller dan methodnya, serta mengirimkan parameter jika ada 
    call_user_func_array([$this->controller, $this->method], $this->params);

  }

  public function parseURL() {
    if( isset($_GET['url']) ) {
      $url = rtrim($_GET['url'], '/'); // menghapus slash belakangnya
      $url = filter_var($url, FILTER_SANITIZE_URL); // membersihkan url dari karakter aneh
      $url = explode('/', $url); // memecah url menjadi array berdasarkan slash(/)
      return $url;
    }
  }
}