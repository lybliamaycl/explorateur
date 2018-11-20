<?php

error_reporting(E_ALL ^ E_NOTICE | E_WARNING);
ini_set('display_errors', 'ON');

if(isset($_GET['dossier'])){
   $arbo = $_GET['dossier'];
   echo $arbo;
}

?>
        