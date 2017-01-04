<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="prism.css">
<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:400,400i,700,700i|Lato:300,300i,400,400i,700,700i|Space+Mono:400,400i,700,700i" rel="stylesheet">
<script src="js/prism.js"></script>
</head>
<body class="ff-sans">

<div class="g  g--no-gutter  g--no-gutter--m  g--no-gutter--l">
    <div class="gi--1-1  gi--1-4--m">
        <aside class="sidebar h100-m p3 bg-brand-red">
            <h1 class="c-white">Fission.css</h1>
            <ul class="list">
                <li><a class="c-brand-blue" href="#color">Color</a></li>
                <li><a class="c-brand-blue" href="#typography">Typography</a></li>
                <li><a class="c-brand-blue" href="#spacing">Spacing</a></li>
                <li><a class="c-brand-blue" href="#backgrounds">Backgrounds</a></li>
            </ul>
        </aside>
    </div>
    <div class="gi--1-1  gi--3-4--m">
        <section class="bg-brand-grey p3">

            <?php include('parts/color.php'); ?>
            <?php include('parts/typography.php'); ?>

            <h1 class="fs3 mb2">Spacing</h1>
            <p>Spacing classes set classes for <strong>margin</strong> and <strong>padding</strong>. There are specific rules for top, right, bottom and left values exclusively and also for x-axis (left and right) and y-axis (top and bottom).</p>

            <?php include('parts/margin.php'); ?>
            <?php include('parts/padding.php'); ?>

            <h1 class="fs3 mb2">Background</h1>
            <p class="mb1">Background classes control the display properties of background images. This includes background-size background-repeat and background-position. </p>

            <?php include('parts/background-position.php'); ?>
            <?php include('parts/background-repeat.php'); ?>
            <?php include('parts/background-size.php'); ?>

        </section>
    </div>
</div>


</body>