<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 18/09/2018
 * Time: 15:29
 */

function load($nomClasse) {
    $paths=array(
        '',
        'class/',
         '../',
        '../Controller/',
        '../Model/',
        'Model/',
        'Controller/',
    );
    foreach ($paths as $path ) {
        $chemin = $path.$nomClasse.'.php';
        if (file_exists($chemin)){
            require $chemin;
        }
    }
}

spl_autoload_register('load');