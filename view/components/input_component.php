<?php
/**
 * POKUPI I SMESTI VREDNOSTI POLJA U VARIABLE
 */

$organizacija = isset($_POST['organizacija']) ? $_POST['organizacija'] : "";
$delovodni_broj = isset($_POST['delovodni-broj']) ? $_POST['delovodni-broj'] : "";
$datum_naloga = isset($_POST['datum-naloga']) ? $_POST['datum-naloga'] : "";
$radno_mesto = isset($_POST['radno-mesto']) ? $_POST['radno-mesto'] : "";
$datum_putovanja = isset($_POST['datum-putovanja']) ? $_POST['datum-putovanja'] : "";
$mesto_putovanja = isset($_POST['mesto-putovanja']) ? $_POST['mesto-putovanja'] : "";
$relacija_putovanja = isset($_POST['relacija-putovanja']) ? $_POST['relacija-putovanja'] : "";
$zadatak_putovanja = isset($_POST['zadatak-putovanja']) ? $_POST['zadatak-putovanja'] : "";
$prevozno_sredstvo = isset($_POST['prevozno-sredstvo']) ? $_POST['prevozno-sredstvo'] : "";
$dnevnica_iznosi = isset($_POST['dnevnica-iznosi']) ? $_POST['dnevnica-iznosi'] : "";
$datum_povratka = isset($_POST['datum-povratka']) ? $_POST['datum-povratka'] : "";
$putni_troskovi = isset($_POST['teret-putnih-troskova']) ? $_POST['teret-putnih-troskova'] : "";
$akontacija = isset($_POST['akontacija']) ? $_POST['akontacija'] : "";
?>

<!-- NAVBAR SECTION -->
<?php include_once '../../view/components/navbar.php';?>
		<!-- /NAVBAR SECTION -->

<section class="input-component">

    <form method="POST">

    <!-- NAZIV ORGANIZACIJE -->
    <label for="naziv-organizacije">Izaberi organizaciju</label>
    <select name="organizacija" id="organizacija">
    <option value=""></option>
      <option value="OS Svetozar Markovic Kraljevo">OS Svetozar Markovic Kraljevo</option>
      <option value='OS neko drugi'>OS neko drugi</option>
      <option value='OS ... neko treci'>OS ... neko treci</option>
    </select>
    <!-- /NAZIV ORGANIZACIJE -->

    <br>

    <!-- DELOVODNI BROJ -->
    <label for="delovodni-broj">Unesite delovodni broj:</label>
    <input type="number" name="delovodni-broj" id="delovodni-broj">
    <!-- /DELOVODNI BROJ -->

    <br>

    <!-- DATUM NALOGA -->
    <!-- <input type="date" name="datum-naloga" id="datum-naloga" value="<?php echo date('d-m-Y'); ?>"> -->
    <label for="delovodni-broj">Unesite datum zavodjenja:</label>
    <input type="text" name="datum-naloga" id="datum-naloga">
    <!-- /DATUM NALOGA -->

    <br>

    <!-- RASPOREDJEN NA POSLOVE RADNOG MESTA -->
    <label for="radno-mesto">Unesite radno mesto:</label>
    <input type="text" name="radno-mesto" id="radno-mesto">
    <!-- /RASPOREDJEN NA POSLOVE RADNOG MESTA -->

    <br>

    <!-- UPUCUJE SE NA SLUZBENI PUT DANA -->
    <label for="datum-putovanja">Datum sluzbenog puta:</label>
    <input type="text" name="datum-putovanja" id="datum-putovanja">
    <!-- /UPUCUJE SE NA SLUZBENI PUT DANA -->

    <br>

    <!-- MESTO ILI RELACIJA -->
    <label for="mesto-putovanja">Mesto sluzbenog puta:</label>
    <input type="text" name="mesto-putovanja" id="mesto-putovanja">
    <br>
    <label for="relacija-putovanja">Relacija sluzbenog puta:</label>
    <input type="text" name="relacija-putovanja" id="relacija-putovanja">
    <!-- /MESTO ILI RELACIJA -->

    <br>

    <!-- SA ZADATAKOM -->
    <label for="relacija-putovanja">Zadatak sluzbenog puta:</label>
    <input type="text" name="zadatak-putovanja" id="zadatak-putovanja">
    <!-- /SA ZADATAKOM -->

    <br>

    <!-- NA SLUZBENOM PUTU KORISTI PREVOZNO SREDSTVO -->
    <label for="prevozno-sredstvo">Prevozno sredstvo:</label>
    <input type="text" name="prevozno-sredstvo" id="prevozno-sredstvo">
    <!-- /NA SLUZBENOM PUTU KORISTI PREVOZNO SREDSTVO -->

    <br>

    <!-- DNEVNICA PRIPADA U IZNOSU OD -->
    <label for="dnevnica-iznosi">Dnevnica iznosi:</label>
    <input type="number" name="dnevnica-iznosi" id="dnevnica-iznosi">
    <!-- /DNEVNICA PRIPADA U IZNOSU OD -->

    <br>

    <!-- NA SLUZBENOM PUTU CE SE ZADRAZATI NAJDALJE DO -->
    <label for="datum-povratka">Datum povratka:</label>
    <input type="text" name="datum-povratka" id="datum-povratka">
    <!-- /NA SLUZBENOM PUTU CE SE ZADRAZATI NAJDALJE DO -->

    <br>

    <!-- PUTNI TROSKOVI PADAJU NA TERET -->
    <label for="teret-putnih-troskova">Putni troskovi padaju na teret:</label>
    <input type="text" name="teret-putnih-troskova" id="teret-putnih-troskova">
    <!-- /PUTNI TROSKOVI PADAJU NA TERET -->

    <br>

    <!-- ODOBRAVAM ISPLATU AKONRACIJE U IZNOSU OD DINARA -->
    <label for="akontacija">Odobrava se akontacija u iznosu od:</label>
    <input type="number" name="akontacija" id="akontacija">
    <!-- /ODOBRAVAM ISPLATU AKONRACIJE U IZNOSU OD DINARA -->

    <br>

    <!-- UNOS PODATAKA U NALOG -->
    <input type='submit' value='odaberi'>
    <!-- /UNOS PODATAKA U NALOG -->

    </form>

  <!-- DISAPLY COMPONENT -->
  <?php include_once 'display_component.php';?>
  <!-- /DISAPLY COMPONENT -->

</section>