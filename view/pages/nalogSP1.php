<?php

// IMPORT VARIABLES
include_once '../../view/components/vars.php';

?>

<!DOCTYPE html>
<html lang="sr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../view/assets/css/style.css">
  <title><?=$app_heading;?></title>
</head>

<body>

  <!-- HEADER SECTION -->
	<header>

    <!-- NAVBAR SECTION -->
		<?php include_once '../../view/components/navbar.php';?>
		<!-- /NAVBAR SECTION -->

		<!-- INPUT COMPONENT -->
		<?php include_once "../../view/components/input_component.php";?>
		<!-- /INPUT COMPONENT -->

  </header>
  <!-- /HEADER SECTION -->

	<!-- MAIN SECTION -->
	<main>

		<!-- TABLE 01 COMPONENT -->
		<?php include '../../view/components/table01.php';?>
		<!-- /TABLE 01 COMPONENT -->

	</main>
	<!-- /MAIN SECTION -->

</body>

</html>