<?php

use yii\helpers\Url;
use yii\helpers\Html;
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <title>Зерно &amp; Хмель</title>
    <link rel="stylesheet" href="<?= Url::to('@web/css/style.css') ?>" />
</head>

<body>
    <div class="screen" data-model-id="4:19268">
        <header class="recipes-header">
            <a class="recipes-brand" href="index" aria-label="Зерно и Хмель — главная">
                <?= Html::img('@web/images/logo.svg') ?>
                <span><strong>Зерно &amp; Хмель</strong><small>ДОМАШНЯЯ ФЕРМЕНТАЦИЯ</small></span>
            </a>

            <?php
            $currentPage = Yii::$app->controller->id;
            ?>

            <nav class="recipes-nav" aria-label="Главная навигация">
                <a href="<?= Url::to(['/site/index']) ?>" class="<?= $currentPage === 'site' && Yii::$app->controller->action->id === 'index' ? 'active' : '' ?>">Главная</a>

                <a href="<?= Url::to(['/site/recipes']) ?>" class="<?= Yii::$app->controller->action->id === 'recipes' ? 'active' : '' ?>">Рецепты</a>

                <a href="<?= Url::to(['/site/calculator']) ?>" class="<?= Yii::$app->controller->action->id === 'calculator' ? 'active' : '' ?>">Калькулятор</a>

                <a href="<?= Url::to(['/site/history']) ?>" class="<?= Yii::$app->controller->action->id === 'history' ? 'active' : '' ?>">Журнал варок</a>
            </nav>

            <nav class="" style="display: flex; gap: 15px;">
            <?php if (Yii::$app->user->isGuest) { ?>
                <a class="recipes-header-button" href="<?= Url::to(['/site/login']) ?>">Войти</a>

            <?php } else { ?>
                <a class="recipes-header-button" href="<?= Url::to(['/site/login']) ?>">(<?= Yii::$app->user->identity->name ?>) Аккаунт</a>

                <?=  '<li>'
                    . Html::beginForm(['/site/logout'], 'post', ['class' => ''])
                    . Html::submitButton(
                        'Выйти',
                        ['class' => 'recipes-header-button']
                    )
                    . Html::endForm()
                    . '</li>'
                ?>
              
            <?php } ?>
            </nav>
            <!-- <form action="/web/site/logout" method="POST"> -->
            <!-- Ваши поля формы -->
            <!-- <button class="recipes-header-button" type="submit">Logout</button> -->
            <!-- </form> -->



        </header>

        <?= $content ?>


        <footer class="recipes-footer">
            <div>
                <a class="recipes-footer-brand" href="index">Зерно &amp; Хмель</a>
                <p>Хороший вкус начинается с простых вещей. Рецепты, знания и ваши маленькие открытия.</p>
            </div>
            <div class="recipes-footer-links">
                <a href="index">Главная</a>
                <a href="recipes">Рецепты</a>
                <a href="kvass">Хлебный квас</a>
                <a href="calculator">Калькулятор</a>
                <a href="history">Журнал варок</a>
            </div>
            <small>© 2026 Зерно &amp; Хмель · Учебный проект. Пиво — только для лиц старше 18 лет.</small>
        </footer>
    </div>
</body>

</html>