<?php
    include_once("Table.php");

    class Lecture {
        private $content;

        public function __construct(string $nomFichier) {
            $this->content = file_get_contents(__DIR__ . '\\..\\..\\save\\' .$nomFichier);
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
            $quadrupleString = $this->stringToSubstring($this->getContent(), "#");
            if(empty($quadrupleString)) {
                return $myArray;
            }
            foreach($quadrupleString as $quadruple) {
                $elem = $this->stringToSubstring($quadruple, ";");
                if(count($elem) > 4 || count($elem) < 4) {
                    echo("Fichier corrompu !");
                } else {
                    $myArray[] = [
                        "service"  => $elem[0],
                        "username"     => $elem[1],
                        "password" => $elem[2],
                        "note"     => $elem[3]
                    ];
                }
            }
            return $myArray;
        }
    }

    
?>