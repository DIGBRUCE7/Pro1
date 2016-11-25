<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 25/11/2016
 * Time: 11:54
 */

define('DB_SERVER','us-cdbr-azure-southcentral-f.cloudapp.net');
define('DB_USERNAME','b113c9725aa456');
define('DB_PASSWORD','8ee13182');
define('DB_DATABASE','db77');

$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);