<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>SecureKeyV2</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' href='../src/style/style.css'>
</head>
<body>
    <?php
       //init 
    ?>
    
<!--=========== HEADER =============-->
    <header>
        <img class="icon-previous" onclick="window.location.href='../index.php';" src="../images/previous-icon.png"></a>
        <h1>SecureKey</h1>
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
                /*
                include("src/classes/Traitement.php");
                include("src/classes/Table.php");
                $l = new Lecture("data.txt");
                $res = $l->readToTable();
                /*$myTable = new Table($res);
                $myTable->printTable();
                */

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