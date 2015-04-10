<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
error_reporting(0);
// connect to db
$link = mysql_connect('mysql4.000webhost.com', 'a4741074_root', 'Chay1318');
if (!$link) {
    die('Not connected : ' . mysql_error());
}

if (! mysql_select_db('a4741074_usearch') ) {
    die ('Can\'t use foo : ' . mysql_error());
}