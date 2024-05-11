<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/highlights.css') }}">
    <link rel="stylesheet" href="{{ asset('css/noty.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/logo2.svg') }}" type="image/x-icon">
</head>

<body class="scroll">
<header>
    <div class="container d-flex align-items-center justify-content-center p-0 m-auto">
        <div class="fixed-top nav-fixed-bg">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <div class="col-1">
                        <a href="{{ route('home') }}"><img src="{{ asset('images/logo2.svg') }}" alt="logotype" class="logo-rotate"></a>
                    </div>
                    <button class="navbar-toggler navbar-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse text-center lg-d-flex justify-content-end" id="navbarNavAltMarkup">
                        <div class="navbar-nav col-lg-9 d-flex justify-content-between">
                            <a class="p-3 p-lg-0" href="{{ route('home') }}#lessons">Уроки</a>
                            <a class="p-3 p-lg-0" href="{{ route('testsList') }}">Тесты</a>
                            <a class="p-3 p-lg-0" href="{{ route('practiceList') }}">Практика</a>
                            <a class="p-3 p-lg-0" href="{{ route('game') }}">Интерактив</a>
                            <a class="p-3 p-lg-0" href="{{ route('editor') }}">Редактор кода</a>
                            <div>
                                <span class="p-3 me-3 p-lg-0 theme-switcher"><img src="{{ asset('images/theme-btn.svg') }}" alt="theme-btn"></span>
                                <a class="p-3 p-lg-0 profile-icon" href="{{ route('profile') }}"><img src="{{ asset('images/profile-btn.svg') }}" alt="profile-btn"></a>
                                @if(Auth::check())
                                    <a class="p-3 p-lg-0 profile-icon ms-3 " href="{{ route('logout') }}"><img src="{{ asset('images/profile/logout.svg') }}" class="logout-icon" alt="profile-btn"></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>

<main>
    @yield('content')
</main>

<footer class="d-flex align-items-center footer">
    <div class="container">
        <div class="row justify-content-between">
            <div class="footer-nav col-lg-3 d-flex flex-column">
                <p class="changeable-text">Bootstrap 5.3.2</p>
                <span ><a class="changeable-text" target="_blank" href="https://getbootstrap.com/docs/versions/">Документация</a></span>
                <span><a class="changeable-text" target="_blank" href="https://getbootstrap.com/docs/5.3/examples/">Примеры</a></span>
                <span><a class="changeable-text" target="_blank" href="https://icons.getbootstrap.com/">Иконки</a></span>
                <span><a class="changeable-text" target="_blank" href="https://themes.getbootstrap.com/">Темы</a></span>
                <span><a class="changeable-text" target="_blank" href="https://blog.getbootstrap.com/">Блог</a></span>
            </div>

            <div class="footer-nav col-lg-4 d-flex mt-5 mt-lg-0 flex-column">
                <p class="changeable-text">Автор</p>
                <span class="changeable-text">Киценко И. В.</span>
                <span class="changeable-text">Ilyakitsenko@proton.me</span>
                <span class="changeable-text">2023-2024</span>
            </div>
        </div>
    </div>
</footer>





<script>
    function copyFunc(id) {
        if (navigator.clipboard) {
            let copyText = document.getElementById(id).innerText
            navigator.clipboard.writeText(copyText).then(function() {
                new Noty({
                    type: 'success',
                    timeout: 1000,
                    text: 'Код скопирован.',
                }).show();
            }, function(err) {
                new Noty({
                    type: 'error',
                    timeout: 10000,
                    text: 'Ошибка копирования. Возможно нет прав доступа к буферу обмена. ',
                }).show();
            });
        } else {
            new Noty({
                type: 'warning',
                timeout: 10000,
                text: 'У вас заблокирован доступ к буферу обмена...',
            }).show();
        }
    }
</script>

<script src="{{ asset('js/highlight.min.js') }}"></script>
<script>hljs.highlightAll();</script>
<script src="{{ asset('js/noty.min.js') }}"></script>
<script src="{{ asset('js/theme-switcher.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
