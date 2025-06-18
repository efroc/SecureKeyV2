<?php

    /** Classe Table qui représente une table associative de triplets
     *  Exemple : [
     *              "service"  => "Université"
     *              "username" => "efroc"
     *              "password" => "..."
     *            ]
     */ 
    class Table {
        private $myTable;

        public function __construct() {
            $this->myTable = [];
        }

        /*=========== Getters Setters ============*/
        public function getTable() : array {
            return $this->myTable;
        }

        public function setTable(array $newTable) {
            $this->myTable = $newTable;
        }

        /*============== Fonctions ================*/
        public function ajouter($service, $user, $password) {
            $this->myTable[] = [
                "service"  => $service,
                "username"     => $user,
                "password" => $password
            ];
        }

        public function get(int $index) {
            if(isset($this->donnees[$index])) {
                return $this->getTable()[$index];
            } else {
                return null;
            }
        }

        public function getByService($service) {
            foreach ($this->getTable() as $entree) {
                if (strtolower($entree["service"]) === strtolower($service)) {
                    return $entree;
                }
            }
            return null;
        }

        public function size() {
            return count($this->getTable());
        }
    }
?>