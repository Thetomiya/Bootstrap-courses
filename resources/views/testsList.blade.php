@extends('layout.main')

@section('content')

    <section class="tests">
        <div class="container">
            <div class="row d-flex justify-content-center ">
                <h1 class="text-center changeable-text">Тестирование по темам модулей</h1>
                <a href="{{ route('test.show', 1) }}" class="col-lg-4 col-md-6 col-sm-10 mb-5">
                    <div class="test-card d-flex flex-column justify-content-between align-items-center">
                        <h3 class="text-center pt-3">Тест по модулю 1</h3>
                        <img src="{{ asset('images/test-1.svg') }}" alt="test-img">
                    </div>
                </a>
                <a href="{{ route('test.show', 2) }}" class="col-lg-4 col-md-6 col-sm-10 mb-5">
                    <div class="test-card d-flex flex-column justify-content-between align-items-center">
                        <h3 class="text-center pt-3">Тест по модулю 2</h3>
                        <img src="{{ asset('images/test-1.svg') }}" alt="test-img">
                    </div>
                </a>
                <a href="{{ route('test.show', 3) }}" class="col-lg-4 col-md-6 col-sm-10 mb-5">
                    <div class="test-card d-flex flex-column justify-content-between align-items-center">
                        <h3 class="text-center pt-3">Тест по модулю 3</h3>
                        <img src="{{ asset('images/test-1.svg') }}" alt="test-img">
                    </div>
                </a>

            </div>
        </div>
    </section>
@endsection
