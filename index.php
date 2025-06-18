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
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        include_once("src/classes/Table.php");
        $table = new Table();
        $table->ajouter("service1", "username1", "password1");
    ?>
    <main id="main">
        <div class="head" id="head">
            <div>
                <img class="head-icon" src="images/key-icon.png">
                <h1 class="head-title">SecureKey.</h1>
            </div>
            <img class="parameters-icon" onclick="window.location.href='pages/settings.php';" src="images/parametres-icon.png">
        </div>
        <div class="parameters" id="parameters">
            <span class="parameters-title">Connexions de User</span>
        </div>
        <div class="research" id="research">
            <form class="search-bar">
                <input type="text" id="search-input" placeholder="Rechercher...">
                <button type="submit">🔍</button>
            </form>
        </div>
        <div class="table">
            <div class="htable">
                <div><span class="fr">Nom</span></div>
                <div><span class="fr">Nom d'utilisateur</span></div>
                <div><span class="fr">Mot de passe</span></div>
                <div>
                    <button class="add-button" onclick="window.location.href='pages/form.php';">+</button>
                    <span class="fr">Ajouter à la liste</span>
                </div>
            </div>
            <div class="btable" id="btable">
                <!-- remplir avec les données (+ boutons edit et supp à chaque ligne)-->
                <?php
                    foreach($table->getTable() as $key => $elem) {
                ?>
                <div class="ltable">
                    <div><span><?php echo($elem["service"]);  ?></span></div>
                    <div><span><?php echo($elem["username"]); ?></span></div>
                    <div><span><?php echo($elem["password"]); ?></span></div>
                    <div>
                        <span>ajouter les boutons</span>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </main>
    <script src="src/script/script.js"></script>
</body>
</html>