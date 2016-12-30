<?php include ($_SERVER['DOCUMENT_ROOT']."/partial.php"); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Конференция C++ Russia, Ivan Cukic - Going functional</title>
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
                        Going functional
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
                            Ivan Cukic
                        </div>
                        <p>
                            <!-- Немного о себе пишем здесь -->
                            <!-- /Немного о себе пишем здесь -->
                        </p>
                        <hr>
                        <!-- Полное описание доклада -->
                        <p>Functional programming is often said to be necessary in multi-threaded
                           environments, but that is only one part of the story. Avoiding
                           mutation helps avoid explicit synchronization of concurrent processes,
                           but it can also be helpful in other circumstances.</p>

                        <p>In this talk, we are going to cover the basic ideas of functional
                           programming and functional software design. We will focus mainly on
                           how to design stateful software that never mutates any data, and how
                           to do it optimally.</p>
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