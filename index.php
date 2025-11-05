<?php
$controller = ucfirst($_REQUEST['controller'] ?? 'home') .'Controller';
$actionName =$_REQUEST['action'] ?? 'index';
require "controller/{$controller}.php";
$controllerobject  = new $controller();
// sẽ xử lí đến method_exists
$controllerobject ->$actionName();
?>