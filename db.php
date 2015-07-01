<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'test123';
$db_name = 'test';

$con = mysql_connect($db_host, $db_user, $db_pass)or die('unable to connect mysql');
$db = mysql_select_db($db_name, $con)or die('unable to connect db');
//echo "connection successfully !!!";