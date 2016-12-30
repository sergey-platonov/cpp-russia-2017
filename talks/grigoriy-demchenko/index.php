<?php include ($_SERVER['DOCUMENT_ROOT']."/partial.php"); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Конференция C++ Russia, Григорий Демченко - Универсальный адаптер</title>
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
                        Универсальный адаптер
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
                            Григорий Демченко
                        </div>
                        <p>
                            <!-- Немного о себе пишем здесь -->
                            <!-- /Немного о себе пишем здесь -->
                        </p>
                        <hr>
                        <!-- Полное описание доклада -->
                        <p>Доклад вводит в рассмотрение универсальный адаптер, позволяющий обернуть любой класс с целью добавления новых свойств, отсутствующих в оригинальном классе. Получаемые классы могут иметь в точности такой же интерфейс, как и первоначальные, что позволяет прозрачно заменять их и оборачивать любое количество раз. Это позволяет добавлять необходимые свойства объектам, не переписывая его с нуля. Предложенная обобщенная концепция будет последовательно введена и проиллюстрирована простыми, но интересными примерами.</p>
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