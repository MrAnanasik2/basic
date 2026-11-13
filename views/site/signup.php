<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = 'Регистрация';

?>

<main class="signup-main">

    <div class="signup-heading">
        <p class="recipes-eyebrow">ЗЕРНО &amp; ХМЕЛЬ</p>
        <h1>Создать аккаунт</h1>
        <p>Зарегистрируйтесь, чтобы пользоваться возможностями сайта.</p>
    </div>

    <div class="signup-card">

        <?php $form = ActiveForm::begin([
            'options' => ['class' => 'signup-form'],
        ]); ?>

        <?= $form->field($model, 'name')->textInput([
            'placeholder' => 'Введите ваше имя',
            'autocomplete' => 'name',
        ])->label('Имя') ?>

        <?= $form->field($model, 'mail')->textInput([
            'placeholder' => 'example@mail.com',
            'type' => 'email',
            'autocomplete' => 'email',
        ])->label('Электронная почта') ?>

        <?= $form->field($model, 'password')->passwordInput([
            'placeholder' => 'Не менее 6 символов',
            'autocomplete' => 'new-password',
        ])->label('Пароль') ?>

        <?= $form->field($model, 'password_repeat')->passwordInput([
            'placeholder' => 'Повторите пароль',
            'autocomplete' => 'new-password',
        ])->label('Повторите пароль') ?>

        <?= Html::submitButton('Зарегистрироваться', [
            'class' => 'signup-button',
            'name' => 'signup-button',
        ]) ?>

        <?php ActiveForm::end(); ?>

        <div class="signup-login">
            Уже есть аккаунт?
            <?= Html::a('Войти', ['site/login']) ?>
        </div>

    </div>

</main>