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

  </header>
  <!-- /HEADER SECTION -->

	<!-- MAIN SECTION -->
	<main>

		<!-- TABLE 02 COMPONENT -->
		<?php include '../../view/components/table02.php';?>
		<!-- /TABLE 02 COMPONENT -->

	</main>
	<!-- /MAIN SECTION -->

</body>

</html>