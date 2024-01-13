<?php

require_once 'config.php';

function autoload($class){
    $class = str_replace('\\', '/', $class);
    require_once 'lib/'.$class.'.php';
}

spl_autoload_register('autoload');