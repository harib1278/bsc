<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
//SPL autoload can rweplace this
require ('libs/Bootstrap.php');
require ('libs/Controller.php');
require ('libs/View.php');
require ('libs/Model.php');

// library
require ('libs/Database.php');
require ('libs/Session.php');


require ('config/paths.php');
require ('config/database.php');


$app = new Bootstrap();