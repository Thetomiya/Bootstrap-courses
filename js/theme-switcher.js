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
    if (isMirrored) {
        themeSwitcher.classList.add('mirror-x');
    } else {
        themeSwitcher.classList.remove('mirror-x');
    }
}

// Функция для изменения цвета текста
function updateChangeableTextColor() {
    var body = document.body;
    var footer = document.querySelector('.footer');
    var changeableTexts = document.querySelectorAll('.changeable-text');
    var heroBtnFirst = document.querySelector('.hero-btn-first');
    var heroBtnSecond = document.querySelector('.hero-btn-second');
    
    // Проверяем текущий цвет body и footer
    if (body.style.background === 'rgb(255, 255, 255)' || footer.style.background === 'rgb(248, 249, 250)') {
        // Устанавливаем цвет текста для текстовых заголовков
        changeableTexts.forEach(function(text) {
            text.style.color = 'black'; // Устанавливаем черный цвет текста
        });
        
        // Добавляем класс для светлой темы
        body.classList.add('light-theme');
        if (heroBtnFirst) heroBtnFirst.classList.add('hover-black');
        if (heroBtnFirst) heroBtnSecond.classList.remove('hover-black');
    } else {
        // Устанавливаем цвет текста для текстовых заголовков
        changeableTexts.forEach(function(text) {
            text.style.color = 'white'; // Устанавливаем белый цвет текста
        });
        
        // Удаляем класс для светлой темы
        body.classList.remove('light-theme');
        if (heroBtnFirst) heroBtnFirst.classList.remove('hover-black');
        if (heroBtnFirst)heroBtnSecond.classList.add('hover-black');
    }
}

// Функция для изменения цвета фона
function toggleBackground() {
    var body = document.body;
    var footer = document.querySelector('.footer');
    
    if (body.style.background === 'rgb(33, 37, 41)') {
        body.style.background = 'rgb(255, 255, 255)';
        footer.style.background = 'rgb(248, 249, 250)';
        localStorage.setItem('backgroundColor', 'rgb(255, 255, 255)');
        localStorage.setItem('footerColor', 'rgb(248, 249, 250)');
    } else {
        body.style.background = 'rgb(33, 37, 41)';
        footer.style.background = 'rgb(43, 48, 53)';
        localStorage.setItem('backgroundColor', 'rgb(33, 37, 41)');
        localStorage.setItem('footerColor', 'rgb(43, 48, 53)');
    }
    
    // Обновляем цвет текста
    updateChangeableTextColor();
    // Сохраняем положение кнопки смены темы
    saveThemeButtonPosition();
}

// Функция для переключения зеркального отображения кнопки смены темы
function toggleThemeButtonMirror() {
    var themeSwitcher = document.querySelector('.theme-switcher');
    themeSwitcher.classList.toggle('mirror-x');
    // Сохраняем положение кнопки смены темы
    saveThemeButtonPosition();
}

// Получаем кнопку
var button = document.querySelector('.theme-switcher');

// Привязываем функцию к клику на кнопку
button.addEventListener('click', toggleBackground);
button.addEventListener('click', toggleThemeButtonMirror);

// При загрузке страницы устанавливаем сохраненный цвет фона и обновляем цвет текста
window.onload = function() {
    var body = document.body;
    var footer = document.querySelector('.footer');
    var savedColor = localStorage.getItem('backgroundColor');
    var savedFooterColor = localStorage.getItem('footerColor');
    
    if (savedColor) {
        body.style.background = savedColor;
    }
    
    if (savedFooterColor) {
        footer.style.background = savedFooterColor;
    }
    
    // Обновляем цвет текста
    updateChangeableTextColor();
    // Загружаем положение кнопки смены темы
    loadThemeButtonPosition();
};