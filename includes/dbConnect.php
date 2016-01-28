<?php
require('adodb/adodb.inc.php');
###########################################################
#Define Valiable for DB Connection
define("DB_HOST","127.0.0.1");
define("DB_USER","root");
define("DB_PASS","root");
define("DB","dwdm_db");

# Create MySQL DB Connecttion

$dsn = "mysqli://".DB_USER.":".DB_PASS."@".DB_HOST."/".DB;   
$db = NewADOConnection($dsn);
$db->SetFetchMode(ADODB_FETCH_ASSOC);

# Sst Charaterset to Encode DB
$db->Execute("SET NAMES UTF8");
$db->Execute("SET character_set_results=utf8");
$db->Execute("SET character_set_client=utf8");
$db->Execute("SET character_set_connection=utf8");

# Set Debug Mode for Develope / In case on Site  set to false
$db->debug = 0; # Change to false for Production

###########################################################
#Define Valiable for Oracle DB Connection
$tnsName = "DWCAT";
$userName = "mis";
$Password = "mis805";

$dbOra = NewADOConnection("oci8");
$dbOra ->Connect($tnsName, $userName, $Password);
$dbOra->SetFetchMode(ADODB_FETCH_ASSOC);
$dbOra -> debug=0;


?>