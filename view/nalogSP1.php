<?php

include_once 'vars.php';

$organizacija = isset($_POST['organizacija']) ? $_POST['organizacija'] : "";

?>

<!DOCTYPE html>
<html lang="sr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/style.css">
  <title><?=$app_heading;?></title>
</head>

<body>
  <!-- HEADER SECTION -->
	<header>
    <h1><?=$app_heading;?></h1>
    <!-- NAVBAR SECTION -->
		<navbar>
			<ul>
				<li>
					<a href="./unos_podataka.php">Unos podataka</a>
				</li>
				<li>
					<a href="./nalogSP2.php">Друга страна</a>
				</li>
			</ul>
    </navbar>
		<!-- /NAVBAR SECTION -->
		<br>
  <hr>
  <br>
<!-- FORM SECTION -->
<form method="POST">
<label for="naziv-organizacije">Izaberi organizaciju:</label>
<br>
<select name="organizacija" id="organizacija">
  <option value="OS Svetozar Markovic Kraljevo">OS Svetozar Markovic Kraljevo</option>
  <option value='OS neko drugi'>OS neko drugi</option>
  <option value='OS ... neko treci'>OS ... neko treci</option>
  <input type='submit' value='odaberi'>
</select>
<br>
<p>Odabrali ste opciju: <?php echo $organizacija; ?></p>
</form>
<!-- /FORM SECTION -->

  </header>
  <!-- /HEADER SECTION -->
  <br>
  <hr>
  <br>
<!-- TABLE SECTION -->
	<table id="table-01" cellspacing="0" border="0">
		<colgroup span="60" width="21"></colgroup>
		<tr>
			<td height="20" align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td colspan=26 align="center" valign=middle>
      <?=$heading_02;?>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
		</tr>
		<tr>
			<td style="border-bottom: 1px solid #000000" colspan=28 rowspan=2 height="40" align="center" valign=middle>
				<?=$heading_03?>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td colspan=7 align="left" valign=middle>
      <?=$heading_04?>
			</td>
			<td colspan=10 align="left" valign=middle>
				<?php echo $organizacija; ?>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<!-- <td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td> -->
		</tr>
		<tr>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td colspan=2 align="left" valign=middle>
      Број
			</td>
			<td style="border-bottom: 1px dotted #000000" colspan=7 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
		</tr>
		<tr>
			<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000"
				rowspan=4 height="80" align="center" valign=middle>
				Д<br>н<br>е<br>в<br>н<br>и<br>ц<br>е
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=10 rowspan=2 align="center" valign=bottom>
				Дан одласка ................ у .......... час.
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=2 rowspan=2 align="center" valign=middle>
				Број час.
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=2 rowspan=2 align="center" valign=middle>
				Број днев.
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=3 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=5 rowspan=2 align="center" valign=middle>
				По динара
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=5 rowspan=2 align="center" valign=middle>
				СВЕГА ДИНАРА
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td style="border-bottom: 1px dotted #000000" colspan=9 align="center" valign=middle sdnum="1033;1033;M/D/YYYY">
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
		</tr>
		<tr>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td style="border-top: 1px dotted #000000" colspan=6 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
		</tr>
		<tr>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=10 rowspan=2 align="center" valign=bottom>
				<?=$arrival?>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=2 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=2 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=3 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=4 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=4 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td colspan=28 rowspan=2 align="center" valign=middle>
				<?=$heading_01?>
			</td>
		</tr>
		<tr>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
		</tr>
		<tr>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				height="20" align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=5 align="center" valign=middle>
				од
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=5 align="center" valign=middle>
				до
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=5 align="center" valign=middle>
				Врста превоза
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=2 align="center" valign=middle>
				<font color="#000000">кл.</font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=5 align="center" valign=middle>
				<font color="#000000">динара</font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=5 rowspan=17 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td colspan=4 align="left" valign=middle>
				<?=$worker?>
			</td>
			<td style="border-bottom: 1px dotted #000000" colspan=22 align="center" valign=middle><b>
					<font size=3 color="#000000"><br></font>
				</b></td>
		</tr>
		<tr>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				rowspan=16 height="320" align="center" valign=middle>
				П<br>р<br>е<br>в<br>о<br>з<br>н<br>и<br><br><br>т<br>р<br>о<br>ш<br>к<br>о<br>в<br>и
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=5 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=5 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=5 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=2 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=4 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
		</tr>
		<tr>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td colspan=13 align="left" valign=middle>
        <?=$work_place?>
			</td>
			<td style="border-bottom: 1px dotted #000000" colspan=15 align="center" valign=middle><b>
					<font size=3 color="#000000"><br></font>
				</b></td>
		</tr>
		<tr>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=5 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=5 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=5 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=2 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=4 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td style="border-bottom: 1px dotted #000000" colspan=28 rowspan=2 align="left" valign=middle><b>
					<font size=3 color="#000000"><br></font>
				</b></td>
		</tr>
		<tr>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
		</tr>
		<tr>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=5 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=5 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=5 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=2 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=4 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td colspan=11 align="left" valign=middle>
        <?=$day_of_departure?>
			</td>
			<td style="border-bottom: 1px dotted #000000" colspan=4 align="center" valign=middle><b>
					<font size=3 color="#000000"><br></font>
				</b></td>
			<td colspan=2 align="center" valign=middle sdval="20" sdnum="1033;">
				<font color="#000000">20</font>
			</td>
			<td style="border-bottom: 1px dotted #000000" colspan=2 align="center" valign=middle><b>
					<font size=3 color="#000000"><br></font>
				</b></td>
			<td align="center" valign=middle>
				<font color="#000000">у</font>
			</td>
			<td style="border-bottom: 1px dotted #000000" colspan=8 align="center" valign=middle><b>
					<font size=3 color="#000000"><br></font>
				</b></td>
		</tr>
		<tr>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
		</tr>
		<tr>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=5 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=5 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=5 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=2 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=4 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td style="border-bottom: 1px dotted #000000" colspan=28 align="left" valign=middle sdnum="1033;0;@"><b>
					<font size=3 color="#000000"><br></font>
				</b></td>
		</tr>
		<tr>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
		</tr>
		<tr>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=5 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=5 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=5 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=2 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=4 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td colspan=4 align="left" valign=middle>
				Са задатком:
			</td>
			<td style="border-bottom: 1px dotted #000000" colspan=24 align="justify" valign=middle><b>
					<font size=3 color="#000000"><br></font>
				</b></td>
		</tr>
		<tr>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td style="border-bottom: 1px dotted #000000" colspan=28 rowspan=2 align="justify" valign=middle><b>
					<font size=3 color="#000000"><br></font>
				</b></td>
		</tr>
		<tr>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=5 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=5 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=5 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=2 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=4 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
		</tr>
		<tr>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td style="border-bottom: 1px dotted #000000" colspan=28 rowspan=2 align="justify" valign=middle><b>
					<font size=3 color="#000000"><br></font>
				</b></td>
		</tr>
		<tr>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=5 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=5 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=5 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=2 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=4 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
		</tr>
		<tr>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td style="border-top: 1px dotted #000000; border-bottom: 1px dotted #000000" colspan=28 rowspan=2 align="justify"
				valign=middle><b>
					<font size=3 color="#000000"><br></font>
				</b></td>
		</tr>
		<tr>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=5 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=5 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=5 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=2 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=4 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
		</tr>
		<tr>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td colspan=15 align="left" valign=middle>
				<?=$vehicle?>
			</td>
			<td style="border-bottom: 1px dotted #000000" colspan=13 align="center" valign=middle><b>
					<font size=3 color="#000000"><br></font>
				</b></td>
		</tr>
		<tr>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				rowspan=6 height="120" align="center" valign=middle>
				<font color="#000000">О<br>с<br>т<br>а<br>л<br>о</font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=17 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=4 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=4 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
		</tr>
		<tr>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td style="border-bottom: 1px dotted #000000" colspan=28 align="center" valign=middle><b>
					<font size=3 color="#000000"><br></font>
				</b></td>
		</tr>
		<tr>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=17 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=4 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=4 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
		</tr>
		<tr>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td colspan=20 align="left" valign=middle>
				<?=$per_diem?>
			</td>
			<td style="border-bottom: 1px dotted #000000" colspan=6 align="center" valign=middle><b>
					<font size=3 color="#000000"><br></font>
				</b></td>
		</tr>
		<tr>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=17 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=4 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=4 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
		</tr>
		<tr>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td colspan=15 align="left" valign=middle>
				<?=$way_till?>
			</td>
			<td style="border-bottom: 1px dotted #000000" colspan=4 align="center" valign=middle sdnum="1033;0;@"><b>
					<font size=3 color="#000000"><br></font>
				</b></td>
			<td colspan=2 align="center" valign=middle sdval="20" sdnum="1033;">
				<font color="#000000">20</font>
			</td>
			<td style="border-bottom: 1px dotted #000000" colspan=2 align="center" valign=middle><b>
					<font size=3 color="#000000"><br></font>
				</b></td>
			<td colspan=3 align="center" valign=middle>
				<font color="#000000">године,</font>
			</td>
		</tr>
		<tr>
			<td style="border-top: 1px solid #000000; border-left: 1px solid #000000" height="20" align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000"
				colspan=5 rowspan=2 align="center" valign=middle>
				<font color="#000000">Свега</font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=4 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td colspan=28 rowspan=3 align="justify" valign=middle>
				<?=$way_till_02?>
			</td>
		</tr>
		<tr>
			<td style="border-left: 1px solid #000000" height="20" align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
		</tr>
		<tr>
			<td style="border-left: 1px solid #000000" height="20" align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td style="border-right: 1px solid #000000" colspan=7 rowspan=2 align="center" valign=middle>
				Примљена аконтација
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=4 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
		</tr>
		<tr>
			<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000" height="20" align="left"
				valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
		</tr>
		<tr>
			<td style="border-top: 1px solid #000000; border-left: 1px solid #000000" height="20" align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td style="border-top: 1px solid #000000" colspan=14 rowspan=2 align="left" valign=top>
				Број прилога:
			</td>
			<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000"
				colspan=8 rowspan=2 align="center" valign=middle>
				Остаје за исплату - уплату
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=4 rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td
				style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				rowspan=2 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td colspan=11 align="left" valign=middle>
      Путни трошкови падају на терет:
			</td>
			<td style="border-bottom: 1px dotted #000000" colspan=15 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
		</tr>
		<tr>
			<td style="border-left: 1px solid #000000" height="20" align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
		</tr>
		<tr>
			<td style="border-left: 1px solid #000000" height="20" align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td colspan=11 rowspan=2 align="center" valign=bottom>
				<?=$place_date?>
			</td>
			<td style="border-top: 1px solid #000000; border-right: 1px solid #000000" colspan=16 rowspan=2 align="center"
				valign=bottom>
					...............................................................................................
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td style="border-bottom: 1px dotted #000000" colspan=28 align="center" valign=middle><b>
					<font size=3 color="#000000"><br></font>
				</b></td>
		</tr>
		<tr>
			<td style="border-left: 1px solid #000000" height="20" align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
		</tr>
		<tr>
			<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000" height="20" align="left"
				valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td style="border-bottom: 1px solid #000000" align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td style="border-bottom: 1px solid #000000" align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td style="border-bottom: 1px solid #000000" align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td style="border-bottom: 1px solid #000000" align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td style="border-bottom: 1px solid #000000" align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td style="border-bottom: 1px solid #000000" align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td style="border-bottom: 1px solid #000000" align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td style="border-bottom: 1px solid #000000" align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td style="border-bottom: 1px solid #000000" align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td style="border-bottom: 1px solid #000000" align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td style="border-bottom: 1px solid #000000" align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td style="border-bottom: 1px solid #000000" align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td style="border-bottom: 1px solid #000000" align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td style="border-bottom: 1px solid #000000" align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td style="border-bottom: 1px solid #000000" align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=12 align="center"
				valign=middle>
				(подносилац рачуна)
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td style="border-bottom: 1px dotted #000000" colspan=28 align="center" valign=middle><b>
					<font size=3 color="#000000"><br></font>
				</b></td>
		</tr>
		<tr>
			<td height="20" align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td style="border-top: 1px solid #000000" colspan=26 align="center" valign=middle>
				<?=$confirmation_01?>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
		</tr>
		<tr>
			<td colspan=6 height="20" align="left" valign=bottom>
				<?=$confirmation_02?>
			</td>
			<td style="border-bottom: 1px dotted #000000" colspan=8 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=bottom>
				Словима:
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td style="border-bottom: 1px dotted #000000" colspan=11 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td style="border-bottom: 1px dotted #000000" colspan=28 align="center" valign=middle><b>
					<font size=3 color="#000000"><br></font>
				</b></td>
		</tr>
		<tr>
			<td style="border-bottom: 1px dotted #000000" colspan=14 height="20" align="center" valign=bottom>
				<font color="#000000"><br></font>
			</td>
			<td colspan=3 align="left" valign=bottom>
				на терет:
			</td>
			<td style="border-bottom: 1px dotted #000000" colspan=11 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
		</tr>
		<tr>
			<td height="20" align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=bottom>
				У
			</td>
			<td style="border-bottom: 1px dotted #000000" colspan=15 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td colspan=2 align="center" valign=bottom>
				, дана
			</td>
			<td style="border-bottom: 1px dotted #000000" colspan=9 align="center" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td colspan=17 align="left" valign=middle>
				<?=$payment_approval?>
			</td>
			<td style="border-bottom: 1px dotted #000000" colspan=9 align="center" valign=middle><b>
					<font size=3 color="#000000"><br></font>
				</b></td>
		</tr>
		<tr>
			<td colspan=7 height="20" align="center" valign=bottom>
				Ликвидирао,
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td colspan=9 align="center" valign=bottom>
      Руководилац рачуноводства,
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td colspan=8 align="center" valign=bottom>
      Налогодавац,
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
		</tr>
		<tr>
			<td style="border-bottom: 1px dotted #000000" colspan=7 height="20" align="center" valign=bottom>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=bottom>
				<font color="#000000"><br></font>
			</td>
			<td style="border-bottom: 1px dotted #000000" colspan=11 align="center" valign=bottom>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=bottom>
				<font color="#000000"><br></font>
			</td>
			<td style="border-bottom: 1px dotted #000000" colspan=8 align="center" valign=bottom>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
		</tr>
		<tr>
			<td height="20" align="left" valign=middle>
				Исплатио
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td colspan=6 rowspan=2 align="center" valign=middle>
				<?=$amount?>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				Примио
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td colspan=6 rowspan=2 align="center" valign=middle>
      <?=$amount?>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td colspan=8 align="center" valign=middle>
				Налогодавац,
			</td>
		</tr>
		<tr>
			<td height="20" align="left" valign=middle>
				Наплатио
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				Вратио
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
		</tr>
		<tr>
			<td height="20" align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				Благајник
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td style="border-bottom: 1px dotted #000000" colspan=9 align="center" valign=bottom>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td style="border-bottom: 1px dotted #000000" colspan=8 align="center" valign=middle><b>
					<font size=3 color="#000000"><br></font>
				</b></td>
		</tr>
		<tr>
			<td style="border-bottom: 1px dotted #000000" colspan=9 height="20" align="center" valign=bottom>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td colspan=9 align="center" valign=bottom>
				(подносилац рачуна)
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
			<td align="left" valign=middle>
				<font color="#000000"><br></font>
			</td>
		</tr>
	</table>
	<!-- /TABLE SECTION -->

</body>

</html>