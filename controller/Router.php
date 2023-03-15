<?php 
  namespace Router;
  class Router {
    public $uri = [];
    public function __construct()
    {
      $this->uri = array (
        "/"=>"view/form.php",
        "/form"=>"view/form.php",
        "/form/validation"=>"view/validation.php"
      );
    }
    public function route($path) {
      if (array_key_exists($path, $this->uri)) {
        return $this->uri[$path];
      }
      else {
        return '404error.php';
      }
    }
  }
?>