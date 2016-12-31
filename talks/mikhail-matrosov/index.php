<?php include ($_SERVER['DOCUMENT_ROOT']."/partial.php"); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Конференция C++ Russia, Михаил Матросов - Повседневный С++: алгоритмы и утилитарные типы</title>
    <?php partial("includes"); ?>
</head>
<body class="cpp-r talks">
<header class="cpp-r_header">
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
                        Повседневный С++: алгоритмы и утилитарные типы
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
                            Михаил Матросов
                        </div>
                        <p>
                            <!-- Немного о себе пишем здесь -->
                            <!-- /Немного о себе пишем здесь -->
                        </p>
                        <hr>
                        <!-- Полное описание доклада -->
                        <p>Я рассмотрю ряд простых прикладных задач и покажу, как их можно эффективно и элегантно решить с помощью стандартных средств современного С++. Доклад включает работу с залом: участники будут предлагать свои улучшения для конкретных примеров кода, а также отвечать на поставленные вопросы (например, найти ошибку в приведённом примере). Самые активные участники получат призы. Доклад рассчитан на базовые знания языка.</p>
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