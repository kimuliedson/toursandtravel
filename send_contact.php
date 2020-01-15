<?php

if(empty($_POST)) {
    echo json_encode(array('status' => 0, 'msg' => 'Please provide input')); exit;
}

$name = $_POST['name'];
$email = $_POST['email'];
$nationality = $_POST['nationality'];
$phone = $_POST['phone'];
$children = $_POST['children'];
$adult = $_POST['adult'];
$start = $_POST['start'];
$stop = $_POST['stop'];
$budget = $_POST['budget'];
$currency = $_POST['currency'];
$comments = $_POST['comments'];

mail('kirega@mesozi.com', 
"Contact from website", 
"Contact from website<br/>Name: $name , Email: $email , nationality: $nationality ,  phone: $phone , children: $children  , adult: $adult , start: $start , days: $stop , budget: $budget , currency: $currency , Comments: $comments");

echo json_encode(array('status' => 1, 'msg' => 'Thank you for your message'));
?>