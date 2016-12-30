<?php include ($_SERVER['DOCUMENT_ROOT']."/partial.php"); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Конференция C++ Russia, Илья Шишков - Пишем код большого проекта: быстро, надёжно, удобно</title>
    <?php partial("includes"); ?>
</head>
<body class="cpp-r talks">
<header class="cpp-r_header">
    <div class="cpp-r_wrap">
        <?php partial("templates/header"); ?>
</header>
<main class="cpp-r_main">
    <!-- -->
    <div class="cpp-b_page-top-description">
        <div class="cpp-r_wrap">
            <div class="cpp-b_sidetext cpp-b_responsive-row-cols">
                <div class="sidetext-left row-col"></div>
                <div class="sidetext-right row-col">
                    <h1 class="cpp-e_block-title mod-big">
                        Пишем код большого проекта: быстро, надёжно, удобно
                    </h1>
                    <div class="cpp-b_block-text"></div>
                </div>
            </div>
            <div class="cpp-b_sidetext cpp-b_responsive-row-cols">
                <div class="sidetext-left row-col">
                    <img src="<?php echo "/talks/".basename(__DIR__); ?>/photo.jpg" style="width: 15.938rem;" alt="">
                </div>
                <div class="sidetext-right row-col">
                    <div class="cpp-b_block-text">
                        <div class="cpp-e_speaker-name">
                            Илья Шишков
                        </div>
                        <p>
                            <!-- Немного о себе пишем здесь -->
                            <!-- /Немного о себе пишем здесь -->
                        </p>
                        <hr>
                        <!-- Полное описание доклада -->
                        <p>В докладе будут рассмотрены принципы и последовательность шагов, которые позволяют ускорить и обезопасить изменение кода большого проекта. Будут рассмотрены два примера: рефакторинг существующего кода и добавление новой функциональности.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php partial("partials/sponsors"); ?>
</main>
<?php partial("templates/footer"); ?>
</body>
</html>