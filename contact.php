
<?php

   //connessione al db
   $con = mysqli_connect('localhost','jingalmera','','my_jingalmera');
if (!$con) 
    die('Could not connect: ' . mysqli_error($con));

//interrogazione db
$sql = "INSERT INTO Contatti (Nome, Email, Oggetto, Descrizione)
VALUES ('" . $_POST['nome'] . "', '" . $_POST['email'] . "', '" . $_POST['oggetto'] . "', '" . $_POST['descrizione'] . "')";


if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);


?>

