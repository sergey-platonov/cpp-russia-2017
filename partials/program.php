<!-- Программа -->
<section class="cpp-b_section">
    <div class="cpp-r_wrap">
        <div class="cpp-b_sidetext cpp-b_responsive-row-cols">
            <a name="program" class="cpp-e_hash-link"></a>
            <div class="sidetext-left row-col">
            </div>
            <div class="sidetext-right row-col">
                <h2 class="cpp-e_block-title">
                    Программа
                </h2>
                <div class="cpp-b_block-text cpp-b_only-desktop">
                    <p>После регистрации и вводной лекции вся программа идёт на трёх треках параллельно. После конференции на нашем сайте можно будет посмотреть слайды и видео докладов.</p>
                </div>
            </div>
        </div>
    </div>
        <div class="cpp-b_program-day">
        <div class="cpp-r_wrap">
            <div class="date">
                23/02/17
            </div>
            <!-- Workshop prorgam table -->
            <table>
                <tbody>
                <tr>
                    <th></th>
                    <th><?php echo getWorkshopTitle("/workshops/ivan-cukic") ?></th>
                    <th><?php echo getWorkshopTitle("/workshops/rainer-grimm") ?></th>
                    <th><?php echo getWorkshopTitle("/workshops/pavel-filonov") ?></th>
                    <th><?php echo getWorkshopTitle("/workshops/jetbrains") ?></th>
                </tr>
                <tr class="gray">
                    <td>9:00 - 10:00</td>
                    <td colspan="4">Регистрация на мастер-классы</td>
                </tr>
                <tr>
                    <td>10:00 - 12:00</td>
                    <td>Applied functional programming in C++ I</td>
                    <td>Embedded Programming with modern C++ I</td>
                    <td>Continuous integration для C++ разработчика I</td>
                    <td>Продуктивная кроссплатформенная разработка на C++ с использованием CLion</td>
                </tr>
                <tr class="gray">
                    <td>12:00 - 12:45</td>
                    <td colspan="4">Кофе-брейк</td>
                </tr>
                <tr>
                    <td>12:45 - 14:45</td>
                    <td>Applied functional programming in C++ II</td>
                    <td>Embedded Programming with modern C++ II</td>
                    <td>Continuous integration для C++ разработчика II</td>
                    <td>CMake – билд-система, о которой должен знать каждый С++ разработчик</td>
                </tr>
                <tr class="gray">
                    <td>14:45 - 16:00</td>
                    <td colspan="4">Обед</td>
                </tr>
                <tr>
                    <td>16:00 - 18:00</td>
                    <td>Applied functional programming in C++ III</td>
                    <td>Embedded Programming with modern C++ III</td>
                    <td>Continuous integration для C++ разработчика III</td>
                    <td>Продуктивная разработка на C++ с использованием ReSharper C++</td>
                </tr>
                <tr class="gray">
                    <td>18:00 - 20:00</td>
                    <td colspan="4">Предрегистрация на конференцию</td>
                </tr>
                </tbody>
            </table>
            <!-- /Workshop prorgam table -->
        </div>
    </div>
    
	<?php renderMainProgram(); ?>
</section>
<!-- /Программа -->
