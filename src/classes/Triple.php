<?php
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