<?php

$appconf['title'] = ''; //website title
$appconf['database'] = '';
$appconf['dbuser'] = 'id71752_mrrobot';
$appconf['dbpassword'] = '';
$appconf['host'] = 'localhost';
//Config facebook app
$appconf["appID"]=""; //app ID
$appconf["appKey"]="" //app Token access
$appconf["appConnectDomaine"]="" //app Auth proceess



//Mysql config
$conx = mysqli_connect($appconf["host"],$appconf["dbuser"],$appconf["dbpassword"]$appconf["database"]);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }



?>
