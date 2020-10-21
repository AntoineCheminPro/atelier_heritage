<?php 
require "animal.php";
require "chien.php";
require "vache.php";

$chien =new Chien("medor");
// $chien->name = "medor";
$vache=new Vache("marguerite");
// $vache->name ="marguerite";

// class Chien3dot0 extends Chien {
//     public bool $antennes = bool;
// }

// $animal = new Animal();
// var_dump($animal);



var_dump($chien);
var_dump($vache);
