<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Конференция C++ Russia, 24-25 февраля 2017</title>
    <?php partial(("includes"), $GLOBALS["project_root"]); ?>
</head>
<body class="cpp-r talks">
<header class="cpp-r_header">
    <?php partial(("templates/header"), $GLOBALS["project_root"]); ?>
</header>
<main class="cpp-r_main">
    <!-- -->
    <div class="cpp-b_page-top-description">
        <div class="cpp-r_wrap">
            <div class="cpp-b_sidetext cpp-b_responsive-row-cols">
                <div class="sidetext-left row-col">
                    <img class="cpp-b_only-desktop" src="/app/build/template/elem-speech.png" style="width: 10.75rem; height: 9.438rem;margin-left: 6.4rem;margin-top: 9.6rem;" alt="">
                </div>
                <div class="sidetext-right row-col">
                    <h1 class="cpp-e_block-title mod-big">
                        Доклады
                    </h1>
                    <div class="cpp-b_block-text">
                        <p>Лучшие докладчики со всей страны за два дня. Если вам тоже есть, о чём рассказать отправляйте заявку. Как обычно, продолжительность доклада не должна превышать 50 минут (с учетом вопросов).</p>
                        <p>Мы рады докладам о C++(11/14/17), STL, Boost, Qt, любых других библиотеках, тестировании и сборке крупных проектов на С++, асинхронности и конкурентности, etc.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require __DIR__ . '/../pages/talks.php'; ?>
    <?php partial(("partials/sponsors"), $GLOBALS["project_root"]); ?>
</main>
<?php partial(("templates/footer"), $GLOBALS["project_root"]); ?>
</body>
</html>