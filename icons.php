<?php 
error_reporting(E_ALL ^ E_NOTICE | E_WARNING);
ini_set('display_errors', 'ON'); 

$base = __DIR__ . '/bureau';

$dossier = new RecursiveDirectoryIterator($base,FilesystemIterator::SKIP_DOTS);
$dossier->rewind();

while($dossier->valid()){ 

    if(is_dir($dossier->key())){ 
       echo '<li class="pt-1"><span class="flaticon-010-folder-4 pt-2"></span></li>';

    }
    $dossier->next();
 }
 
 ?> 