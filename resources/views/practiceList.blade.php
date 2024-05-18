@extends('layout.main')

@section('content')

    <section class="tests">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <h1 class="text-center changeable-text">Практические задания</h1>
                <a href="{{ route('practice.show', 1) }}" class="col-lg-4 col-md-6 col-sm-10 mb-5">
                    <div class="test-card d-flex flex-column justify-content-between align-items-center ">
                        <h3 class="text-center pt-3">Задание 1 Вёрстка адаптивной секции с карточками</h3>
                        <img src="{{ asset('images/practice.svg') }}" alt="test-img">
                    </div>
                </a>
                <a href="{{ route('practice.show', 2) }}" class="col-lg-4 col-md-6 col-sm-10 mb-5">
                    <div class="test-card d-flex flex-column justify-content-between align-items-center ">
                        <h3 class="text-center pt-3">Задание 2 Создание главной страницы</h3>
                        <img src="{{ asset('images/practice.svg') }}" alt="test-img">
                    </div>
                </a>
                <a href="{{ route('practice.show', 3) }}" class="col-lg-4 col-md-6 col-sm-10 mb-5">
                    <div class="test-card d-flex flex-column justify-content-between align-items-center ">
                        <h3 class="text-center pt-3">Задание 3 Создание продвинутой страницы сайта</h3>
                        <img src="{{ asset('images/practice.svg') }}" alt="test-img">
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection
