<?php
/**
* Load Global variables
**/
require __DIR__.'/Core/_Globals.php';

 /**
 * Load PHP cmposer autoloader (symphony) | Load MVC framework applciation essentials |
 * normally these would be loaded by the autoloader instead of __autoload()
 **/
require __DIR__.'/vendor/autoload.php';

/**
 * Load core system files
 */
require_once __DIR__.'/Core/Autoloader.php';
$autoLoader = new Core\Autoloader;
// $autoLoader->load();

$app = new Core\System\App;
$app->run();
