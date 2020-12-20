<html>

<style>
    <?php include 'style.css';?>
</style>
<body>

    <form method="post">
        <p> Enter Value 1:<input type="text" name="name"> <br>
            <p> Enter Value 2:<input type="text" name="name2"><br>
        <input type="submit" value="send">
    </form>


    <br>
    <h3>Your input:</h3><br>

<?php

if (isset($_POST['name']) && isset($_POST['name2'])){
    $num  = intval($_POST['name']);
    $num2 = intval($_POST['name2']);
    echo $num*$num2;
}

else{
    echo '';
}


?>
