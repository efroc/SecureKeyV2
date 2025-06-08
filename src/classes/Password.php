<?php
    /** Génère un mot de passe entre 10 et 32 caractères
     *  de longueur $length
     *  12 par défaut
     */
    function passwordGenerator(int $length = 12) : string {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
        $password = '';
        if($length < 10) $length = 10;
        if($length > 32) $length = 32; 
        for ($i = 0; $i < $length; $i++) {
            $password .= $chars[random_int(0, strlen($chars) - 1)];
        }
        return $password;
    }
?>