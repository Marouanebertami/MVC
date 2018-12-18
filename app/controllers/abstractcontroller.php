<?php

namespace PHPMVC\Controllers;

use PHPMVC\lib\FrontController;

class AbstractController{

  protected $_controller;
  protected $_action;
  protected $_params;

  public function notFoundAction(){
    $this->_view();
  }

  public function setController($controllerName){
    $this->_controller = $controllerName;
  }

  public function setAction($actionName){
    $this->_action = $actionName;
  }

  public function setParams($paramsName){
    $this->_params = $paramsName;
  }

  public function _view(){
    if($this->_action == FrontController::NOT_FOUND_ACTION){
      // echo 'notfound';
      require_once VIEWS_PATH . 'notfound' . DS . 'notfound.view.php';
    }else{
      $view = VIEWS_PATH . $this->_controller . DS . $this->_action .'.view.php';
      if(file_exists($view)){
        require_once VIEWS_PATH . $this->_controller . DS . $this->_action .'.view.php';
      }
    }
  }

}
