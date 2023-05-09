<?php
// main controller class

class Controller {
    public function view($view, $data = []){
        $filename = "../app/views/".$view.".view.php";
        
        if(file_exists($filename)){
            require $filename;
        }else{
            echo"Could not found".$filename;
        }
    }
}