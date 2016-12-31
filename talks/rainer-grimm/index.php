<?php include ($_SERVER['DOCUMENT_ROOT']."/partial.php"); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Конференция C++ Russia, Rainer Grimm - Programming at compile time</title>
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
                        Programming at compile time
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
                            Rainer Grimm
                        </div>
                        <p>
                            <!-- Немного о себе пишем здесь -->
                            <!-- /Немного о себе пишем здесь -->
                        </p>
                        <hr>
                        <!-- Полное описание доклада -->
                        <p>What have classical template metaprograming, the new type-traits library, and the constexpr functions in common? All three will be executed at compile time. Therefore, they combine high performance with enriched functionality. High performance, because computations can be moved from runtime time to compile time. Enriched functionality, because computation at compile time can modify the resulting C++ source code. But how does the whole magic work? I will give you in my presentation a view under the hood. Therefore, you can better understand und use programming at compile time.</p>
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