<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "common.php"?>
    <h2>Conversion Rate :</h2>
    
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
<select name="change" id="">
        <option value="">Select one</option>
        <option value="feetInch" >feet To inch</option>
        <option value="inchFeet">inch To feet</option>
    
        </select> <br> <br>
        <label for="">feet :</label>

        <input type="text" id="data" name="data">  <br> 
        <label for="feet">inch :</label>
        <input type="text" value="inc" name="inc">
</form>


    <?php 
    include "extra-file.php";
   
    
    ?>
</body>
</html>