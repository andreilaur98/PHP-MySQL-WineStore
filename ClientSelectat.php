<?php
require 'Controller/ClientController.php';
$clientController = new ClientController();

if(isset($_POST['names']))
    {
       
     
        $clientTables = $clientController->CreateAllClientTables();
      }


$title = 'Client Overview';

?>

<html>
<head>
<meta charset="utf-8">
<title>Comenzi online pentru vinuri</title>
<meta name="keywords" content="keyword1,keyword2"/>

<link  href="css/screen.css" media="screen" rel="stylesheet"/>
<link  href="css/style.css" media="screen" rel="stylesheet"/>
<link rel="stylesheet" href="nivo-slider/default/default.css" type="text/css" media="screen" />
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
		<li><a href="Vin.php">Vin</a></li>
		<li><a href="Client.php">Clienti</a></li>
		<li><a href="admin/login.php">Admin</a></li>
		<li><a href="Licitatii.php">Comenzi</a></li>
	</ul>
</nav>
<!--################################################-->
   
<div id="">
    <?php echo $content2 = $clientController->createClientDropdownList().$clientTables; ?>
</div>    
    
<section id="slider_wrapper" class="slider-wrapper theme-default container">
	<div id="slider" class="nivoSlider" style="border:5px solid #0485b5; box-shadow:none;">
                <img src="images/home1.jpg" data-thumb="images/home1.jpg" alt="" />
                <img src="images/poza1.jpg" data-thumb="images/poza2.jpg" alt=""  />
								<img src="images/poza2.jpg" data-thumb="images/poza2.jpg" alt=""  />
								<img src="images/poza3.jpg" data-thumb="images/poza3.jpg" alt=""  />
            </div>

</section>


<!--################################################-->

	<section id="three_parags">
		<span class="container">
			<div class="one_parag span-8">
				<h2>Vinuri </h2>
				<p>Aici gasiti cea mai larga gama de vinuri</p>
				<a href="Vin.php" class="p_Button">Vezi&nbsp;&nbsp;&rarr;</a>
			</div>
			<div class="one_parag span-8">
				<h2>Clientii nostri</h2>
				<p>In fiecare zi cate un om devine mai fericit</p>
				<a href="Client.php" class="p_Button">Vezi&nbsp;&nbsp;&rarr;</a>
			</div>
			<div class="one_parag span-8 last">
				<h2>De ce noi?</h2>
				<p>Cel mai mare site de domeniu</p>
				<a href="index.php" class="p_Button">Home&nbsp;&nbsp;&rarr;</a>
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