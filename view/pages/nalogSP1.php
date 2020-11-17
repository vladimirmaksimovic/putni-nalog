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
	<title><?= $app_heading; ?></title>

	<style>
		table {
			width: 297mm;
			height: 210mm;
		}

		#table-01 {
			margin: auto;
		}
	</style>
</head>

<body>

	<!-- HEADER SECTION -->
	<header>

		<!-- NAVBAR SECTION -->
		<?php include_once '../../view/components/navbar.php'; ?>
		<!-- /NAVBAR SECTION -->

		<!-- INPUT COMPONENT -->
		<?php include_once "../../view/components/input_component.php"; ?>
		<!-- /INPUT COMPONENT -->

	</header>
	<!-- /HEADER SECTION -->

	<!-- MAIN SECTION -->
	<main>

		<!-- FIRST PAGE - template 03 -->
		<div class="grid-container">

			<!-- LEFT COMPONENT -->
			<?php include_once '../../view/components/left_component.php'; ?>
			<!-- /LEFT COMPONENT -->

			<!-- RIGHT COMPONENT -->
			<?php include '../../view/components/right_component.php'; ?>
			<!-- /RIGHT COMPONENT -->

		</div>
		<!-- /FIRST PAGE -->

		<br>

		<!-- SECOND PAGE - template 03 -->
		<div class="grid-container">
			<!-- LEFT COMPONENT -->
			<?php include_once '../../view/components/empty_component.php'; ?>
			<!-- /LEFT COMPONENT -->

			<!-- RIGHT COMPONENT -->
			<?php require '../../view/components/right_component.php'; ?>
			<!-- /RIGHT COMPONENT -->
		</div>
		<!-- /SECOND PAGE-->

	</main>
	<!-- /MAIN SECTION -->

</body>

</html>