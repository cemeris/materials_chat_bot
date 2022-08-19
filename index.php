<!DOCTYPE html>

<?php
$page = 'index';
include(__DIR__ . '/classes/ApiHelper.php');
$api = new ApiHelper();
?>

<link rel="stylesheet" href="style.css">

<form action="">
    <label for="question">question</label>
    <input type="text" name="question" id="question">
    <button type="submit">submit</button>
</form>

<div class="outupt">
    <?= $api->getAnswer(); ?>
</div>