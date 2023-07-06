<?php 

    class UserController extends Controllers
    {
        public function __construct()
        {
            parent::__construct();      //metodo constructor de la clase que se esta heredando
        }

        public function Register(){
            $this->view->Render($this, "register", null);
        }
    }
    
    

?>