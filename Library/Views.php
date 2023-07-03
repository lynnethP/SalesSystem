<?php 

    class Views
    {
        public function Render($controllers, $view, $model){    //se captura el objeto $model y se pasa a la vista 
            $array = explode("Controller", get_class($controllers));
            $controller = $array[0];
            // echo $controller;
            require VIEWS.DF."head.php";
            require VIEWS.$controller."/".$view. '.php';    //se concatena la variable $view pasada como parametro, en este caso "index" definido en IndexController
            require VIEWS.DF."footer.php";

            // var_dump(VIEWS.$controller."/".$view. '.php');
            // var_dump($controllers);
        }

        
    }
    

?>