<?php

use yii\helpers\Html;
?>

<div class="view-7">
    <div class="view-8">
        <div class="view-9">
            <p class="text-wrapper-6">ИЗ ЗЕРНА. ИЗ ХЛЕБА. СВОИМИ РУКАМИ.</p>
            <div class="text-wrapper-7">
                Вкус, который<br />вы создаёте<br />сами.
            </div>
            <p class="p">
                Домашнее пиво и живой квас — от первого рецепта до своей удачной
                варки. Понятно, точно и с удовольствием.
            </p>
            <div class="view-10">
                <div class="view-6">
                    <a class="text-wrapper-5" href="recipes">Найти свой рецепт</a>

                </div>
                <p class="text-wrapper-8">
                    12 рецептов · Точные пропорции · Личный журнал
                </p>
            </div>
        </div>
        <div class="view-11">
            <?= Html::img('@web/images/pivo-kvass.png', ["class" => "image"]) ?>

            <div class="view-12">
                <p class="text-wrapper-6">РЕЦЕПТ НЕДЕЛИ / № 01</p>
                <div class="text-wrapper-9">Хлебный квас</div>
                <p class="text-wrapper-8">
                    Ржаной хлеб · 3 литра · 2–3 дня&nbsp;&nbsp;↗
                </p>
            </div>
        </div>
    </div>
    <div class="view-13">
        <div class="div">
            <?= Html::img('@web/images/rostok.svg') ?>
            <div class="text-wrapper-10">Натуральные ингредиенты</div>
        </div>
        <div class="div">
            <?= Html::img('@web/images/rostok.svg') ?>
            <div class="text-wrapper-10">Проверенные пропорции</div>
        </div>
        <div class="div">
            <?= Html::img('@web/images/rostok.svg') ?>
            <div class="text-wrapper-10">Ремесло без сложностей</div>
        </div>
    </div>
</div>
<div class="view-14">
    <div class="view-15">
        <p class="text-wrapper-6">01 / ВЫБЕРИТЕ СВОЙ ВКУС</p>
        <div class="view-16">
            <div class="view-17">
                <?= Html::img('@web/images/logo.svg') ?>
                <div class="view-18">
                    <div class="text-wrapper-11">Живой квас</div>
                    <p class="text-wrapper-12">
                        Хлебный, яблочный, солодовый. Знакомый вкус с вашим
                        характером.
                    </p>
                    <div class="text-wrapper-13">6 рецептов&nbsp;&nbsp;→</div>
                </div>
            </div>
            <div class="view-19">
                <?= Html::img('@web/images/beer.svg') ?>
                <div class="view-18">
                    <div class="text-wrapper-11">Домашнее пиво</div>
                    <p class="text-wrapper-12">
                        От лёгкого пшеничного до насыщенного эля. Ремесло в деталях.
                    </p>
                    <div class="text-wrapper-13">6 рецептов · 18+&nbsp;&nbsp;→</div>
                </div>
            </div>
        </div>
    </div>
    <div class="view-20">
        <div class="view-21">
            <div class="view-18">
                <p class="text-wrapper-6">02 / ПРОВЕРЕНО НА ДОМАШНЕЙ КУХНЕ</p>
                <div class="text-wrapper-14">С этого стоит начать</div>
            </div>
            <div class="view-22">
                <div class="text-wrapper-15">Все рецепты</div>
                <?= Html::img('@web/images/arrow-right-green.svg') ?>
            </div>
        </div>
        <div class="view-23">

            <?php foreach ($recepts as $recept) { ?>
                <div class="view-24">
                    <?= Html::img('@web/images/kvass.png') ?>
                    <div class="view-25">
                        <div class="view-26">
                            <div class="div-wrapper">
                                <div class="text-wrapper-16">Квас</div>
                            </div>
                            <?= Html::img('@web/images/like.svg') ?>
                        </div>
                        <div class="text-wrapper-9"><?= $recept->name ?></div>
                        <p class="text-wrapper-17">
                        <?= $recept->description ?>
                        </p>
                        <div class="view-27"></div>
                        <div class="view-28">
                            <div class="text-wrapper-18">
                            <?= $recept->volume?>&nbsp;дня&nbsp;&nbsp;·&nbsp;&nbsp;<?= $recept->readiness ?>&nbsp;л
                            </div>
                            <div class="text-wrapper-19">↗</div>
                        </div>
                        <div class="text-wrapper-20"><?= $recept->levl ?></div>
                    </div>
                </div>

            <?php } ?>
            <!-- <div class="view-24">
                <?= Html::img('@web/images/kvass.png') ?>
                <div class="view-25">
                    <div class="view-26">
                        <div class="div-wrapper">
                            <div class="text-wrapper-16">Квас</div>
                        </div>
                        <?= Html::img('@web/images/like.svg') ?>
                    </div>
                    <div class="text-wrapper-9">Хлебный квас</div>
                    <p class="text-wrapper-17">
                        Ржаной хлеб, мягкая кислинка и аромат тёплой корочки.
                    </p>
                    <div class="view-27"></div>
                    <div class="view-28">
                        <div class="text-wrapper-18">
                            2–3 дня&nbsp;&nbsp;·&nbsp;&nbsp;3 л
                        </div>
                        <div class="text-wrapper-19">↗</div>
                    </div>
                    <div class="text-wrapper-20">Для начинающих</div>
                </div>
            </div>
            <div class="view-24">
            <?= Html::img('@web/images/pivo.png') ?>
                <div class="view-25">
                    <div class="view-26">
                        <div class="div-wrapper">
                            <div class="text-wrapper-16">Пиво · 18+</div>
                        </div>
                        <?= Html::img('@web/images/like.svg') ?>
                    </div>
                    <div class="text-wrapper-9">Светлый эль</div>
                    <p class="text-wrapper-17">
                        Солодовая основа и деликатная хмелевая горчинка.
                    </p>
                    <div class="view-27"></div>
                    <div class="view-28">
                        <div class="text-wrapper-18">
                            21 день&nbsp;&nbsp;·&nbsp;&nbsp;10 л
                        </div>
                        <div class="text-wrapper-19">↗</div>
                    </div>
                    <div class="text-wrapper-20">Средний уровень</div>
                </div>
            </div>
            <div class="view-24">
            <?= Html::img('@web/images/sidor.png') ?>
                <div class="view-25">
                    <div class="view-26">
                        <div class="div-wrapper">
                            <div class="text-wrapper-16">Квас</div>
                        </div>
                        <?= Html::img('@web/images/like.svg') ?>
                    </div>
                    <div class="text-wrapper-9">Яблочный квас</div>
                    <p class="text-wrapper-17">
                        Сочные яблоки и лёгкие освежающие пузырьки.
                    </p>
                    <div class="view-27"></div>
                    <div class="view-28">
                        <div class="text-wrapper-18">
                            3 дня&nbsp;&nbsp;·&nbsp;&nbsp;3 л
                        </div>
                        <div class="text-wrapper-19">↗</div>
                    </div>
                    <div class="text-wrapper-20">Для начинающих</div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<div class="view-7">
    <div class="view-29">
        <div class="view-10">
            <p class="text-wrapper-6">03 / ОТ ИДЕИ К ПЕРВОМУ ГЛОТКУ</p>
            <p class="text-wrapper-14">Не сложнее, чем испечь хлеб</p>
            <p class="text-wrapper-21">
                Немного внимания, чистая посуда и время. Остальное мы разложили по
                шагам.
            </p>
        </div>
        <div class="view-30">
            <div class="view-31">
                <div class="text-wrapper-22">01</div>
                <div class="view-27"></div>
                <div class="text-wrapper-23">Выберите рецепт</div>
                <p class="text-wrapper-17">
                    Начните с кваса: для первой партии хватит обычной трёхлитровой
                    банки.
                </p>
            </div>
            <div class="view-31">
                <div class="text-wrapper-22">02</div>
                <div class="view-27"></div>
                <div class="text-wrapper-23">Пересчитайте объём</div>
                <p class="text-wrapper-17">
                    Калькулятор подстроит ингредиенты под вашу ёмкость — без устного
                    счёта.
                </p>
            </div>
            <div class="view-31">
                <div class="text-wrapper-22">03</div>
                <div class="view-27"></div>
                <div class="text-wrapper-23">Наблюдайте и записывайте</div>
                <p class="text-wrapper-17">
                    Следуйте этапам и отмечайте вкус, температуру и результат в
                    журнале.
                </p>
            </div>
        </div>
    </div>
    <div class="view-32">
        <div class="image-wrapper">
            <?= Html::img('@web/images/items.png') ?>
        </div>
        <div class="div-2">
            <p class="text-wrapper-6">04 / МЕНЬШЕ ПОКУПОК, БОЛЬШЕ ПРАКТИКИ</p>
            <p class="text-wrapper-24">Всё нужное уже есть на вашей кухне</p>
            <p class="text-wrapper-21">
                Для хлебного кваса не нужна мини-пивоварня. Начните с простого
                набора.
            </p>
            <div class="view-33">
                <?= Html::img('@web/images/check.svg') ?>
                <p class="text-wrapper-25">Стеклянная ёмкость от 4 л</p>
            </div>
            <div class="view-33">
                <?= Html::img('@web/images/check.svg') ?>
                <div class="text-wrapper-25">Кухонные весы и термометр</div>
            </div>
            <div class="view-33">
                <?= Html::img('@web/images/check.svg') ?>
                <p class="text-wrapper-25">Марля, сито и чистые ПЭТ-бутылки</p>
            </div>
            <p class="text-wrapper-26">
                Для пива понадобится отдельное оборудование — список есть в каждом
                рецепте.
            </p>
        </div>
    </div>
</div>
<div class="view-34">
    <div class="view-35">
        <div class="view-36">
            <p class="text-wrapper-6">05 / ТОЧНОСТЬ БЕЗ ЛИШНИХ УСИЛИЙ</p>
            <div class="text-wrapper-14">
                Ваша ёмкость.<br />Наши пропорции.
            </div>
            <p class="text-wrapper-27">
                Рецепт на 3 литра, а банка на 6? Пересчитайте весь список за один
                шаг. Вкус останется сбалансированным.
            </p>
            <div class="view-6">
                <div class="text-wrapper-5">Открыть калькулятор</div>
                <?= Html::img('@web/images/arrow-right-white.svg') ?>
            </div>
        </div>
        <div class="view-37">
            <div class="view-28">
                <div class="text-wrapper-3">Хлебный квас</div>
                <div class="view-38">
                    <div class="text-wrapper-28">× 2</div>
                </div>
            </div>
            <div class="view-26">
                <div class="view-39">
                    <div class="text-wrapper-29">В РЕЦЕПТЕ</div>
                    <div class="text-wrapper-30">3 л</div>
                </div>
                <div class="text-wrapper-31">→</div>
                <div class="view-39">
                    <div class="text-wrapper-29">ВАШ ОБЪЁМ</div>
                    <div class="text-wrapper-32">6 л</div>
                </div>
            </div>
            <div class="view-40">
                <div class="text-wrapper-33">Ржаной хлеб</div>
                <div class="text-wrapper-34">300 → 600 г</div>
            </div>
            <div class="view-40">
                <div class="text-wrapper-33">Сахар</div>
                <div class="text-wrapper-34">150 → 300 г</div>
            </div>
            <div class="view-40">
                <div class="text-wrapper-33">Сухие дрожжи</div>
                <div class="text-wrapper-34">3 → 6 г</div>
            </div>
            <p class="text-wrapper-35">
                Вода и изюм тоже пересчитаются. Полный список — в калькуляторе.
            </p>
        </div>
    </div>
    <div class="view-35">
        <div class="view-36">
            <p class="text-wrapper-6">06 / КАЖДАЯ ВАРКА — ВАШ ОПЫТ</p>
            <div class="text-wrapper-14">Запоминайте не только вкус</div>
            <p class="text-wrapper-27">
                Дата, объём, температура и маленькие наблюдения. Сохраняйте
                удачные решения, чтобы повторить результат.
            </p>
            <div class="view-22">
                <div class="text-wrapper-15">Перейти в журнал</div>
                <?= Html::img('@web/images/arrow-right-green.svg') ?>
            </div>
        </div>
        <div class="view-41">
            <p class="text-wrapper-36">24 ОКТЯБРЯ 2026 · ВАРКА № 003</p>
            <div class="text-wrapper-37">Хлебный квас</div>
            <div class="view-42">
                <div class="div-wrapper">
                    <div class="text-wrapper-16">Готово</div>
                </div>
                <p class="text-wrapper-38">6 л · 23 °C</p>
            </div>
            <p class="text-wrapper-39">
                «Ровный хлебный аромат, лёгкая кислинка. Сухари поджарил чуть
                сильнее — цвет получился насыщеннее».
            </p>
            <div class="text-wrapper-40">★★★★★&nbsp;&nbsp;Удачная партия</div>
        </div>
    </div>
</div>
<div class="view-43">
    <div class="view-10">
        <div class="text-wrapper-6">07 / МАСТЕРСКАЯ ЗНАНИЙ</div>
        <p class="text-wrapper-14">Понимать процесс — чувствовать вкус</p>
        <p class="text-wrapper-21">
            Короткие материалы о том, что действительно влияет на результат.
        </p>
    </div>
    <div class="view-44">
        <div class="view-45">
            <?= Html::img('@web/images/SUHARIKI.png') ?>
            <div class="text-wrapper-41">ИНГРЕДИЕНТЫ · 5 МИН</div>
            <p class="text-wrapper-9">Хлеб — это характер кваса</p>
            <p class="text-wrapper-17">
                Как выбрать ржаной хлеб и не пережечь сухари.
            </p>
            <div class="text-wrapper-42">Читать материал&nbsp;&nbsp;↗</div>
        </div>
        <div class="view-45">
            <?= Html::img('@web/images/Zakvaska.svg') ?>
            <div class="text-wrapper-41">ОСНОВЫ · 4 МИН</div>
            <div class="text-wrapper-9">Чистота без компромиссов</div>
            <p class="text-wrapper-17">
                Подготовка банок, инструментов и бутылок перед стартом.
            </p>
            <div class="text-wrapper-42">Читать материал&nbsp;&nbsp;↗</div>
        </div>
        <div class="view-45">
            <?= Html::img('@web/images/chmel.png') ?>
            <div class="text-wrapper-41">ПИВОВАРЕНИЕ · 6 МИН</div>
            <div class="text-wrapper-9">Зачем пиву нужен хмель</div>
            <p class="text-wrapper-17">
                Горечь, аромат и баланс в одной маленькой шишке.
            </p>
            <div class="text-wrapper-42">Читать материал&nbsp;&nbsp;↗</div>
        </div>
    </div>
</div>