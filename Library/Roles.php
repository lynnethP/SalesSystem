<?php
declare (strict_types = 1); //Solo se admite el tipo de dato definido 
class Roles extends Connection
{
    public function __construct()
    {
        parent::__construct();
    }

    public function SetRoles()
    {
        try {
            $this->db->pdo->beginTransaction(); //Aca heredamos de Connection, la cual contiene el objeto db que a su vez hereda el objeto pdo gracias a la instancia de QueryManager   
            $listRoles = array("Admin", "User");
            // var_dump($listRoles);
            $where = " WHERE role = :role";
            foreach ($listRoles as $key => $value) {
                $roles = $this->db->SelectOne("role", "roles", $where, array("role" => $value));    //La llave del array representa el valor que se tiene que buscar en el where :role 
                //el $value del array representa el valor que extrae de la lista de roles Admin o User    
                // var_dump($roles);
                if (is_array($roles)) {
                    if (0 == count($roles['results'])) {
                        $query = 'INSERT INTO roles (role) VALUES (:role)';
                        // var_dump($query);
                        $sth = $this->db->pdo->prepare($query);
                        $sth->execute((array)$this->roles(array($value)));  //Se obtiene el resultado de la Clase anonima y el mismo se convierte en un array 
                        // var_dump($sth);
                    }
                } else {
                    break;
                    return $roles;
                }
            }
            $this->db->pdo->commit();       //Si todo fue exitoso, se procede a guardar la informacion en la bd
        } catch (\Throwable $th) {
            $this->db->pdo->rollBack();     //Regresar todos lso procedimientos realizados en caso de que se genere un error
            return $th->getMessage();
        }
    }

    public function roles(array $array){    

        return new class($array){       //Clase anonima
            var $role;
            function __construct($array)
            {
                if (0 < count($array)) {        //Si el array el mayor a 0, significa que contiene informacion 
                    $this->role = $array[0];
                }
            }
        };
    }
}
