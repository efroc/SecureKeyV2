################### Gestionnaire de mots de passe ####################
Objectif : Créer un gestionnaire de mots de passe en local, simple, 
    léger et sécurisé.

Fonctionnalités :
    => Chiffrement local
        * Chiffrage en sauvegarde
        * Déchiffrage en lecture
    => Stockage local (pour éviter l'accès à une BDD)
    => Ajout, suppression, édition des entrées
        * Une entrée (Service, Username, Password, Note)
    => Authentification d'utilisateurs (1 .txt = 1 utilisateur)
    => Visualisation/Non-Visualisation des mots de passe
    => Copie rapide des mots de passe
    => Générateur de mots de passe
    => Recherche rapide d'entrées

Principe de stockage :
    => Sauvegarde dans un fichier .txt
    => Lecture et déchiffrement, puis transfère des données dans un tableau
    => Parcours du tableau et chiffrement, puis écriture dans le fichier