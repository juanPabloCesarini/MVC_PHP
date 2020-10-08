<?php
    class Paginas extends Controller{
         
        public function __construct(){
            
        }

        public function index(){
            
            $datos = [
                "titulo" => "Bienvenidos a FSF"
            ];
            $this->vista('pages/inicio',$datos);
        }

        
   }
   
?>
