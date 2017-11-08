<?php

define('PROJECT_BASE_DIR', realpath('../'));
define('SRC_ROOT_DIR', realpath(PROJECT_BASE_DIR . DIRECTORY_SEPARATOR . '../../'));
define('SMARTY_ROOT_DIR', realpath(SRC_ROOT_DIR . DIRECTORY_SEPARATOR . '../smarty'));
set_include_path(get_include_path() . PATH_SEPARATOR . PROJECT_BASE_DIR . PATH_SEPARATOR . SRC_ROOT_DIR);

use Dbb\Facebook\Login;

try {
    require '../../../vendor/autoload.php';

    $login = new Login();
} catch (\Exception $e) {
    // For debugging
    ini_set('display_errors', 1);
    throw $e;
}
