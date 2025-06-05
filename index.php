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
        $lecture = new Lecture("data.txt");
        $table = new Table($lecture->readToTable());
    ?>
    
<!--=========== HEADER =============-->
    <header>
        <img class="icon-menu" onclick="showMenu()" src="images/menu-icon.png"></a>
        <h1>SecureKey</h1>
        <img class="icon-help" onclick="window.location.href='pages/help.php';" src="images/help-icon.png"></a>
    </header>

<!--============ MAIN ==============-->
    <main>
        <!----- menu ----->
        <div class="menu">
            
        
            <button id="language-button" class="language-button" onclick="changeLanguage()"><span class="fr">FR</span><span class="en">EN</span></button>
        </div>

        <!--- contenu ---->
        <div class="content">
            <?php
                $table->printTable();
            ?>
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