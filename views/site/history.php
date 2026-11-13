<main class="history-main">

    <section class="recipes-intro history-intro">
      <div>
        <p class="recipes-eyebrow">ВАША ДОМАШНЯЯ МАСТЕРСКАЯ</p>
        <h1>Каждая варка — история</h1>
        <p>Сохраняйте наблюдения, сравнивайте партии и находите свой вкус. Здесь опыт становится вашим лучшим рецептом.</p>
      </div>
      <a class="recipes-header-button" href="#new-brew">Добавить запись <span aria-hidden="true">＋</span></a>
    </section>

    <section class="history-stats" aria-label="Статистика варок">
      <article><strong id="statTotal">4</strong><span>Всего варок</span></article>
      <article><strong id="statVolume">22 л</strong><span>Объём партий</span></article>
      <article><strong id="statReady">2</strong><span>Готовые партии</span></article>
    </section>

    <aside class="history-reminder">
      <span class="history-reminder-icon">i</span>
      <div><strong>Сегодня стоит заглянуть к квасу</strong><p>Варка № 004 от 27 октября: проверьте аромат и кислинку через 24–36 часов после старта. При розливе используйте подходящие ПЭТ-бутылки и контролируйте давление.</p></div>
    </aside>

    <section class="history-panel">
      <div class="history-tools">
        <label class="history-field"><span>Поиск по журналу</span>
          <span class="history-search"><input id="historySearch" type="search" placeholder="Название рецепта или заметка"><i aria-hidden="true">⌕</i></span>
        </label>
        <label class="history-field"><span>Статус партии</span>
          <select id="statusFilter"><option value="all">Все статусы</option><option value="active">Брожение</option><option value="ready">Готово</option><option value="aging">Созревание</option></select>
        </label>
        <label class="history-field"><span>Сортировка</span>
          <select id="historySort"><option value="new">Сначала новые</option><option value="old">Сначала старые</option></select>
        </label>
      </div>

      <div class="history-tabs"><button class="active" data-type="all">Все · 4</button><button data-type="kvass">Квас · 3</button><button data-type="beer">Пиво · 1</button></div>

      <div class="history-table-head"><span>ДАТА / ВАРКА</span><span>РЕЦЕПТ</span><span>ОБЪЁМ</span><span>СТАТУС</span><span>НАБЛЮДЕНИЯ</span></div>

      <div class="history-records" id="historyRecords">
        <article class="history-record" data-type="kvass" data-status="active" data-volume="3" data-date="2026-10-27" data-search="хлебный квас пена аромат чистый хлебный">
          <div class="history-date"><strong>27.10.2026</strong><span>Варка № 004</span></div>
          <div class="history-recipe"><a href="kvass.html">Хлебный квас</a><span>Квас · 23 °C</span></div>
          <strong class="history-volume">3 л</strong>
          <div><span class="history-status status-active">Брожение</span></div>
          <div class="history-observation"><p>Через 18 часов появилась лёгкая пена. Аромат чистый, хлебный.</p><small class="meta-orange">Наблюдение в процессе</small><a href="kvass.html">Открыть запись ↗</a></div>
        </article>
        <article class="history-record" data-type="kvass" data-status="ready" data-volume="6" data-date="2026-10-24" data-search="хлебный квас ровный аромат кислинка сухари поджарил сильнее">
          <div class="history-date"><strong>24.10.2026</strong><span>Варка № 003</span></div>
          <div class="history-recipe"><a href="kvass.html">Хлебный квас</a><span>Квас · 23 °C</span></div>
          <strong class="history-volume">6 л</strong>
          <div><span class="history-status status-ready">Готово</span></div>
          <div class="history-observation"><p>Ровный хлебный аромат, лёгкая кислинка. Сухари поджарил чуть сильнее.</p><small><b class="stars">★★★★★</b> · Удачная партия</small><a href="kvass.html">Открыть запись ↗</a></div>
        </article>
        <article class="history-record" data-type="kvass" data-status="ready" data-volume="3" data-date="2026-10-20" data-search="яблочный квас свежий яблочный вкус мягкая газация кислые яблоки">
          <div class="history-date"><strong>20.10.2026</strong><span>Варка № 002</span></div>
          <div class="history-recipe"><a href="recipes.html">Яблочный квас</a><span>Квас · 22 °C</span></div>
          <strong class="history-volume">3 л</strong>
          <div><span class="history-status status-ready">Готово</span></div>
          <div class="history-observation"><p>Свежий яблочный вкус, мягкая газация. В следующий раз взять более кислые яблоки.</p><small><b class="stars">★★★★☆</b> · Хороший результат</small><a href="recipes.html">Открыть запись ↗</a></div>
        </article>
        <article class="history-record" data-type="beer" data-status="aging" data-volume="10" data-date="2026-10-18" data-search="светлый эль пиво цитрусовые ноты хмеля осадок">
          <div class="history-date"><strong>18.10.2026</strong><span>Варка № 001</span></div>
          <div class="history-recipe"><a href="recipes.html">Светлый эль</a><span>Пиво · 18+ · 20 °C</span></div>
          <strong class="history-volume">10 л</strong>
          <div><span class="history-status status-aging">Созревание</span></div>
          <div class="history-observation"><p>Перелит на созревание. Заметны цитрусовые ноты хмеля, осадок плотный.</p><small class="meta-orange">Дегустация 08.11.2026</small><a href="#tasting">Открыть запись ↗</a></div>
        </article>
      </div>
      <p class="history-empty" id="historyEmpty" hidden>Записи не найдены. Измените поиск или фильтры.</p>
      <p class="history-footnote" id="historyFootnote">Показаны все 4 записи · Обновлено 28 октября 2026</p>
    </section>

    <section class="history-notes">
      <article class="history-card history-card-green" id="tasting"><p class="recipes-eyebrow">СЛЕДУЮЩАЯ ДЕГУСТАЦИЯ</p><h2>8 ноября · Светлый эль</h2><p>После 21 дня с начала варки оцените аромат, горечь и прозрачность партии № 001. Сохраните впечатления рядом с рецептом.</p></article>
      <article class="history-card history-card-beige"><p class="recipes-eyebrow">НЕБОЛЬШАЯ ПРИВЫЧКА</p><h2>Меняйте по одной детали</h2><p>Записывайте температуру, время и изменения ингредиентов. Сравнивая две партии, вы поймёте, что действительно повлияло на вкус.</p></article>
    </section>

    <section class="history-bottom">
      <article class="history-form-card" id="new-brew">
        <h2>Что и когда готовим</h2>
        <p class="history-form-sub">Поля со звёздочкой обязательны.</p>
        <form id="brewForm" class="history-form">
          <label>Рецепт *
            <select id="brewRecipe" required><option>Хлебный квас</option><option>Яблочный квас</option><option>Светлый эль</option></select>
            <small id="brewHint">Базовый рецепт на 3 л · Коэффициент × 2</small>
          </label>
          <label>Название партии *
            <input id="brewName" required value="Хлебный квас · октябрьская партия">
            <small>Помогает отличить эту варку от предыдущих</small>
          </label>
          <div class="history-form-row">
            <label>Дата начала *<input id="brewDate" type="date" required></label>
            <label>Время начала<input id="brewTime" type="time" value="10:00"></label>
          </div>
          <div class="history-form-row">
            <label>Объём основы, л *<input id="brewVolume" type="number" min="1" max="100" value="6" required><small>Объём воды, как в калькуляторе</small></label>
            <label>Температура помещения, °C<input id="brewTemp" type="number" min="5" max="35" value="23"><small>Рекомендуем 22–24 °C</small></label>
          </div>
          <button class="recipes-apply" type="submit">Добавить запись</button>
          <p class="history-form-message" id="brewMessage" role="status"></p>
        </form>
      </article>

      <aside class="history-calc">
        <p class="recipes-eyebrow">ИЗ КАЛЬКУЛЯТОРА</p>
        <h2 id="calcTitle">Хлебный квас</h2>
        <div class="history-chips"><span id="calcVolume">6 л</span><span>Подготовка</span></div>
        <div id="calcRows"></div>
        <p class="history-small-note" id="calcNote"></p>
        <a class="history-calc-button" id="calcLink" href="kvass.html">Открыть рецепт <span aria-hidden="true">→</span></a>
      </aside>
    </section>
  </main>