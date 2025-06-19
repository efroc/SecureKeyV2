<?php
    include_once("Table.php");

    class Lecture {
        private $content;

        public function __construct(string $nomFichier) {
            $this->content = file_get_contents(__DIR__ . '/../../save/' .$nomFichier);
        }

        public function getContent() {
            return $this->content;
        }

        public function printContent() {
            if ($this->content === false) {
                echo "Erreur lors de la lecture du fichier.";
            } else {
                echo nl2br($this->content); // Affiche avec les sauts de ligne HTML
            }
        }

        /***** Fonctions de traitement de chaine *****/
        public function stringToSubstring(string $myString, string $sep) : array {
            $myArray = array();
            if(empty($myString) || strlen($sep) > 1) {
                return $myArray;
            }
            $word = "";
            for($i = 0; $i < strlen($myString); $i++) {
                if($myString[$i] === $sep && strlen($word) !== 0) {
                    $myArray[] = $word;
                    $word = "";
                } else {
                    $word = $word. $myString[$i];
                }
            }
            if (strlen($word) !== 0) {
                $myArray[] = $word;
            }
            return $myArray;
        }

        public function readToTable() : array {
            $myArray = [];
            $tripleString = $this->stringToSubstring($this->getContent(), "#");
            if(empty($tripleString)) {
                return $myArray;
            }
            foreach($tripleString as $triple) {
                $elem = $this->stringToSubstring($triple, ";");
                if(count($elem) === 3) {
                    $myArray[] = [
                        "service"  => $elem[0],
                        "username"     => $elem[1],
                        "password" => $elem[2]
                    ];
                }
            }
            return $myArray;
        }
    }

    
?>