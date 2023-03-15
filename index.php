<?php
  require_once('controller/Router.php');
  use Router\Router;
  $router = new Router();
  $page = $_SERVER['REQUEST_URI'];
  $page = $router->route($page);
  include($page);
?>