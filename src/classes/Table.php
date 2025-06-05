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
                echo($elem->toString());
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

    /** Classe Triple qui représente un tableau comprenant 3 strings
     *  Exemple : [entité, username, password]
     */ 
    class Triple {
        private $triple = array();

        public function __construct(string $fst = "", string $snd = "", string $thd = "") {
            $this->triple[] = $fst;
            $this->triple[] = $snd;
            $this->triple[] = $thd;
        }

        /*=========== Getters Setters ============*/ 
        public function getFirst() : string {
            return $this->triple[0];
        }

        public function getSecond() : string {
            return $this->triple[1];
        }

        public function getThird() : string {
            return $this->triple[2];
        }

        public function setFirst(string $newFirst) {
            $this->triple[0] = $newFirst;
        }

        public function setSecond(string $newSecond) {
            $this->triple[1] = $newSecond;
        }

        public function setThird(string $newThird) {
            $this->triple[2] = $newThird;
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