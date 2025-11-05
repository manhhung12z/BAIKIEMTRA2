<?php
class RoomController{
    public function index()
    {
        include './view/home/index.php';
    } 
    public function show()
    {
        echo __METHOD__;
    }


} 
?>