<?php
  namespace PHPMVC;
  use PHPMVC\lib\FrontController;
  //require_once '../app/controllers/frontController.php';

  if(!defined('DS')){
    define('DS', DIRECTORY_SEPARATOR);
  }


  require_once '..' . DS . 'app' . DS . 'config.php';
  require_once APP_PATH . DS . 'lib'. DS .'autoload.php';

  $frontController = new FrontController();
  $frontController->dispatch();
