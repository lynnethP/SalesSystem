<?php 

    class IndexController extends Controllers
    {
        public function __construct() {
            parent::__construct();
        }

        public function Index(){
            $this->role->SetRoles();
            $this->view->Render($this, "index", null);    //Al heredar de Controllers se tiene acceso al objeto view que instancia la clase View
        }
    }
    

?>