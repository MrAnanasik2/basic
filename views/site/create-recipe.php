<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Добавить рецепт';

?>

<main class="admin-main">

    <div class="admin-heading">
        <p class="recipes-eyebrow">УПРАВЛЕНИЕ РЕЦЕПТАМИ</p>
        <h1>Добавить рецепт</h1>
        <p>Заполните информацию о новом рецепте.</p>
    </div>

    <div class="admin-form-card">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name')->textInput([
            'placeholder' => 'Например, Ягодный квас'
        ])->label('Название рецепта') ?>

        <?= $form->field($model, 'description')->textarea([
            'rows' => 4,
            'placeholder' => 'Краткое описание рецепта'
        ])->label('Описание') ?>

        <?= $form->field($model, 'class')->dropDownList([
            'Пиво' => 'Пиво',
            'Квас' => 'Квас',            
        ], [
            'prompt' => 'Выберите класс напитка'
        ])->label('Клас напитка') ?>

        <?= $form->field($model, 'levl')->dropDownList([
            'Для начинающих' => 'Для начинающих',
            'Средний уровень' => 'Средний уровень',
            'Для опытных' => 'Для опытных',
        ], [
            'prompt' => 'Выберите сложность'
        ])->label('Сложность') ?>

        <?= $form->field($model, 'volume')->textInput([
            'type' => 'number',
            'min' => 1,
            'placeholder' => '3'
        ])->label('Базовый объём (л)') ?>

        <?= $form->field($model, 'readiness')->textInput([
            'type' => 'number',
            'min' => 1,
            'placeholder' => '3'
        ])->label('Время приготовления (дни)') ?>

        <?= $form->field($model, 'active_work')->textInput([
            'type' => 'number',
            'min' => 0,
            'placeholder' => '25'
        ])->label('Активная работа (минуты)') ?>

        <?= $form->field($model, 'temperature')->textInput([
            'type' => 'number',
            'placeholder' => '23'
        ])->label('Температура (°C)') ?>

        <?= $form->field($model, 'photo')->textInput([
            'placeholder' => 'images/kvass.png'
        ])->label('Путь к изображению') ?>

        <div class="admin-ingredients">
            <h3>Ингредиенты</h3>

            <?= $form->field($model, 'ingredientIds')->checkboxList(
                $ingredients
            )->label(false) ?>
        </div>

        <?= Html::submitButton('Сохранить рецепт', [
            'class' => 'admin-save-button'
        ]) ?>

        <a href="<?= \yii\helpers\Url::to(['recipes']) ?>"
           class="admin-cancel-button">
            Отмена
        </a>

        <?php ActiveForm::end(); ?>

    </div>

</main>