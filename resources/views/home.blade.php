@extends('mian.navbar')

@section('content')


    <div class="container">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="text-center mt-3" style="margin-bottom: 150%">
                <h1>Selamat Datang</h1>
            </div>

                    <!-- FOOTER -->
        <footer class="container">
            <p class="float-end btn btn-sm btn-primary mt-3 ">Back to top<a href="myCarousel"></a></p>
            <p>&copy; &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
    </div>


    </div>

@endsection
