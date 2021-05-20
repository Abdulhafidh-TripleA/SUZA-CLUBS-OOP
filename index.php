<?php
include "admin/classes/connection.php";        
?>

<!DOCTYPE html>
<html>
<head>
	<title>SUZA CLUBS</title>
	<!-- MAIN CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- LINKAGE CSS FILES -->
	<link rel="stylesheet" type="text/css" href="Link/library/icofont/icofont.min.css">
	<link href="Link/library/boxicons/css/boxicons.min.css" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="Link/library/bootstrap/css/bootstrap.css">
</head>

<body>
  <!-- <div id="preloader"></div> --><!-- Preloder -->

  <!-- ======= Header ======= -->
  <?php
    include "include/header.php";
  ?>

	<!-- ======= Hero Section ======= -->
    <section id="hero">
    	<div class="container">
    		<h1>Suza Clubs,<br>Best Experience</h1>
        	<h2>We are team of talanted on working as a family</h2>
      </div>
    </section><!-- End Hero -->

    <main id="main">

    	<div id="block">
			<div class="row">
				<div class="col-6">
					<h5>&nbsp;&nbsp;&nbsp;<strong>Clubs</strong> Events </h5>
				</div>

				<div class="col-6" align="right">
					<h5><a href="#">View More Events</a> &nbsp;&nbsp;&nbsp;</h5>
				</div>
			</div>
		</div>

		<?php
			include "classes/bigEvent.php";
		    $object = new SingleEvent;
		    $OneBigEventt = $object->OneBigEvent();
		?>

    </main>

    <br>
    <!-- ======= Footer ======= -->
      <?php include "include/footer.php"?>


  	<!--  LINKAGE JS FILES -->
  	<script src="Link/library/jquery/jquery.min.js"></script>

 	 
  	<!-- MAIN JS FILES -->
  	<script src="Link/js/main.js"></script>

</body>
</html>