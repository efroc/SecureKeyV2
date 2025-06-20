<?php
    include_once("Table.php");

    class Lecture {
        private $path = __DIR__ . '/../../save/';
        private $content;

        public function __construct(string $nomFichier) {
            $this->path = $this->path.$nomFichier;
            $this->content = file_get_contents($this->path);
        }

        public function getContent() {
            return $this->content;
        }

        public function getPath() {
            return $this->path;
        }

        public function setPath(string $nomFichier) {
            $this->path = $this->path.$nomFichier;
            $this->content = file_get_contents($this->path);
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
            $tripleString = $this->stringToSubstring($this->getContent(), "\n");
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

    class Ecriture {
        private $path = __DIR__ . '/../../save/';

        public function __construct(string $nomFichier) {
            $this->path = $this->path. $nomFichier;
        }

        public function getPath() {
            return $this->path;
        }

        public function ajouterConnexion(string $connexion) {
            file_put_contents($this->path, $connexion."\n", FILE_APPEND);
        }


    }

    class Traitement {
        private $path = __DIR__ . '/../../save/';

        public function __construct($nomFichier) {
            $this->path = $this->path.$nomFichier;
        }

        /***** Getters et setters *****/
        public function getPath() {
            return $this->path;
        }

        public function setPath($nomFichier) {
            $this->path = __DIR__ . '/../../save/'.$nomFichier;
        }

        /***** Fichiers traitement *****/
        public function createFile($nomFichier) {
            $this->setPath($nomFichier);
            file_put_contents($this->path, "");
            chmod($this->path, 0666);
        }

        public function read() {
            return file_get_contents($this->path);
        }

        public function write($texte) {
            file_put_contents($this->path, $texte);
        }

        public function add($texte) {
            file_put_contents($this->path, "\n".$texte, FILE_APPEND);
        }

        /***** *****/
    }
?>