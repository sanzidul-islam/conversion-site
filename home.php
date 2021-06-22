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
    <h2>Conveter</h2>
<form action="<?php  $_SERVER['PHP_SELF'] ?>" method="POST">
<select name="change" id="">
        <option value="">Select one</option>
        <option value="" >feet To inc</option>
        <option value="">inch To feet</option>
    
        </select>  <br>
        <label for="">data :</label>

        <input type="text" id="data" name="data"> <br> <br> 
        <input type="submit" value="change">
</form>

<?php 
include "extra-file.php";
echo $result;

?>
</body>
</html>