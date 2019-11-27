<?php
    include('helpers/StoreHelper.php');
?>

<html>
<body>
    <?php
        $storeHelper = new StoreHelper();
    $total = 0;

        if(isset($_POST['number'])and is_numeric($_POST['number']) ) {
            $storeHelper->storeNewLine($_POST['number']);
        }

        $lines = $storeHelper->linesAsArray();
        foreach ($lines as $line){
            if (is_numeric($line)){
            echo $line."<br>";
            $total = $total + $line;
        }
        }
        echo "<strong>Total:".$total." </strong>";
    ?>

    <form method="POST">
        <input type="text" name="number">
        <input type="submit">
    </form>
    <form action="clear.php" method="post">

        <input type="hidden" name="action" value="empty">
        <input type="submit" value="empty" onclick=""/>
    </form>
    <br>
    <br>
    <br>

    <form action="InvertFile.php" method="post" >
        <input type="submit" value="Reverse File">
    </form>
</body>
</html>