<?php 

require_once '../app/init.php';

/**
 * .htaccess reroutes everything here. sends the url as the var $_GET['url'] and boots up the app
 */

$app = new App();