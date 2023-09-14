<?php
if (file_exists('adodb/adodb.inc.php')) {
    include('adodb/adodb.inc.php');
} elseif (file_exists('../adodb/adodb.inc.php')) {
    include('../adodb/adodb.inc.php');
} elseif (file_exists('../../adodb/adodb.inc.php')) {
    include('../../adodb/adodb.inc.php');
} elseif (file_exists('../../../adodb/adodb.inc.php')) {
    include('../../../adodb/adodb.inc.php');
} elseif (file_exists('../../../../adodb/adodb.inc.php')) {
    include('../../../../adodb/adodb.inc.php');
} elseif (file_exists('../../../../../adodb/adodb.inc.php')) {
    include('../../../../../adodb/adodb.inc.php');
} elseif (file_exists('../../../../../../adodb/adodb.inc.php')) {
    include('../../../../../../adodb/adodb.inc.php');
}

date_default_timezone_set("America/Bogota");

$server = "DESKTOP-PE7VF6H\\SQLEXPRESS";
$database = "Curb";
$userid = "sa";
$password = "1043660098";

$databaseGeneralAMAS = $database.'.dbo.';
$conSCWEB = ADONewConnection('mssqlnative');

$act = $conSCWEB->Connect($server, $userid, $password, $database);

if ($act === false) {
    die(print_r(sqlsrv_errors(), true));
}

$conSCWEB->SetFetchMode(ADODB_FETCH_ASSOC);

?>
