@extends('layout/main')

@section('content')
    <section class="hero">
        <div class="container">
            <div class="row changeable-text">
                <div class="col-lg-7 col-sm-12 hero-text ">
                    <h1 class="changeable-text">Основы адаптивной верстки на Bootstrap</h1>
                    <p class="changeable-text">Bootstrap - это мощный, расширяемый и многофункциональный фронтенд инструментарий, который
                        поможет вам создавать веб-сайты, выглядящие отлично на любых устройствах, от
                        компьютеров до смартфонов.</p>

                    <div class="row p-3 p-lg-0 ms-xl-0 ms-lg-1 d-flex justify-content-between">
                        <a href="#lessons" class="col-xl-5 col-md-5 col-sm-12 mb-3 p-0 ">
                            <div class="w-100 hero-btn hero-btn-first d-flex align-items-center justify-content-center ">
                                Перейти к урокам
                            </div>
                        </a>

                        <a href="{{ route('testsList') }}" class="col-xl-5 col-md-5 col-sm-12 mb-3 me-lg-5 p-0">
                            <div class="w-100 hero-btn hero-btn-second d-flex align-items-center justify-content-center">
                                <span class="">Перейти к тестам</span>
                            </div>
                        </a>
                    </div>

                </div>

                <div class="col-lg-5 col-sm-8 m-sm-auto">
                    <img src="{{ asset('images/main-img.svg') }}" class="img-fluid mt-md-0 mt-5" alt="mobile-adaptive-image">
                </div>
            </div>
        </div>
    </section>

    <section class="lessons" id="lessons">
        <div class="container">
            <div class="row d-flex justify-content-center changeable-text">
                <h2 class="text-center changeable-text">Уроки</h2>
                <h3 class="text-center mb-5">Модуль 1 </h3>
                <a href="{{ route('lesson.show', 1) }}" class="col-lg-4 col-md-6 col-sm-10 mb-5">
                    <div class="lesson-card d-flex flex-column justify-content-between align-items-center">
                        <h3 class="text-center pt-3">Урок 1 Введение и установка Bootstrap</h3>
                        <img src="{{ asset('images/less-1.svg') }}" alt="lesson-img">
                    </div>
                </a>
                <a href="{{ route('lesson.show', 2) }}" class="col-lg-4 col-md-6 col-sm-10 mb-5">
                    <div class="lesson-card d-flex flex-column justify-content-between align-items-center">
                        <h3 class="text-center pt-3">Урок 2 На чём строится Bootstrap</h3>
                        <img src="{{ asset('images/less-1.svg') }}" alt="lesson-img">
                    </div>
                </a>
                <a href="{{ route('lesson.show', 3) }}" class="col-lg-4 col-md-6 col-sm-10 mb-5">
                    <div class="lesson-card d-flex flex-column justify-content-between align-items-center">
                        <h3 class="text-center pt-3">Урок 3 Столбцы и строки</h3>
                        <img src="{{ asset('images/less-1.svg') }}" alt="lesson-img">
                    </div>
                </a>
                <h3 class="text-center my-5">Модуль 2 </h3>
                <a href="{{ route('lesson.show', 4) }}" class="col-lg-4 col-md-6 col-sm-10 mb-5">
                    <div class="lesson-card d-flex flex-column justify-content-between align-items-center">
                        <h3 class="text-center pt-3">Урок 4 Адаптивные колонки и flex-классы</h3>
                        <img src="{{ asset('images/less-1.svg') }}" alt="lesson-img">
                    </div>
                </a>
                <a href="{{ route('lesson.show', 5) }}" class="col-lg-4 col-md-6 col-sm-10 mb-5">
                    <div class="lesson-card d-flex flex-column justify-content-between align-items-center">
                        <h3 class="text-center pt-3">Урок 5 Изображения и таблицы </h3>
                        <img src="{{ asset('images/less-1.svg') }}" alt="lesson-img">
                    </div>
                </a>
                <a href="{{ route('lesson.show', 6) }}" class="col-lg-4 col-md-6 col-sm-10 mb-5">
                    <div class="lesson-card d-flex flex-column justify-content-between align-items-center">
                        <h3 class="text-center pt-3">Урок 6 Кнопки и формы</h3>
                        <img src="{{ asset('images/less-1.svg') }}" alt="lesson-img">
                    </div>
                </a>
                <h3 class="text-center my-5">Модуль 3 </h3>
                <a href="{{ route('lesson.show', 7) }}" class="col-lg-4 col-md-6 col-sm-10 mb-5">
                    <div class="lesson-card d-flex flex-column justify-content-between align-items-center">
                        <h3 class="text-center pt-3">Урок 7 Навигация и пагинация</h3>
                        <img src="{{ asset('images/less-1.svg') }}" alt="lesson-img">
                    </div>
                </a>
                <a href="{{ route('lesson.show', 8) }}" class="col-lg-4 col-md-6 col-sm-10 mb-5">
                    <div class="lesson-card d-flex flex-column justify-content-between align-items-center">
                        <h3 class="text-center pt-3">Урок 8 Карусель и аккордионы</h3>
                        <img src="{{ asset('images/less-1.svg') }}" alt="lesson-img">
                    </div>
                </a>
                <a href="{{ route('lesson.show', 9) }}" class="col-lg-4 col-md-6 col-sm-10 mb-5">
                    <div class="lesson-card d-flex flex-column justify-content-between align-items-center">
                        <h3 class="text-center pt-3">Урок 9 Карточки и модальные окна</h3>
                        <img src="{{ asset('images/less-1.svg') }}" alt="lesson-img">
                    </div>
                </a>
                <h3 class="text-center my-5">Дополнение к курсу</h3>
                <a href="{{ route('lesson.show', 10) }}" class="col-lg-4 col-md-6 col-sm-10 mb-5">
                    <div class="lesson-card d-flex flex-column justify-content-between align-items-center">
                        <h3 class="text-center pt-3">Вёрстка адаптивного лендинга</h3>
                        <img src="{{ asset('images/less-1.svg') }}" alt="lesson-img">
                    </div>
                </a>

            </div>
        </div>
    </section>
@endsection
