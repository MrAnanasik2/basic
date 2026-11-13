<?php

namespace app\models\User;

use Yii;
use yii\helpers\Url;
use yii\helpers\Html;
?>

<main class="recipes-main">
    <section class="recipes-intro">
      <p class="recipes-eyebrow">КОЛЛЕКЦИЯ ВКУСОВ</p>
      <h1>Найдите свой рецепт</h1>
      <p>Квас и домашние напитки для вашей кухни. Выбирайте по вкусу, времени и опыту — начните с того, что вам ближе.</p>
    </section>

    <label class="recipes-search" for="recipeSearch">
      <span aria-hidden="true">⌕</span>
      <input id="recipeSearch" type="search" placeholder="Название или ингредиент, например «рожь»">
      <button id="clearSearch" type="button" aria-label="Очистить поиск">×</button>
    </label>

    <?php

$isAdmin = !Yii::$app->user->isGuest && Yii::$app->user->identity->isAdmin();

?>

<?php if ($isAdmin): ?>

    <div class="recipes-admin-panel">

        <a href="<?= Url::to(['create-recipe']) ?>"
           class="recipes-admin-add, recipes-header-button">
            + Добавить рецепт
        </a>

    </div>

<?php endif; ?>

    <div class="recipes-layout">
      <aside class="recipes-filters" aria-label="Фильтры рецептов">
        <div class="recipes-filter-heading"><h2>Фильтры</h2><button type="button" id="resetFilters">Сбросить</button></div>
        <fieldset>
          <legend>НАПИТОК</legend>
          <label><input type="radio" name="drink" value="all" checked> Все напитки <span>6</span></label>
          <label><input type="radio" name="drink" value="квас"> Квас <span>3</span></label>
          <label><input type="radio" name="drink" value="пиво"> Пиво · 18+ <span>3</span></label>
        </fieldset>
        <fieldset>
          <legend>СЛОЖНОСТЬ</legend>
          <label><input type="checkbox" name="level" value="beginner"> Для начинающих</label>
          <label><input type="checkbox" name="level" value="medium"> Средний уровень</label>
          <label><input type="checkbox" name="level" value="advanced"> Для опытных</label>
        </fieldset>
        <div class="recipes-filter-select"><label for="timeFilter">Время приготовления</label><select id="timeFilter"><option value="all">Любое время</option><option value="quick">До 3 дней</option><option value="long">Больше 3 дней</option></select></div>
        <div class="recipes-filter-select"><label for="volumeFilter">Базовый объём</label><select id="volumeFilter"><option value="all">Любой объём</option><option value="3">3 литра</option><option value="10">10 литров</option></select></div>
        <button class="recipes-apply" id="applyFilters" type="button">Показать рецепты</button>
      </aside>

      <section class="recipes-results" aria-label="Список рецептов">
        <div class="recipes-results-top"><p id="recipesCount">6 рецептов</p><label class="recipes-sort">Сортировка <select id="sortRecipes"><option value="popular">По популярности</option><option value="name">По названию</option></select></label></div>
        <div class="recipes-chips"><button class="active" data-chip="all" type="button">Все напитки</button><button data-chip="квас" type="button">Квас</button><button data-chip="пиво" type="button">Пиво · 18+</button></div>
        <div class="recipes-grid" id="recipesGrid">

        <?php foreach ($recepts as $recept) { ?>
            <article class="recipe-card"
                data-drink="<?= Html::encode($recept->class) ?>"
                data-level="<?= $recept->levl === 'Для начинающих' ? 'beginner' : ($recept->levl === 'Средний уровень' ? 'medium' : 'advanced') ?>"
                data-days="<?= Html::encode($recept->readiness) ?>"
                data-volume="<?= Html::encode($recept->volume) ?>"
                data-name="<?= Html::encode($recept->name) ?>"
                data-search="<?= Html::encode($recept->name . ' ' . $recept->description) ?>">

                <?= Html::img('@web/' . ltrim($recept->photo, '/'), [
                    'class' => 'recipe-photo'
                ]) ?>

    <div class="recipe-card-content">

        <div class="recipe-card-top">
            <span class="recipe-tag">
                <?= Html::encode($recept->class) ?>
            </span>
        </div>

        <h2><?= Html::encode($recept->name) ?></h2>

        <p><?= Html::encode($recept->description) ?></p>

        <div class="recipe-meta">
            <?= Html::encode($recept->readiness) ?> дня ·
            <?= Html::encode($recept->volume) ?> л
        </div>

        <span class="recipe-level">
            <?= Html::encode($recept->levl) ?>
        </span>

    </div>

</article>
            </a>    
        
          <?php } ?>

        </div>
        <p class="recipes-empty" id="recipesEmpty" hidden>По вашему запросу ничего не найдено. Попробуйте изменить фильтры.</p>
      </section>
    </div>
  </main>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const grid = document.getElementById('recipesGrid');
    const cards = Array.from(grid.querySelectorAll('.recipe-card'));

    const search = document.getElementById('recipeSearch');
    const clearSearch = document.getElementById('clearSearch');
    const statusCount = document.getElementById('recipesCount');
    const empty = document.getElementById('recipesEmpty');

    const timeFilter = document.getElementById('timeFilter');
    const volumeFilter = document.getElementById('volumeFilter');
    const sortRecipes = document.getElementById('sortRecipes');

    let selectedDrink = 'all';

    // Получаем выбранные уровни сложности
    function getLevels() {
        return Array.from(
            document.querySelectorAll('input[name="level"]:checked')
        ).map(input => input.value);
    }

    // Применяем все фильтры
    function applyFilters() {
        const searchText = search.value.toLowerCase().trim();
        const levels = getLevels();
        const time = timeFilter.value;
        const volume = volumeFilter.value;

        let visibleCards = [];

        cards.forEach(card => {
            const drink = card.dataset.drink;
            const level = card.dataset.level;
            const days = Number(card.dataset.days);
            const cardVolume = card.dataset.volume;

            const name = card.dataset.name.toLowerCase();
            const text = card.dataset.search.toLowerCase();

            const matchesSearch =
                name.includes(searchText) || text.includes(searchText);

            const matchesDrink =
                selectedDrink === 'all' || drink === selectedDrink;

            const matchesLevel =
                levels.length === 0 || levels.includes(level);

            const matchesTime =
                time === 'all' ||
                (time === 'quick' && days <= 3) ||
                (time === 'long' && days > 3);

            const matchesVolume =
                volume === 'all' || cardVolume === volume;

            const show =
                matchesSearch &&
                matchesDrink &&
                matchesLevel &&
                matchesTime &&
                matchesVolume;

            card.hidden = !show;

            if (show) {
                visibleCards.push(card);
            }
        });

        // Сортировка
        if (sortRecipes.value === 'name') {
            visibleCards.sort((a, b) =>
                a.dataset.name.localeCompare(b.dataset.name, 'ru')
            );
        }

        // Возвращаем карточки в нужном порядке
        visibleCards.forEach(card => grid.appendChild(card));

        statusCount.textContent =
            visibleCards.length + ' ' +
            (visibleCards.length === 1 ? 'рецепт' :
            visibleCards.length >= 2 && visibleCards.length <= 4 ? 'рецепта' : 'рецептов');

        empty.hidden = visibleCards.length !== 0;
    }

    // Кнопка «Показать рецепты»
    document.getElementById('applyFilters').addEventListener('click', applyFilters);

    // Поиск
    search.addEventListener('input', applyFilters);

    // Очистка поиска
    clearSearch.addEventListener('click', function () {
        search.value = '';
        applyFilters();
    });

    // Изменение фильтров
    document.querySelectorAll('input[name="drink"], input[name="level"]').forEach(input => {
        input.addEventListener('change', function () {
            if (input.name === 'drink') {
                selectedDrink = input.value;

                document.querySelectorAll('.recipes-chips button').forEach(button => {
                    button.classList.toggle(
                        'active',
                        button.dataset.chip === selectedDrink
                    );
                });
            }

            applyFilters();
        });
    });

    // Переключение категорий
    document.querySelectorAll('.recipes-chips button').forEach(button => {
        button.addEventListener('click', function () {
            selectedDrink = button.dataset.chip;

            document.querySelectorAll('input[name="drink"]').forEach(input => {
                input.checked = input.value === selectedDrink;
            });

            document.querySelectorAll('.recipes-chips button').forEach(item => {
                item.classList.toggle('active', item === button);
            });

            applyFilters();
        });
    });

    // Изменение времени и объёма
    timeFilter.addEventListener('change', applyFilters);
    volumeFilter.addEventListener('change', applyFilters);

    // Сортировка
    sortRecipes.addEventListener('change', applyFilters);

    // Сброс всех фильтров
    document.getElementById('resetFilters').addEventListener('click', function () {
        search.value = '';

        document.querySelector('input[name="drink"][value="all"]').checked = true;

        document.querySelectorAll('input[name="level"]').forEach(input => {
            input.checked = false;
        });

        timeFilter.value = 'all';
        volumeFilter.value = 'all';
        sortRecipes.value = 'popular';

        selectedDrink = 'all';

        document.querySelectorAll('.recipes-chips button').forEach(button => {
            button.classList.toggle('active', button.dataset.chip === 'all');
        });

        applyFilters();
    });

    // Первоначальное отображение
    applyFilters();

});
</script>
