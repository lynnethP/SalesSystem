<?php 

    class ErrorController extends Controllers
    {
        public function __construct() {
            parent::__construct();  //Ejecutar método constructor de la clase de la cual se está heredando (Controllers)
        }

        public function Error($url){
            $this->view->Render($this, "error", $url);    //Al heredar de Controllers se tiene acceso al objeto view que instancia la clase View
        }
    }
    

?>