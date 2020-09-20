<?php
include ('templates/header.php');
include_once 'config/database.php';

$db = new Database();
$database = $db-> connect();


?>

<form method="POST" action="index.php">
    <p>News form</p>
    <label for="name">News name</label>
    <input id="name" type="text" name="repair_type"/>
    <br>
    <label>Bike model</label>
    <input class="form-control" type="text" name="bike_model" />
    <br>
    <label>First name</label>
    <input class="form-control"  type="text" name="firstname"/>
    <br>
    <label>Last name</label>
    <input class="form-control"  type="text" name="lastname"/>
    <br>
    <button class="btn btn-primary" type="submit">SUBMIT!</button>
</form>
