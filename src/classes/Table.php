<?php

    /** Classe Table qui représente une table associative de quadruplet
     *  Exemple : [
     *              "service"  => "Université"
     *              "username" => "efroc"
     *              "password" => "..."
     *              "note"     => "..."
     *            ]
     */ 
    class Table {
        private $myTable = [];

        /*=========== Getters Setters ============*/
        public function getTable() : array {
            return $this->myTable;
        }

        public function setTable(array $newTable) {
            $this->myTable = $newTable;
        }

        /*============== Fonctions ================*/
        public function ajouter($service, $user, $password, $note = "") {
            $this->getTable()[] = [
                "service"  => $service,
                "username"     => $user,
                "password" => $password,
                "note"     => $note
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