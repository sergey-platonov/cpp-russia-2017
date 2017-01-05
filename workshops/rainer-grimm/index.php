<?php include ($_SERVER['DOCUMENT_ROOT']."/partial.php"); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Конференция C++ Russia, Rainer Grimm - Embedded Programming with modern C++</title>
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
                        Embedded Programming with modern C++
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
Rainer Grimm is a longtime software developer and instructor. He invests some of his spare time in writing articles about the programming languages C++, Python and Haskell for the Linux-Magazine. He works as a software architect and team lead for Metrax, building defibrillators for the private citizen and the clinical environment. So he brings together his training as a male nurse and as a mathematican. His old and new passion is the programming language C++. He published the two books «C++11 für Programmierer» and «C++ kurz & gut».
                        </p>
                        <hr>
                        <!-- Полное описание доклада -->
                        <p>
Embedded programming is one of the key domains of modern C++. Because C++ empowers you to talk directly to the hardware and offers you this kinds of abstractions you need build complex systems. With C++11 C++ gets a lot of mighty features for the embedded programming. C++ has features like the move semantic for cheap move operations, constexpr functions for calculations at compile time, or new containers like std::array, which combines the best from the C array and the std::vector.
<br>
I will show you in the workshop the benefits of modern C++ in the embedded programming. Therefore, I will concentrate on the requirements of embedded programming and give the answers in modern C++. The requirements are
<ul>
<li>Safety critical systems</li>
<li>Reduced resources</li>
<li>Long lifetime</li>
<li>Many cores</li>
</ul>
After the workshop you will understand the well-known sentence from Bjarne Stroustrup about c++11 in embedded programming: "... make C++ even better for embedded system programming..".
                        </p>
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
