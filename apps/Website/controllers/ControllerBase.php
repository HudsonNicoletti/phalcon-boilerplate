<?php

namespace Website\Controllers;

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{

  public function initialize()
  {
    $this->assets
    ->addCss('assets/public/styles/main.css')
    ->addJs('assets/public/scripts/jquery.min.js')
    ->addJs('assets/public/scripts/app.js');
  }

}
