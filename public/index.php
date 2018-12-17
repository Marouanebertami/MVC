<?php
  namespace PHPMVC;
  use PHPMVC\CTRL\FrontController;

  if(!define('DS')){
    define('DS', DIRECTORY_SEPARATOR);
  }

  require_once '..'.DS.'app'.DS.'config.php';
  // require_once '../app/config.php';

  echo APP_PATH;
  $frontController = new FrontController();


// $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// // var_dump(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
// list($project, $public, $controllers, $action, $params) = explode('/', trim($url, '/'),5);
// // echo $url;
// var_dump($controllers);
// var_dump($action);
// var_dump($params);
//
// $params = explode('/', $params);
// var_dump($params);
