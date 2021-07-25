<?php
$message ="ussd";
//phone number
$MSISDN = $_GET['MSISDN'];
$SessionId = $_GET['SessionId'];
$Input = $_GET['Input'];
$NewRequest = $_GET['NewRequest'];
$key = $_GET['key'];
if($key=='1'){
    $menu=''
}
elseif($key=='2')
{
    echo ''.$message.'-'.$key.'';
}
?>