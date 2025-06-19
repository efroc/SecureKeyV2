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
        session_start();
        require_once("../src/classes/Table.php");
        if (isset($_SESSION['table'])) {
            $table = $_SESSION['table'];
        } 
        if(isset($_POST['add-submit']) && isset($_POST['id'])) {
            $id = $_GET['id'];
            $table->supprimer($id);
            $_SESSION['table'] = $table;
            header("Location: ../index.php");
            echo("redirection");
            exit;
        }   
        if(isset($_POST['add-cancel'])) {
            header("Location: ../index.php");
        } 
        
    ?>
    <main id="main">
        <div class="head" id="head">
            <div>
                <img class="head-icon" onclick="window.location.href='../index.php';" src="../images/key-icon.png">
                <h1 class="head-title">SecureKey.</h1>
            </div>
            <img class="parameters-icon" onclick="window.location.href='settings.php';" src="../images/parametres-icon.png">
        </div>
        <div class="action-form">
            <?php
                if(isset($_GET['action'])) switch($_GET['action']) {
                    case 'add':
            ?>
            <form class="add-form">

            </form>
            <?php
                        echo("add");
                        break;
                    case 'edit':
            ?>
            <form class="edit-form">

            </form>
            <?php
                        echo("edit");
                        break;
                    case 'supp':
            ?>
            <form action="" class="supp-form" method="post">
                <span>Etes-vous sûr de vouloir supprimer cette connexion ?</span>
                <div>
                    <input type="hidden" name="id" value="<?php echo($_GET['id']); ?>">
                    <input type="submit" name="add-cancel" value="Annuler">
                    <input type="submit" name="add-submit" value="Confirmer">
                </div>
            </form>
            <?php
                        break;
                    default:
                        echo("que dalle");
                        break;
            ?>
            <?php
                }
            ?>
        </div>
    </main>
    <script src="../src/script/script.js"></script>
</body>
</html>