<?php
/**
 * @Author: satyr
 * @Date:   2015-02-21 19:29:01
 * @Last Modified by:   satyr
 * @Last Modified time: 2015-02-22 12:06:18
 */

require_once '../app/init.php';

/**
 * .htaccess reroutes everything here. sends the url as the var $_GET['url'] and boots up the app
 */

$app = new App();