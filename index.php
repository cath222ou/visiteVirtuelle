<?php
require __DIR__ . '/vendor/autoload.php';

use Carbon\Carbon;
use Carbon\CarbonInterval;

$saison;
$now = Carbon::now()->month;
$file = scandir('img/');
$fileSaison = array();

foreach ($file as $file) {
    if ($now >= 5 && $now <= 10) {
        if(strpos($file, 'ete') == true){
            array_push($fileSaison, $file);
        }

    } else {
        if(strpos($file, 'hiver') == true){
            array_push($fileSaison, $file);
        }
    }
}
sort($fileSaison);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="css/swiper.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">


    <title>Visite virtuelle</title>
</head>
<body>
<div class="swiper-container">
    <div class="swiper-wrapper">
        <?php
        foreach($fileSaison as $fileSaison){
            echo "<div class='swiper-slide' style='background-image:url(img/$fileSaison)'></div>";
        }
        ?>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination-white"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
</div>

</body>

<!--Script-->
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/moment-with-locales.js"></script>
<!--https://idangero.us/swiper/api/-->
<script src="js/swiper.js"></script>
<script src="js/imageTransition.js"></script>

</html>