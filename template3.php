<?php
session_start();
include('inc/config.php');

$q="SELECT v.producator, v.descriere, s.efervescent FROM vin v INNER JOIN arespecificatie aas ON v.id_vin=aas.id_vin 
                        INNER JOIN specificatie s ON s.id_specificatie=aas.id_specificatie
                        WHERE s.efervescent LIKE 'da'";
$r= mysqli_query($connect,$q);
$rows = array();
while ($row = mysqli_fetch_assoc($r)){
  $rows[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Vanzari online pentru vinuri</title>
<meta name="keywords" content="keyword1,keyword2"/>

<link  href="css/screen.css" media="screen" rel="stylesheet"/>
<link  href="css/style.css" media="screen" rel="stylesheet"/>
<link rel="stylesheet" href="nivo-slider/default/defaultelefon.css" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo-slider/default/nivo-slider.css" type="text/css" media="screen" />
</head>
<body>
<header class="container">
	<h1 class="left">C<span>o</span>me<span>n</span><span>zi</span></h1><img src="images/logo2.png" alt="logo" />
</header>
<!--################################################-->
<nav>
	<ul class="container">
		<li class="active"><a href="index.php">Home</a></li>
		<li><a href="Vin.php">Vinuri</a></li>
		<li><a href="Client.php">Clienti</a></li>
		<li><a href="admin/login.php">User</a></li>
		<li><a href="Licitatii.php">Comenzi</a></li>
	</ul>
</nav>
<!--################################################-->

<section id="s" class="s">
  <div class="datagrid">

  					<table>
  							<thead>
  									<tr>
  											
  											<th>Producator</th>
  											<th>Descriere</th>
  											<th>Efervescent</th>
  										
												
  									</tr>
  							</thead>

  							<tbody>
  							<?php

  						foreach($rows as $v ){
  									echo"
  									<tr>
  											
  											<td>$v[producator]</td>
												<td>$v[descriere]</td>
                                        <td>$v[efervescent]</td>
                        
                       
												

  									</tr>";
  									}

  								 ?>

  							</tbody>
  					</table>

  			</div>



</section>

<!--################################################-->

	<section id="three_parags">
		<span class="container">
			<div class="one_parag span-8">
				<h2>Lista furnizori </h2>
				<p>Aici gasiti detalii despre furnizori</p>
				<a href="furnizori.php" class="p_Button">Vezi&nbsp;&nbsp;&rarr;</a>
			</div>
			<div class="one_parag span-8">
				<h2>Vanzatori norocosi</h2>
				<p>Produse vandute pana in 3000 RON!!</p>
				<a href="medie_pret.php" class="p_Button">Vezi&nbsp;&nbsp;&rarr;</a>
			</div>
			<div class="one_parag span-8 last">
				<h2>Statistici</h2>
				<p>Lista produse detaliate</p>
				<a href="statistici.php" class="p_Button">Stats&nbsp;&nbsp;&rarr;</a>
			</div></span>

	</section>
<span class="clearfix"></span>
<!--################################################-->

<section id="recents" class="container">
	<div id="from_blog" class="span-12">
	<h2>Curs valutar</h2>
		<img src=images/curs.jpg  class="span-2">
		<h3><a href="http://www.cursbnr.ro/">cursul zilei</a></h3>


	</div>


</section>

<!--################################################-->

<footer>
	<div class="container">Copyright 2020 by <b>Lekma</b>, all rights reserved
   <span class="right last">Design by : <a href="https://www.facebook.com/andrei.negoita.7">Negoita Laurentiu</a></span></div>
</footer>

<!--################################################-->
<!--script for the slider-->
<script type="text/javascript" src="scripts/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="scripts/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>

 <!--################################################-->

</body>
</html>
