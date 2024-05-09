@extends('layout.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="registration-container">
                <h1 class="text-center changeable-text">Регистрация</h1>

                <form action="" method="post" class="col-10 col-lg-5 col-sm-8 mx-auto my-5">
                    @csrf
                    <input type="text" placeholder="ФИО" class="form-control mb-3" name="full_name" id="full_name" value="{{ old('full_name') }}">
                    @error('full_name')
                        <p class="text-danger fs-5">{{ $message }}</p>
                    @enderror
                    <input type="email" placeholder="Email" class="form-control mb-3" name="email" id="email" value="{{ old('email') }}">
                    @error('email')
                        <p class="text-danger fs-5">{{ $message }}</p>
                    @enderror
                    <input type="password" placeholder="Пароль" class="form-control mb-3" name="password" id="password">
                    @error('password')
                        <p class="text-danger fs-5">{{ $message }}</p>
                    @enderror
                    <input type="password" placeholder="Повторите пароль" class="form-control mb-3" name="passwordConfirm" id="passwordConfirm">
                    @error('passwordConfirm')
                        <p class="text-danger fs-5">{{ $message }}</p>
                    @enderror

                    <div class="col-12 col-lg-7 mx-auto">
                        <a class="col-xl-5 col-md-5 col-sm-12 mb-3 p-0 ">
                            <button type="submit" class="w-100 hero-btn hero-btn-first d-flex align-items-center justify-content-center mb-3">
                                Зарегистрироваться
                            </button>
                        </a>

                        <a href="{{ route('login') }}" class="col-xl-5 col-md-5 col-sm-12 mb-3 me-lg-5 p-0">
                            <div class="w-100 hero-btn hero-btn-second d-flex align-items-center justify-content-center text-center">
                                Уже зарегистрированы?
                            </div>
                        </a>
                    </div>
                </form>
            </div>


        </div>
    </div>
@endsection
