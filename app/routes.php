<?php
/**
 * @Author: satyr
 * @Date:   2015-02-21 21:12:06
 * @Last Modified by:   satyr
 * @Last Modified time: 2015-02-22 12:11:44
 */

$cont['router']->get('/', [
    'as' => 'index', 'uses' => 'pages@index'
]);