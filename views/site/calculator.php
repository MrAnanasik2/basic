
<main class="calc-main">
  <script src="calculator.js"></script>
      <p class="calc-eyebrow">МЕНЬШЕ СЧЁТА — БОЛЬШЕ ВКУСА</p>
      <h1 class="calc-title">Калькулятор пропорций</h1>
      <p class="calc-lead">
        Выберите рецепт и нужный объём основы. Калькулятор пересчитает количество
        ингредиентов, сохранив исходные пропорции.
      </p>

      <div class="calc-layout">
        <section class="calc-card">
          <div class="calc-step">01 / НАСТРОЙТЕ ОБЪЁМ</div>
          <h2>Что будем готовить?</h2>

          <label class="calc-field">
            <span>Рецепт</span>
            <select id="recipe">
              <option value="kvass">Хлебный квас</option>
            </select>
          </label>

          <label class="calc-field">
            <span>Исходный объём, л</span>
            <input id="baseVolume" type="number" min="1" max="30" value="3" step="0.5" />
          </label>

          <p class="calc-hint">Базовый объём воды из рецепта</p>

          <label class="calc-field">
            <span>Целевой объём, л</span>
            <input id="targetVolume" type="number" min="1" max="30" value="6" step="0.5" />
          </label>

          <p class="calc-hint">Введите объём от 1 до 30 литров</p>

          <div class="calc-presets">
            <button type="button" data-volume="3">3 л</button>
            <button type="button" data-volume="6" class="selected">6 л</button>
            <button type="button" data-volume="10">10 л</button>
          </div>

          <button class="calc-primary" id="calculate" type="button">
            Пересчитать ингредиенты
          </button>

          <p class="calc-note">
            Меняется количество ингредиентов, а не длительность приготовления. Время и
            температуру сверяйте с рецептом.
          </p>
        </section>

        <section class="calc-card" aria-live="polite">
          <div class="calc-result-head">
            <div>
              <div class="calc-step">02 / ВАШ СПИСОК ИНГРЕДИЕНТОВ</div>
              <h2 id="resultTitle">Хлебный квас на 6 л</h2>
            </div>
            <span class="calc-factor" id="factor">Коэффициент × 2</span>
          </div>

          <div class="calc-summary">
            <div>
              <small>В РЕЦЕПТЕ</small>
              <strong id="baseLabel">3 л</strong>
            </div>
            <span>→</span>
            <div>
              <small>ВАШ ОБЪЁМ</small>
              <strong id="targetLabel">6 л</strong>
            </div>
          </div>

          <table class="calc-table">
            <thead>
              <tr>
                <th>Ингредиент</th>
                <th>На 3 л</th>
                <th id="targetColumn">На 6 л</th>
              </tr>
            </thead>
            <tbody id="ingredients">
              <tr>
                <td>Вода питьевая</td>
                <td>3 л</td>
                <td>6 л</td>
              </tr>
              <tr>
                <td>Ржаной хлеб</td>
                <td>300 г</td>
                <td>600 г</td>
              </tr>
              <tr>
                <td>Сахар</td>
                <td>150 г</td>
                <td>300 г</td>
              </tr>
              <tr>
                <td>Дрожжи сухие</td>
                <td>3 г</td>
                <td>6 г</td>
              </tr>
              <tr>
                <td>Изюм</td>
                <td>30 г</td>
                <td>60 г</td>
              </tr>
            </tbody>
          </table>

          <div class="calc-tip">
            <strong>Подберите ёмкость с запасом.</strong><br />
            Оставьте место для пены и используйте подходящую пищевую ёмкость. После
            процеживания готового напитка объём будет немного меньше.
          </div>

          <div class="calc-actions">
            <a class="calc-link-primary" href="history.html#new-brew">В журнал варок →</a>
            <a class="calc-link-secondary" href="kvass.html">К рецепту →</a>
          </div>
        </section>
      </div>
    </main>
    <script>
document.addEventListener('DOMContentLoaded', function () {
    const button = document.getElementById('calculate');
    // Переключение готовых объёмов
document.querySelectorAll('.calc-presets button').forEach(function (preset) {
    preset.addEventListener('click', function () {
        document.getElementById('targetVolume').value = preset.dataset.volume;

        // Запускаем пересчёт
        document.getElementById('calculate').click();

        // Переключаем выделенную кнопку
        document.querySelectorAll('.calc-presets button').forEach(function (item) {
            item.classList.remove('selected');
        });

        preset.classList.add('selected');
    });
});

    button.addEventListener('click', function () {
        const base = Number(document.getElementById('baseVolume').value);
        const target = Number(document.getElementById('targetVolume').value);

        if (base < 1 || target < 1 || base > 30 || target > 30) {
            alert('Введите объём от 1 до 30 литров');
            return;
        }

        const coefficient = target / 3;

        document.getElementById('resultTitle').textContent =
            'Хлебный квас на ' + target + ' л';

        document.getElementById('factor').textContent =
            'Коэффициент × ' + coefficient;

        document.getElementById('baseLabel').textContent = base + ' л';
        document.getElementById('targetLabel').textContent = target + ' л';
        document.getElementById('targetColumn').textContent = 'На ' + target + ' л';

        const data = [
            ['Вода питьевая', 3, 'л'],
            ['Ржаной хлеб', 300, 'г'],
            ['Сахар', 150, 'г'],
            ['Дрожжи сухие', 3, 'г'],
            ['Изюм', 30, 'г']
        ];

        const table = document.getElementById('ingredients');
        table.innerHTML = '';

        data.forEach(function (item) {
            const row = document.createElement('tr');

            row.innerHTML = `
                <td>${item[0]}</td>
                <td>${(item[1] * base / 3)} ${item[2]}</td>
                <td>${(item[1] * target / 3)} ${item[2]}</td>
            `;

            table.appendChild(row);
        });
    });
});
</script>