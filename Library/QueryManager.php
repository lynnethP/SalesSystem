<?php 

    class QueryManager
    {
        public $pdo;
        function __construct($USER, $PASS, $DB){
            try {
                $this->pdo = new PDO('mysql:host=localhost;dbname=' .$DB. ';charset=utf8', $USER, $PASS, 
                [
                    PDO::ATTR_EMULATE_PREPARES => false,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]);
            } catch (\Throwable $th) {
                print "¡Error!" . $th->getMessage();
                die();
            }
        }

        public function SelectOne($attr, $table, $where, $param){
            try {
                $where = $where ?? "";  //si el where contiene un valor nulo se deja en blanco
                $query = "SELECT ". $attr . " FROM " . $table . $where;
                // var_dump($query);
                $sth = $this->pdo->prepare($query);
                // var_dump($sth);
                $sth->execute($param);
                $response = $sth->fetchAll(PDO::FETCH_ASSOC);
                // var_dump($response);
                return array("results" => $response);
                // var_dump($response['results']);
            } catch (\Throwable $th) {
                return $th->getMessage();
            }

            $pdo = null;
        }
    }
