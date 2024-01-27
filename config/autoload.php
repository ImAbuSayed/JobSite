<?php

//Start Session
session_start();

//config file
require_once 'config.php';

// Include Helpers
require_once '../helpers/system_helper.php';

/**
function autoload($class){
    $class = str_replace('\\', '/', $class);
    require_once 'lib/'.$class.'.php';
}

spl_autoload_register('autoload'); */