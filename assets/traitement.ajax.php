<?php
require_once('../config.php');
error_reporting(E_ALL ^ E_NOTICE | E_WARNING);
ini_set('display_errors', 'ON');

if(isset($_GET['dossier'])){
   $retour = '';

   $chemin = $_GET['dossier'];

   $nouveau_dossier = new RecursiveDirectoryIterator($chemin);
   $nouveau_dossier->rewind();

   while($nouveau_dossier->valid()){
      if(is_dir($nouveau_dossier->key())){
         if($nouveau_dossier->getFilename() != "." &&  $nouveau_dossier->key() != BASE_DIR && $nouveau_dossier->key() != BASE_DIR."/." && $nouveau_dossier->key() != BASE_DIR."/.."){
            if($nouveau_dossier->getFilename() == '..'){
               $path = str_replace('\\', '/', $nouveau_dossier->key());
               $pathArray = explode('/', $path);
               array_pop($pathArray);
               array_splice($pathArray, -1);
               $parentPath = implode ('/', $pathArray);

               $retour .= '<p class="col-xs-6 col-sm-6 col-md-2 col-lg-2"><a class="dossier" href="'.$parentPath.'" data-name="' . $parentPath . '">Retour</a></p>';
            }
            else{
               if($nouveau_dossier->getFilename() != '.'){
                  $retour .= '<p class="col-xs-6 col-sm-6 col-md-2 col-lg-2"><a class="dossier" href="#" data-name="' . $nouveau_dossier->key() . '"> <img src="assets/images/folder.png" alt="dossier" height="50"></a>'. $nouveau_dossier->getFilename() . '</p>';
               }
            }
         }
      }
      else{
         $retour .= '<p class="col-xs-6 col-sm-6 col-md-2 col-lg-2"><img src="assets/images/file.png" alt="fichier" height="50">' . $nouveau_dossier->getFilename() . '</p>';
      }
      $nouveau_dossier->next();
   }

   echo $retour;
}

?>
        