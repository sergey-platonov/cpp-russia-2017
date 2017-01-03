<?php include ("partial.php"); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Конференция C++ Russia, 24-25 февраля 2017</title>
    <?php partial("includes"); ?>
</head>
<body class="cpp-r main">
<header class="cpp-r_header">
    <?php partial("templates/header"); ?>
    <div class="cpp-r_wrap">
        <!-- -->
        <h1 class="cpp-e_page-title">
            Конференция C++ Russia,<br>
            24-25 февраля 2017
        </h1>
        <!-- -->
        <!-- -->
        <div class="cpp-b_number-facts cpp-b_only-desktop flex">
            <div class="cpp-b_responsive-row-cols">
                <!-- -->
                <div class="number-fact row-col">
                    <div class="number">
                        25
                    </div>
                    <div class="fact">
                        лучших спикеров<br>
                        из России и Европы
                    </div>
                </div>
                <!-- -->
                <!-- -->
                <div class="number-fact row-col">
                    <div class="number">
                        1250
                    </div>
                    <div class="fact">
                        минут информации<br>
                        для опытных<br>
                        разработчиков
                    </div>
                </div>
                <!-- -->
            </div>
        </div>
        <!-- -->
    </div>
</header>
<main class="cpp-r_main">
    <?php partial("pages/main"); ?>
</main>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtxwRGTL4-AKlGJYKDVxzr_MymCP9XpLQ"></script>
<?php partial("templates/footer"); ?>
</body>
</html>