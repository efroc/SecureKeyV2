<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>SecureKeyV2</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' href='src/style/style.css'>
</head>
<body>
    <?php
        include_once("src/classes/Table.php");
        include_once("src/classes/Traitement.php");
        include_once("src/classes/Password.php");
        $lecture = new Lecture("data.txt");
        $table = new Table($lecture->readToTable());
    ?>
    
<!--=========== HEADER =============-->
    <header>
        <img class="icon-help" onclick="window.location.href='pages/help.php';" src="images/help-icon.png"></a>
        <h1>SecureKey</h1>
    </header>

<!--============ MAIN ==============-->
    <main>
        <!----- menu ----->
        <div class="menu">
            <div class="actions-list">
                <div class="add-action">
                    <img class="icon-add" src="images/add-icon.png">
                    <span class="fr">Ajouter une connexion</span><span class="en">Add a connection</span>
                </div>
                <!-- ajouter d'autres actions-->
                <hr>
                <div class="view-action">
                    <img class="icon-eye" src="images/see-icon.png">
                    <span class="fr">Voir les mots de passe</span><span class="en">See the passwords</span>
                </div>

            </div>
        
            <button id="language-button" class="language-button" onclick="changeLanguage()"><span class="fr">FR</span><span class="en">EN</span></button>
        </div>

        <!--- contenu ---->
        <div class="content">
            <table>
                <thead>
                    <tr>
                        <th><span>Index</span></th>
                        <th><span class="fr">Nom/Entité</span><span class="en">Name/Entity</span></th>
                        <th><span class="fr">Nom d'utilisateur/E-Mail</span><span class="en">Username/E-Mail</span></th>
                        <th><span class="fr">Mot de passe</span><span class="en">Password</span></th>
                        <th><span class="fr">Opérations</span><span class="en">Operations</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>0</td>
                        <td>Nom1</td>
                        <td>Username1</td>
                        <td>Password1</td>
                        <td>
                            <img class="icon-edit" src="images/edit-icon.png">
                            <img class="icon-trash" src="images/trash-icon.png">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <!-- formulaire -->
        <div class="formulaire">


        </div>
    </main>




    <?php
        //end
    ?>
    <script src="src/script/script.js"></script>
</body>
</html>