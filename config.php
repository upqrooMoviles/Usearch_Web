<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
error_reporting(0);
// connect to db
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Not connected : ' . mysql_error());
}

if (! mysql_select_db('usearch') ) {
    die ('Can\'t use foo : ' . mysql_error());
}