<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>SecureKeyV2</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='src/style/style.css'>
</head>
<body>
    <?php
        include "src/classes/Table.php";
        $myTable = new Table();
        $elem1 = new Triple("entité1", "username1", "password1");
        $elem2 = new Triple("entité2", "username2", "password2");
        $elem3 = new Triple("entité2", "username2", "password2");
        echo("bool1");
        echo($elem1->equalsTo($elem2));
        echo("bool2");
        echo($elem2->equalsTo($elem3));
        echo("add");
        $myTable->add($elem1);
        $myTable->add($elem2);
        echo($myTable->printTable());
        
    ?>
</body>
</html>