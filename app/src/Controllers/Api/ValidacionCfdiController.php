<?php

namespace App\Controllers\Api;

use App\Controllers\Primitives\Controller as Controller;
use Psr\Container\ContainerInterface as Container;

class ValidacionCfdiController extends Controller{
  
  //
  public function __construct(Container $container){

    //
    $this->container=$container;
    $this->setMainInstances();
    $this->setSoapInstances();

  }
  //
  protected function setMainInstances(){

    //
    $this->config=$this->container['config'];
    $this->globals=$this->config->globals();

  }
  //
  protected function setSoapInstances(){

    //
    $this->soap['validacion-cfdi']=$this->container['validacion-cfdi'];

  }
  protected function setViewInstances(){

    $this->views=$this->container['dynamic-views'];

  }
  //
  public function line($request,$response,$args){

    $rfcEmisor=$args['rfcEmisor'];
    $rfcReceptor=$args['rfcReceptor'];
    $uuid=$args['uuid'];
    $total=$args['total'];
    //
    $result=[];
    //
    $result['status']=$this->soap['validacion-cfdi']->validar($rfcEmisor,$rfcReceptor,$uuid,$total);
    //
    header("Access-Control-Allow-Origin: *");
    header('Content-Type','application/json');
    echo(json_encode($result));

  }

}


?>