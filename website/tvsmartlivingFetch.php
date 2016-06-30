<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
</head>
<body>
<?php


   //connessione al db
   $con = mysqli_connect('localhost','jingalmera','','my_jingalmera');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}


//interrogazione db
mysqli_select_db($con,"my_jingalmera");
$sql="SELECT * FROM `Device` WHERE Categoria LIKE 'smartliving'";
$result = mysqli_query($con,$sql);

//stampo risultati
while($row = mysqli_fetch_array($result)) {

    echo "<div class='col-md-3 col-sm-6 col-xs-12'>
            <div class='single-offer'>
                <div class='device-img'>
                   <img src='" . $row['Immagine'] . "' alt='" . $row['Nome'] . "'>
                </div>
                <div class='device-name'>
                   <p>" . $row['Nome'] . "</p>
                   <span>" . $row['Prezzo'] . "</span>
                </div>
                <div class='offer-link'>
                   <a href='tvsmartliving-detail.html?id=" . $row['ID'] . "'>Dettagli</a>
                </div>
            </div>
          </div>";
}
mysqli_close($con);


?>
</body>
</html>
