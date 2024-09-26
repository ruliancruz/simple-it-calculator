<?php
require_once 'client.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $salary = $_POST['salary'];

  $client = new Client($name, $email, $phone, $salary);

  echo "<h1>Client Information</h1>";
  echo $client->displayInfo();
}
?>
