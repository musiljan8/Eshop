<?php

require_once 'classes/Uzivatel.php';
require_once 'classes/Kategorie.php';
require_once 'classes/Polozka.php';
require_once 'classes/Kosik.php';

$uzivatel = new Uzivatel();
$uzivatel->nazev = "Pables";
$uzivatel->adresa = "Karany 474";
$uzivatel->jmeno = "Jan";
$uzivatel->prijmeni = "Musil";


$kategorie = new Kategorie();
$kategorie->nazev = "cistice oken";
$kategorie->druhy = "cistice";
$kategorie->cislo = 1;

$polozka = new Polozka();
$polozka->nazev = "okena";
$polozka->kod = 11003;
$polozka->cena =  99;
$polozka->pocetKusu = 48;

$kosik = new Kosik();
$kosik->uzivatel = "nazev";  //jak zadat podminku ze jenom jeden???
$kosik->polozka = "nazev";
$kosik->polozka = "pocetKusu";       




echo $polozka->nazev;
echo ('<br />');
echo $uzivatel->nazev;
echo ('<br />');

?>

