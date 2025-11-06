<?php
class Home extends Controller {
    public function index()
    {
        $this->view('home/index');
    } 
    public function show()
    {
        echo __METHOD__;
    }
} 
?>