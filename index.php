<?php
session_start(); 

error_reporting(0);

define('DOCROOT', realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR);

define('EXT', '.php');

require DOCROOT.'applications/bootstrap.php';