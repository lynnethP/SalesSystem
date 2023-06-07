<?php 

    class Controllers 
    {
        public function __construct(){
            $this->view = new Views();  //Se crea el objeto view, se Instancia la clase Views del archivo Views.php
            $this->loadClassModels();
        }

        public function loadClassModels(){
            $array = explode("Controller", get_class($this));
            $model = $array[0]. '_model';
            $path = 'Models/' . $model. '.php';
            if(file_exists($path)){
                require $path;
                $this->model = new $model();
            }
        } 
    } 
    

?>