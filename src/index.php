<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:400,400i,700,700i|Lato:300,300i,400,400i,700,700i|Space+Mono:400,400i,700,700i" rel="stylesheet">
</head>
<body class="ff-sans">

<!--
Margin Section
-->

<div class="wrapper">

    <h1 class="fs3 mb1">Spacing</h1>
    <p>Spacing classes set classes for <strong>margin</strong> and <strong>padding</strong>. There are specific rules for top, right, bottom and left values exclusively and also for x-axis (left and right) and y-axis (top and bottom).</p>

    <?php include('parts/margin.php'); ?>
    <?php include('parts/padding.php'); ?>

    <h1 class="fs3 mb1">Background</h1>
    <p class="mb1">Background classes control the display properties of background images. This includes background-size background-repeat and background-position. </p>

    <?php include('parts/background-position.php'); ?>
    <?php include('parts/background-repeat.php'); ?>
    <?php include('parts/background-size.php'); ?>
</div>

</body>