<?php 

    class Connection
    {   
        public $db;

        function __construct(){
            $this->db = new QueryManager('root', '', 'SalesSystem');   //db contiene el objeto pdo mediante la instacia a QueryManager
            
        }
    }
    

?>