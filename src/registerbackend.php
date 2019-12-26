<?php require_once 'Functions/HTTPUtils.php';
session_start();
$data = array(
    'dateOfBirth' => $_POST['userDOB'],
    'firstName' => $_POST['firstName'],
    'lastName' => $_POST['lastName'],
    'phoneNumber' => $_POST['userPhone'],
    'userLevel'=> '1'

);
//var_dump($data);
//exit(1);

$response = HTTPRequester::HTTPPost('games3dcreations.ddns.net:8081' . '/api/v1/user', $data,$_POST['userName'],$_POST['password']);
$DATA = json_decode($response, true);

var_dump($DATA);


?>