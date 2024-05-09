// Функция для сохранения состояния кнопки смены темы
function saveThemeButtonPosition() {
    var themeSwitcher = document.querySelector('.theme-switcher');
    var isMirrored = themeSwitcher.classList.contains('mirror-x');
    localStorage.setItem('themeButtonMirrored', isMirrored);
}

// Функция для загрузки состояния кнопки смены темы
function loadThemeButtonPosition() {
    var themeSwitcher = document.querySelector('.theme-switcher');
    var isMirrored = localStorage.getItem('themeButtonMirrored') === 'true';
    themeSwitcher.classList.toggle('mirror-x', isMirrored);
}

// Функция для изменения цвета текста и фона
function updateThemeColors(isDarkTheme) {
    var body = document.body;
    var footer = document.querySelector('.footer');
    var changeableTexts = document.querySelectorAll('.changeable-text');
    var heroBtnFirst = document.querySelector('.hero-btn-first');
    var heroBtnSecond = document.querySelector('.hero-btn-second');

    // Устанавливаем цвета фона и текста в зависимости от темы
    if (isDarkTheme) {
        body.style.background = 'rgb(33, 37, 41)';
        footer.style.background = 'rgb(43, 48, 53)';
        changeableTexts.forEach(function(text) {
            text.style.color = 'white';
        });
        body.classList.remove('light-theme');
        if (heroBtnFirst) heroBtnFirst.classList.remove('hover-black');
        if (heroBtnSecond) heroBtnSecond.classList.add('hover-black');
    } else {
        body.style.background = 'rgb(255, 255, 255)';
        footer.style.background = 'rgb(248, 249, 250)';
        changeableTexts.forEach(function(text) {
            text.style.color = 'black';
        });
        body.classList.add('light-theme');
        if (heroBtnFirst) heroBtnFirst.classList.add('hover-black');
        if (heroBtnSecond) heroBtnSecond.classList.remove('hover-black');
    }

    // Сохраняем состояние темы в локальном хранилище
    localStorage.setItem('isDarkTheme', isDarkTheme);
}

// Функция для переключения темы
function toggleTheme() {
    var themeSwitcher = document.querySelector('.theme-switcher');
    var isDarkTheme = localStorage.getItem('isDarkTheme') !== 'true';

    // Переключаем состояние кнопки смены темы
    themeSwitcher.classList.toggle('mirror-x', isDarkTheme);
    // Сохраняем положение кнопки смены темы
    saveThemeButtonPosition();

    // Обновляем цвета темы
    updateThemeColors(isDarkTheme);
}

// Получаем кнопку
var button = document.querySelector('.theme-switcher');

// Привязываем функцию к клику на кнопку
button.addEventListener('click', toggleTheme);

// При загрузке страницы устанавливаем сохраненный цвет фона и обновляем цвет текста
window.onload = function() {
    var isDarkTheme = localStorage.getItem('isDarkTheme') === 'true';

    // Обновляем цвета темы
    updateThemeColors(isDarkTheme);
    // Загружаем положение кнопки смены темы
    loadThemeButtonPosition();
};
