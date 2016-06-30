<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
if( $_REQUEST["id"] ) {

   $id = $_REQUEST['id'];
 

   //connessione al db
   $con = mysqli_connect('localhost','jingalmera','','my_jingalmera');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
//interrogazione db
mysqli_select_db($con,"my_jingalmera");
$sql="SELECT * FROM `Device` WHERE ID ='".  mysqli_real_escape_string($con, $id)
. "'";
$result = mysqli_query($con,$sql);

//stampo risultati
$row = mysqli_fetch_array($result);

    echo "  
  <section id='offers'>
    <div class='container'>
      <div class='row'>
        <div class='col-md-12'>
          <div class='blog-archive-area'>
            <div class='row'>
			  <div class='col-md-12'>
			    <div class='col-md-4'>
				  <div class='device-content'>
				    <div class='device-title'>
					  <h4>" .$row['Nome']. "</h4>
					</div>
					<div class='device-img'>
                      <img src='" .$row['Immagine']. "' alt='" .$row['Nome']. "'>
                    </div>
					<div class='device-price'>
                      <p>Prezzo :</p>
                      <span>" .$row['Prezzo']. "</span>
                    </div>
				  </div>
				</div>
				<div class='col-md-8'>
				  <div class='device-descr'>
					<main>
					  <input id='tabpresentation' type='radio' name='tabs' checked>
					  <label for='tabpresentation'>Presentazione</label>
					  <input id='tabspecification' type='radio' name='tabs'>
					  <label for='tabspecification'>Specifiche</label>  
					<section id='presentation'>
                    <pre>" .$row['Descrizione']. "</pre>
					</section>
					<section id='specification'>
					  <div class='row'>					    
						<div class='col-sm-9'>
						<pre>" .$row['DatiTecnici']. "</pre>
						</div>
					  </div>					 
					  </div>
					</section>
					</main>			
				  </div>
				</div>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </section>";

mysqli_close($con);

}

?>
</body>
