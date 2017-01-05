<?php include ($_SERVER['DOCUMENT_ROOT']."/partial.php"); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Конференция C++ Russia, Ivan Cukic - Applied functional programming in C++</title>
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
                        Applied functional programming in C++
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
                        <p>Doctoral candidate (Ph.D.c.) at the Computer Science department of the Faculty of Mathematics, University of Belgrade with main research revolving around the programming language design. Have been a long time KDE contributor mainly working on the Plasma workspace, and lower-level frameworks for tracking and managing user actions. Maintainer of KActivities, Contour daemon and Lancelot.
                        </p>
                        <hr>
                        <!-- Полное описание доклада -->
                        <p><ul>
<li>What is functional programming and how far is STL from being
functional, what is the relation between functional and generic
programming</li>
<li>Functional objects in C++, callables and std::invoke</li>
<li>Lazy evaluation, lazy algorithms and ranges</li>
<li>Creating new language constructs on the library level</li>
<li>Generic programming and template constraints using void_t</li>
<li>Monads: optional<T>, expected<T, E>, future<T>, ...</li>
<li>Monads: coroutines in C++ as a special syntax for handling monads</li>
<li>Implementing programs without mutable state</li>
 </ul></p>
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
