<?php

    /** Classe Table qui représente un tableau de Triple
     *  Exemple : array((entité1, username1, password1), 
     *                  (entité2, username2, password2)
     *                 )
     */ 
    class Table {
        private array $myTable;

        public function __construct(array $newTable = array()) {
            $this->myTable = $newTable;
        }

        /*=========== Getters Setters ============*/
        public function getTable() : array {
            return $this->myTable;
        }

        public function setTable(array $newTable) {
            $this->myTable = $newTable;
        }

        /*============== Fonctions ================*/
        public function printTable() {
            foreach($this->getTable() as $elem) {
                echo($elem->toString(). "\n");
            }
        }

        public function add(Triple $newTriple) {
            $table = $this->getTable();   // récupère une copie
            $table[] = $newTriple;        // ajoute le triple à la copie
            $this->setTable($table);     // remet le tableau mis à jour dans l'objet
        }

        public function get(int $indice) {
            if($indice < 0 || $indice > count($this->getTable())-1) {
                return -1;
            }
            return $this->getTable()[$indice];
        }

        public function size() {
            return count($this->getTable());
        }
    }

    /** Classe Triple qui représente un triplet de string
     *  Exemple : (entité, username, password)
     */ 
    class Triple {
        private string $first;
        private string $second;
        private string $third;

        public function __construct(string $fst = "", string $snd = "", string $thd = "") {
            $this->first = $fst;
            $this->second = $snd;
            $this->third = $thd;
        }

        /*=========== Getters Setters ============*/ 
        public function getFirst() : string {
            return $this->first;
        }

        public function getSecond() : string {
            return $this->second;
        }

        public function getThird() : string {
            return $this->third;
        }

        public function setFirst(string $newFirst) {
            $this->first = $newFirst;
        }

        public function setSecond(string $newSecond) {
            $this->second = $newSecond;
        }

        public function setThird(string $newThird) {
            $this->third = $newThird;
        }

        /*============== Fonctions ================*/
        public function toString() : String {
            return "("  .$this->getFirst(). " , " .$this->getSecond(). " , " .$this->getThird(). ")";
        }

        public function equalsTo(Triple $t2) : bool {
            return ($this->getFirst() === $t2->getFirst() && $this->getSecond() === $t2->getSecond() && $this->getThird() === $t2->getThird());
        }
    }
?>