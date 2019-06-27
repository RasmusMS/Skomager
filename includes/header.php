<?php
require_once 'settings.php';
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Rasmus Marnil Sørensen">
    <title>Skomageren</title>
    <link rel="stylesheet" href="vendors\Bootstrap\css\bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styling.css">
</head>
<body>
<header>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php if($_GET['page'] == 'register') { echo "active"; }?>">
                <a class="nav-link " href="index.php?page=register">Registrer</a>
            </li>
            <li class="nav-item <?php if($_GET['page'] == 'viewdata') { echo "active"; }?>">
                <a class="nav-link" href="index.php?page=viewdata">Se data</a>
            </li>
            <li class="nav-item <?php if($_GET['page'] == 'graph') { echo "active"; }?>">
                <a class="nav-link" href="index.php?page=graph">Se graf</a>
            </li>
        </ul>
    </div>
</nav>
</header>
<main class="mt-5">
    <div class="container">
