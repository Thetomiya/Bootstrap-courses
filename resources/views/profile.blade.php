@extends('layout.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="profile-container">
                <h1 class="text-center changeable-text">Добро пожаловать в личный кабинет</h1>

                <h2 class="text-center changeable-text " id="not-edit">
                    <div class="profile-edit-btn">{{ $user->full_name }}
                        <img src="{{ asset('images/profile/edit-button.svg') }}" id="edit-button" alt="edit-button">
                        @error('edited-name')
                        <p class="text-danger fs-5">{{ $message }}</p>
                        @enderror
                    </div>
                </h2>


                <div class="text-center changeable-text" id="edit">
                    <div class="profile-edit-btn">
                        <form action="" method="post">
                            @csrf
                            <input type="text" class="change-name-input" name="edited-name" value="{{ $user->full_name }}">

                            <button type="submit" class="profile-form-btn"></button>
                        </form>
                    </div>
                </div>

                <div class="profile-bg-container"></div>

                <h3 class="text-center mt-4 mb-5 changeable-text">Прогресс курса</h3>

                <div class="profile-cards-container mt-5 row">
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="profile-card  text-center d-flex flex-column justify-content-between align-items-center">
                            <p class="changeable-text">Тест по модулю 1</p>
                            <div class="profile-card-stars">
                                @switch($user->module_1_mark)
                                    @case(5)
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                    @break
                                    @case(4)
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                    @break
                                    @case(3)
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                    @break
                                    @case(2)
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                    @break
                                    @case(1)
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                    @break
                                    @default
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                @endswitch
                            </div>
                            <img src="{{ asset('images/profile/profile-test-img-1.svg') }}" alt="test-related-img" class="test-related-img">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="profile-card  text-center d-flex flex-column justify-content-between align-items-center">
                            <p class="changeable-text">Тест по модулю 2</p>
                            <div class="profile-card-stars">
                                @switch($user->module_2_mark)
                                    @case(5)
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        @break
                                    @case(4)
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        @break
                                    @case(3)
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        @break
                                    @case(2)
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        @break
                                    @case(1)
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        @break
                                    @default
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                @endswitch
                            </div>
                            <img src="{{ asset('images/profile/profile-test-img-2.svg') }}" alt="test-related-img" class="test-related-img">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="profile-card  text-center d-flex flex-column justify-content-between align-items-center">
                            <p class="changeable-text">Тест по модулю 3</p>
                            <div class="profile-card-stars">
                                @switch($user->module_3_mark)
                                    @case(5)
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        @break
                                    @case(4)
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        @break
                                    @case(3)
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        @break
                                    @case(2)
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        @break
                                    @case(1)
                                        <img src="{{ asset('images/profile/star-filled.svg') }}" alt="star-flled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        @break
                                    @default
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                        <img src="{{ asset('images/profile/star-unfilled.svg') }}" alt="star-unflled">
                                @endswitch
                            </div>
                            <img src="{{ asset('images/profile/profile-test-img-3.svg') }}" alt="test-related-img" class="test-related-img">
                        </div>
                    </div>

                </div>
            </div>

            @if (session('mark'))
                <div class="modal fade" id="result" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
                    <div class="modal-dialog mark-modal">
                        <div class="modal-content h-100 w-100">
                            <div class="modal-body col-12">
                                <p id="inmodal-text" class="text-center mt-3">Ваша оценка: {{ session('mark') }}</p>
                                <p class="text-center">В прогресс курса засчитываются только лучшие попытки</p>
                                <p class="text-center">Критерии оценивания: <br>Меньше 25% правильных ответов: оценка 1<br>25%-49%: оценка 2<br>50%-69%: оценка 3<br>70%-89%: оценка 4<br>90% и больше правильных ответов: оценка 5</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-bs-dismiss="modal" class="hero-btn inmodal-btn mb-3">Ок</button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        var myModal = new bootstrap.Modal(document.getElementById('result'));
                        myModal.show();
                    });
                </script>
            @endif

        <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>

        <script>
            $(document).ready(function(){
                $("#edit-button").click(function(){
                    $("#not-edit").hide();
                    $("#edit").show();
                });
            });
        </script>

        </div>
    </div>
@endsection
