<?php

/* @var $this yii\web\View */
/* @var $model app\models\LoginForm */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Вход';
?>

<main class="auth-main">
    <div class="auth-card">

        <div class="auth-heading">
            <span class="auth-eyebrow">ЗЕРНО &amp; ХМЕЛЬ</span>
            <h1>С возвращением!</h1>
            <p>Войдите в аккаунт, чтобы продолжить работу с сайтом.</p>
        </div>

        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'options' => ['class' => 'auth-form'],
            'fieldConfig' => [
                'template' => "{label}\n{input}\n{error}",
                'labelOptions' => ['class' => 'auth-label'],
                'inputOptions' => ['class' => 'auth-input'],
                'errorOptions' => ['class' => 'auth-error'],
            ],
        ]); ?>

        <?= $form->field($model, 'username')->textInput([
            'autofocus' => true,
            'placeholder' => 'Введите имя пользователя',
        ])->label('Имя пользователя') ?>

        <?= $form->field($model, 'password')->passwordInput([
            'placeholder' => 'Введите пароль',
        ])->label('Пароль') ?>

        <div class="auth-remember">
            <?= $form->field($model, 'rememberMe')->checkbox([
                'label' => 'Запомнить меня',
                'template' => "{input}\n{label}\n{error}",
            ]) ?>
        </div>

        <?= Html::submitButton('Войти в аккаунт', [
            'class' => 'auth-submit',
            'name' => 'login-button',
        ]) ?>

        <?php ActiveForm::end(); ?>

        <div class="auth-bottom">
            Нет аккаунта? <a href="<?= \yii\helpers\Url::to(['/site/signup']) ?>">Зарегистрироваться</a>
        </div>

    </div>
</main>