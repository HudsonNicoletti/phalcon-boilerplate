<?php
$router->add("/contact", [
  "namespace"  => "Api\Controllers",
  "module"     => "Api",
  'controller' => 'contact',
  'action'     => 'index'
])->via(["POST"]);
