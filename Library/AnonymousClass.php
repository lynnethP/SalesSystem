<?php

    class AnonymousClass
    {
        public function User(array $array){
            return new class ($array){  //clase anonima pues no contiene ningun nombre
                public $Nid;
                public $Name;
                public $LastName;
                public $Email;
                public $Password;
                public $Phone;
                public $User;
                public $Role;
                public $Image;

                function __construct($array)
                {   
                    // var_dump($array);
                    if (0 < count($array)) {
                        $this->Nid = $array[0];
                        $this->Name = $array[1];
                        $this->LastName = $array[2];
                        $this->Email = $array[3];
                        $this->Password = $array[4];
                        $this->Phone = $array[5];
                        $this->User = $array[6];
                        $this->Role = $array[7];
                        $this->Image = $array[8];
                    }
                }
            };
        }
    }
    

?>