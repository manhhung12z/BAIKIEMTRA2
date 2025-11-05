<?php
class HomeController{
    public function index()
    {
        include './views/home/index.php';
    } 
    public function show()
    {
        echo __METHOD__;
    }
} 
?>