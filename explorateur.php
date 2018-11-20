<?php 
require_once('config.php');

error_reporting(E_ALL ^ E_NOTICE | E_WARNING);
ini_set('display_errors', 'ON'); 



$dossier = new RecursiveDirectoryIterator(BASE_DIR,FilesystemIterator::SKIP_DOTS);// Affiche seulement les dossiers dans bureau
$dossier->rewind();
    
while($dossier->valid()){ //si l'élément existe

   if(is_dir($dossier->key())){ // Si c'est un dossier, alors on l'affiche en lien
      echo '<li class="pt-2"><a class="dossier" href="#" data-name="' . $dossier->key() . '">'. $dossier->getFilename() . '</a></li>';
      // X.key() correspond au chemin de l'élément X.
   }
   $dossier->next();
}

?> 