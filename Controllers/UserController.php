<?php 

    class UserController extends Controllers
    {
        public function __construct()
        {
            parent::__construct();      //metodo constructor de la clase que se esta heredando

        }

        public function Register(){
            $roles = $this->role->getRoles();
            // var_dump($roles);
            $modelOne = Session::getSession('modelOne');
            $modelTwo = Session::getSession('modelTwo');
            if (null != $modelOne || null != $modelTwo) {
                $arrayOne = unserialize($modelOne);
                $arrayTwo = unserialize($modelTwo);
                if ($arrayOne != null && $arrayTwo != null) {                    
                    $modelOne = $this->User($arrayOne);                    
                    $modelTwo = $this->User($arrayTwo);    
                    Session::setSession('modelOne', "");
                    Session::setSession('modelTwo', "");
                    $rol = array(array("role" => $modelOne->Role));
                    $i = 1;
                    foreach ($roles as $key => $value) {
                        if ($modelOne->Role != $value['role']) {
                            $rol[$i] = array("role" => $value['role']);
                            // var_dump($rol[$i]);
                            $i++;
                        }
                    }
                    $this->view->Render($this, "register", $modelOne, $modelTwo, $rol);
                }else{
                    $this->view->Render($this, "register", null, null, $roles);
                }
            }else{
                $this->view->Render($this, "register", null, null, $roles);
            }
        }
        public function AddUser(){
            $execute = true;
            $image = null;
            if (empty($_POST['nid'])) {
                $nid = "Ingrese el Nid";
                $execute = false;
            }
            if (empty($_POST['name'])) {
                $name = "Ingrese el nombre";
                $execute = false;
            }
            if (empty($_POST['lastname'])) {
                $lastname = "Ingrese el apellido";
                $execute = false;
            }
            if (empty($_POST['email'])) {
                $email = "Ingrese el email";
                $execute = false;
            }else{
                if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                    $email = "Ingrese un email valido";
                    $execute = false;
                }
            }
            if (empty($_POST['password'])) {
                $password = "Ingrese el password";
                $execute = false;
            }
            if (empty($_POST['phone'])) {
                $phone = "Ingrese el telefono";
                $execute = false;
            }

            if (empty($_POST['user'])) {
                $user = "Ingrese el username";
                $execute = false;
            }

            if ("Seleccione un rol" == $_POST['role']) {
                $role = "Seleccione un rol";
                $execute = false;
            }

            if (isset($_FILES['file'])) {
                $archivo = $_FILES['file']['tmp_name'];
                if ($archivo != null) {
                    $contents = file_get_contents($archivo);
                    $image = base64_encode($contents);
                }
            }

            $modelOne = array(
                $_POST['nid'],
                $_POST['name'],
                $_POST['lastname'],
                $_POST['email'],
                $_POST['password'],
                $_POST['phone'],
                $_POST['user'],
                $_POST['role'],
                $image
            );
            
            Session::setSession('modelOne', serialize($modelOne));
            Session::setSession('modelTwo', serialize(array(
                $nid,
                $name,
                $lastname,
                $email,
                $password,
                $phone,
                $user,
                $role,
                ""
            )));
            header('Location: Register');
            // $this->view->Render($this, "register", null);
        }
    }


?>