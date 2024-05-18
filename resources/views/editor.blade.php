@extends('layout.main')

@section('content')


<div class="editor-container">
    <div id="editor" class="col-12 col-lg-6"></div>
    <iframe id="output" class="col-lg-6 col-12 "></iframe>
</div>


<div class="modal fade" id="result" tabindex="-1" data-bs-keyboard="false">
    <div class="modal-dialog mark-modal">
        <div class="modal-content h-100 w-100">
            <div class="modal-body col-12">
                <p id="inmodal-text" class="text-center mt-3">Это страница, где вы можете попрактиковаться в использовании конструкций Bootstrap, описываемых в уроках. Весь написанный в левом окне код, отображается в правом окне в реальном времени</p>
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

    <script src="{{ asset('js/ace.js') }}"></script>
    <script>
        var editor = ace.edit("editor");
        editor.setTheme("ace/theme/monokai");
        editor.session.setMode("ace/mode/html");

        // Установите начальное значение для редактора
        var initialCode = `
<!DOCTYPE html>
<link href="/css/bootstrap.min.css" rel="stylesheet">

<style>
    div {
        border: 1px solid black;
    }
</style>
<div class="container text-center mt-5">
    <div class="row">
        <div class="col-md-8 col-12">.col-12 .col-md-8</div>
        <div class="col-12 col-md-4">.col-12 col-md-4</div>
    </div>
    <div class="row">
        <div class="col-6 col-md-4">.col-6 .col-md-4</div>
        <div class="col-6 col-md-4">.col-6 .col-md-4</div>
        <div class="col-12 col-md-4">.col-12 .col-md-4</div>
    </div>
    <div class="row">
        <div class="col-6">.col-6</div>
        <div class="col-6">.col-6</div>
    </div>
</div>
`;
        editor.setValue(initialCode, 1); // 1 означает, что это начальное содержимое

        // Запишите начальный код в iframe
        document.getElementById('output').contentWindow.document.open();
        document.getElementById('output').contentWindow.document.write(initialCode);
        document.getElementById('output').contentWindow.document.close();

        editor.getSession().on('change', function(e) {
            document.getElementById('output').contentWindow.document.open();
            document.getElementById('output').contentWindow.document.write(editor.getValue());
            document.getElementById('output').contentWindow.document.close();
        });

        window.onresize = function(event) {
            document.getElementById('output').style.height = window.innerHeight + 'px';
        };
    </script>


@endsection
