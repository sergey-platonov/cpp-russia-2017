<!-- О конференции -->
<section class="cpp-b_section">
    <div class="cpp-r_wrap">
        <div class="cpp-b_sidetext cpp-b_responsive-row-cols">
            <a name="about" class="cpp-e_hash-link"></a>
            <div class="sidetext-left row-col">
                <img src="/app/build/template/matreshka-balalaika.svg" alt="">
            </div>
            <div class="sidetext-right row-col">
                <h2 class="cpp-e_block-title">
                    О конференции
                </h2>
                <div class="cpp-b_block-text">
                    <p>Конференция «C++ Russia» с блинами и матрёшками! Как всегда, лучшие докладчики<br>
                       со всей страны на два дня. Конференция ориентирована на опытных разработчиков, никаких вводных лекций!</p>
                    <p>Место проведения: гостиница Бородино (Москва, ул. Русаковская, дом 13, строение 5).<br>
                       В течении года сообщество проводит встречи в разных городах России: Москве, Санкт-Петербурге, Новосибирске, Екатеринбурге, Нижнем Новгороде, Саратове.<br>
                       На встречах выступают докладчики из разных городов и стран.</p>
                </div>
                <div class="cpp-b_bordered-text">
                    Открывать конференцию будет Neil MacIntsoh: principal software engineer<br>
                    в Microsoft, мейнтенер реализации Guideline Support Library от Microsoft.
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /О конференции -->
<!-- Доклады -->
<section class="cpp-b_section gray-section talks-section">
    <div class="cpp-r_wrap">
        <div class="cpp-b_talks cpp-b_responsive-row-cols">
            <!-- -->
            <div class="cpp-b_talks_description row-col">
                <a name="talks" class="cpp-e_hash-link"></a>
                <h2 class="cpp-e_block-title">
                    Доклады
                </h2>
                <div class="cpp-b_block-text">
                    <p><strong>Подать заявку на доклад можно<br>до 15 января 2017 года.</strong></p>
                    <p>Как обычно, продолжительность доклада не должна превышать 50 минут (с учетом вопросов). Мы рады докладам о C++(11/14/17), STL, Boost, Qt, любых других библиотеках, тестировании и сборке крупных проектов на С++, асинхронности и конкурентности, etc.</p>
                </div>
                <a class="bubble-link" href="mailto:talks@cpp-russia.ru">Хочу стать<br>спикером!</a>
            </div>
            <!-- -->
            <!-- -->
            <?php
                $i = 0;
                $chosen = array();
                
                foreach($arrSpeakers as $speaker) {
                    $rnd = rand(0, count($arrSpeakers) - 1);
                    if ($chosen[$rnd])
						continue;
					
					$chosen[$rnd] = true;
                    $speaker = $arrSpeakers[$rnd];
                    if (renderTalkTeaser($speaker)) {
						if (++$i >= 5) 
							break;
					}
                }
            ?>
            <!-- -->
        </div>
        <div class="cpp-b_content-centered">
            <a class="cpp-e_green-button" href="/talks">Все доклады</a>
        </div>
    </div>
</section>
<!-- /Доклады -->
<?php partial("partials/program"); ?>
<?php partial("partials/buytickets"); ?>
<?php partial("partials/sponsors"); ?>
<!-- Контакты -->
<section class="cpp-b_section section-contacts">
    <div class="cpp-r_wrap">
        <div class="cpp-b_responsive-row-cols">
            <div class="row-col">
                <a name="contacts" class="cpp-e_hash-link"></a>
                <h2 class="cpp-e_block-title">
                    Контакты
                </h2>
                <div class="cpp-b_block-text">
                    <p style="margin-bottom: 2rem;">Место проведения: гостиница «Бородино», Москва, ул. Русаковская, дом 13, стр. 5</p>
                    <p>Если у Вас есть вопросы,<br>их можно задать по телефону или почте </p>
                </div>
                <div class="cpp-b_contacts">
                    <div class="cpp-e_contact phone">
                        +7 (905) 292-77-13
                    </div>
                    <div class="cpp-e_contact email">
                        <a href="mailto:conf@cpp-russia.ru">conf@cpp-russia.ru</a>
                    </div>
                </div>
            </div>
            <div class="row-col">
                <div class="cpp-b_map">
                    <div id="google_map">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Контакты -->
