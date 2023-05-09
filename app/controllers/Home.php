<?php

class Home extends Controller{
    public function index(){
        $data['var'] = "this is my variable";
        $this->view('home', $data);
    }

    public function edit(){
        echo"view edit ";
    }

    public function delete(){
        echo"view delete ";
    }

    

    

}