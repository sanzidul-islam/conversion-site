<?php 
  
  $change = "";
   $data = "" ;
   $flag = false;
 $convertYpe = $_POST["change"];
 $data = $_POST["data"];
 $data = $_POST["data"];

 if (empty($data)) {
    $PasswordEr = "value is required";
      $flag = true;
    
  
  }
  if(!$flag){
      
      $result = $data*$inc;
 $result = writeText( $value , $result);
    if(!$result){
      $success = "Saved Succesfully";
    }
    else{
      $error = "Error While saving";
    }
  }
  function writeText($value){
    $fileName= "file.txt";
    $r= fopen($fileName, "a");
    $file = fwrite($r ,$value);
    fclose($r);
    return $file;
  }

?>