<?php

use yii\helpers\Url;
use yii\helpers\Html;
?>

<main class="recipes-main detail-main">
    <section class="detail-hero">
      <div class="detail-hero-copy">
        <p class="recipes-eyebrow">РЕЦЕПТ № 01 · КВАС</p>
        <h1>Хлебный квас</h1>
        <p class="detail-lead">Тот самый вкус ржаной корочки: освежающий, чуть кисловатый, с мягкими пузырьками. Простой рецепт для первой домашней партии.</p>
        <div class="detail-tags"><span>Для начинающих</span><span>Хороший первый опыт</span></div>
      </div>
      <?= Html::img('@web/images/kvass.png') ?>
      <div class="detail-summary">
        <div><span>Базовый объём</span><strong>3 л</strong></div>
        <div><span>Готовность</span><strong>3 дня</strong></div>
        <div><span>Активная работа</span><strong>25 минут</strong></div>
        <div><span>Температура брожения</span><strong>23 °C</strong></div>
      </div>
    </section>

    <div class="detail-action-row">
      <a class="recipes-header-button" href="#ingredients">Перейти к ингредиентам ↓</a>
      <button class="detail-save-button" type="button" id="saveRecipe">♡ <span>Сохранить рецепт</span></button>
    </div>

    <div class="detail-content-grid">
      <aside class="detail-sidebar" id="ingredients">
        <p class="recipes-eyebrow">НА БАЗОВЫЙ ОБЪЁМ 3 Л</p>
        <h2>Ингредиенты</h2>
        <label class="detail-volume-control" for="volume">Объём напитка
          <select id="volume"><option value="1">3 литра</option><option value="2">6 литров</option><option value="3">9 литров</option></select>
        </label>
        <div class="detail-ingredients" id="ingredientList">
          <div class="detail-ingredient"><div><strong data-base="3 л">3 л</strong><span>Вода питьевая</span></div><small>Фильтрованная, без хлора</small></div>
          <div class="detail-ingredient"><div><strong data-base="300 г">300 г</strong><span>Ржаной хлеб</span></div><small>Без семян и добавок</small></div>
          <div class="detail-ingredient"><div><strong data-base="150 г">150 г</strong><span>Сахар</span></div><small>Полностью растворить</small></div>
          <div class="detail-ingredient"><div><strong data-base="3 г">3 г</strong><span>Дрожжи сухие</span></div><small>Хлебопекарные</small></div>
          <div class="detail-ingredient"><div><strong data-base="30 г">30 г</strong><span>Изюм</span></div><small>Промыть перед добавлением</small></div>
        </div>
        <div class="detail-prep"><h3>Что подготовить</h3><ul><li>Банка или ёмкость от 4 л</li><li>Весы и термометр</li><li>Сито и марля</li><li>ПЭТ-бутылки для газированных напитков</li></ul></div>
        <div class="detail-note"><strong>Чистота — часть рецепта</strong><p>Вымойте посуду и обработайте её пищевым санитайзером по инструкции. Не используйте ёмкости со сколами и повреждениями.</p></div>
      </aside>

      <section class="detail-method">
        <p class="recipes-eyebrow">ОТ ХЛЕБА ДО ПЕРВОГО ГЛОТКА</p>
        <h2>Готовим шаг за шагом</h2>
        <article class="detail-step"><span class="detail-step-number">01</span><div><h3>Подсушите хлеб</h3><p class="detail-step-time">10–15 минут · 180 °C</p><p>Нарежьте ржаной хлеб кубиками. Подсушите в духовке до тёмно-золотистой корочки. Не обугливайте: горелый хлеб придаст горечь.</p></div></article>
        <article class="detail-step"><span class="detail-step-number">02</span><div><h3>Сделайте хлебный настой</h3><p class="detail-step-time">3–4 часа</p><p>Залейте сухари 1,5 л кипятка из общего объёма воды. Накройте и оставьте на 3–4 часа. Процедите через сито, аккуратно отожмите хлеб.</p></div></article>
        <article class="detail-step"><span class="detail-step-number">03</span><div><h3>Добавьте ингредиенты</h3><p class="detail-step-time">После охлаждения ниже 30 °C</p><p>Растворите в тёплом настое сахар. Влейте оставшуюся кипячёную охлаждённую воду. Когда смесь остынет ниже 30 °C, добавьте сухие дрожжи и промытый изюм.</p></div></article>
        <article class="detail-step"><span class="detail-step-number">04</span><div><h3>Дайте квасу сбродить</h3><p class="detail-step-time">24–36 часов · 22–24 °C</p><p>Перелейте в чистую ёмкость объёмом не менее 4 л и прикройте марлей. Оставьте в тёмном месте, не закрывая герметично. Следите за запахом и состоянием напитка.</p></div></article>
        <article class="detail-step"><span class="detail-step-number">05</span><div><h3>Разлейте по бутылкам</h3><p class="detail-step-time">С контролем газообразования</p><p>Процедите квас и разлейте в чистые ПЭТ-бутылки, предназначенные для газированных напитков, оставляя свободное место сверху. Регулярно проверяйте давление и сразу переносите бутылки в холодильник, когда они становятся плотными.</p></div></article>
        <article class="detail-step"><span class="detail-step-number">06</span><div><h3>Охладите и попробуйте</h3><p class="detail-step-time">Не менее 12 часов · 2–6 °C</p><p>Охладите напиток в холодильнике. Открывайте медленно и только охлаждённым. Храните в холодильнике и употребите в течение нескольких дней.</p></div></article>
        <div class="detail-warning"><strong>Контролируйте давление</strong><p>Не используйте обычные стеклянные бутылки и не оставляйте тёплый квас в закрытой таре без контроля: давление может расти. При появлении плесени или неприятного запаха всю партию нужно утилизировать.</p></div>
      </section>
    </div>

    <section class="detail-bottom-cards">
      <article><p class="recipes-eyebrow">ЗАМЕТКА О ВКУСЕ</p><h2>Цвет рождается в духовке</h2><p>Чем сильнее поджарен хлеб, тем насыщеннее цвет и аромат. Начните с золотистой корочки, а в следующей партии измените только степень обжарки — так проще сравнить результат.</p></article>
      <article><p class="recipes-eyebrow">СЛЕДУЮЩИЙ ШАГ</p><h2>Попробуйте другой рецепт</h2><p>Посмотрите другие варианты кваса и выберите вкус для следующей партии.</p><a class="detail-text-link" href="recipes.html">Вернуться к рецептам →</a></article>
    </section>
  </main>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const volumeSelect = document.getElementById('volume');
    const ingredients = document.querySelectorAll('.detail-ingredient strong');

    // Количество ингредиентов для 3 литров
    const baseValues = [
        { value: 3, unit: 'л' },
        { value: 300, unit: 'г' },
        { value: 150, unit: 'г' },
        { value: 3, unit: 'г' },
        { value: 30, unit: 'г' }
    ];

    volumeSelect.addEventListener('change', function () {

        const multiplier = Number(volumeSelect.value);

        ingredients.forEach(function (ingredient, index) {

            const newValue = baseValues[index].value * multiplier;
            const unit = baseValues[index].unit;

            ingredient.textContent = newValue + ' ' + unit;

        });

    });

});
</script>
