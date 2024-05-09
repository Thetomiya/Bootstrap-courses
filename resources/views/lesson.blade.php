@extends('layout.main')

@section('content')

    <?=$lesson->content?>



    <div class="fullscreen-image">
        <img src="" alt="Fullscreen Image">
    </div>

    <script>
        const images = document.querySelectorAll('.lesson-img');
        const fullscreenImage = document.querySelector('.fullscreen-image');
        const fullscreenImageImg = fullscreenImage.querySelector('img');

        images.forEach(image => {
            image.addEventListener('click', function() {
                fullscreenImageImg.src = this.src;
                fullscreenImage.classList.add('show');
            });
        });

        fullscreenImage.addEventListener('click', function() {
            fullscreenImage.classList.remove('show');
        });
    </script>
@endsection
