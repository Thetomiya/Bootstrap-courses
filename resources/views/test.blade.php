@extends('layout.main')

@section('content')

    <section class="test-section">
        <div class="container">
            <div class="row">
                <h1 class="text-left changeable-text">Тест по модулю {{ $testContent->module }}</h1>

                <form action="" method="post" class="changeable-text">
                    @csrf
                        <?=$testContent->test_block?>



                    <div class="lesson-btns col-12 col-lg-8 m-auto">
                        <div class="row d-flex justify-content-center m-0">
                            <button type="submit" class="col-md-5 hero-btn hero-btn-second d-flex align-items-center justify-content-center">
                                Завершить тест
                            </button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </section>

    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>

    <script>

        $(document).ready(function() {
            // Выбираем все блоки с вопросами
            var $questions = $('.question');

            // Перемешиваем блоки с вопросами
            $questions.each(function() {
                var $this = $(this);
                var $inputWraps = $this.find('.input-wrap');

                // Перемешиваем блоки input-wrap внутри каждого блока вопроса
                $inputWraps.sort(function() {
                    return Math.random() - 0.5;
                });

                // Очищаем блок вопроса, кроме input-wrap, и добавляем перемешанные input-wrap обратно
                $this.find('.input-wrap').remove();
                $inputWraps.appendTo($this);
            });

            // Перемешиваем блоки с вопросами
            $questions.sort(function() {
                return Math.random() - 0.5;
            });

            // Очищаем родительский контейнер и добавляем перемешанные блоки обратно
            $('#parent-container').empty();
            $questions.appendTo('#parent-container');
        });


    </script>

    <script>
        $(document).ready(function() {
            // Обработчик события изменения состояния инпута
            $('.question input').change(function() {
                // Находим выбранный инпут
                var $selectedInput = $(this);

                // Получаем ID выбранного инпута
                var inputId = $selectedInput.attr('id');

                // Выводим ID выбранного инпута в консоль
                console.log('ID выбранного инпута:', inputId);
            });
        });
    </script>




@endsection


