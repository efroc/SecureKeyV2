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

        public function toString() : string {
            $result = "";
            for($i = 0; $i < count($this->getTable()); $i++) {
                $result = $result .$i. "- " .$this->getTable()[$i]->toString(). "\n";
            }
            return $result;
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
    }
?>