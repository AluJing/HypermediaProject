<?php

   //connessione al db
   $con = mysqli_connect('localhost','jingalmera','','my_jingalmera');
if (!$con) 
    die('Could not connect: ' . mysqli_error($con));
if($_POST['nome'] != "" && $_POST['email'] != "")
//interrogazione db

$sql = "INSERT INTO Contatti (Nome, Email, Oggetto, Descrizione)
VALUES ('" .   mysqli_real_escape_string($con,$_POST['nome']) . "', '" .   mysqli_real_escape_string($con,$_POST['email']) . "', '" .   mysqli_real_escape_string($con,$_POST['oggetto']) . "', '" .  mysqli_real_escape_string($con,$_POST['descrizione']) . "')";


    
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>

