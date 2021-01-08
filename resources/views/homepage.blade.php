@extends("layouts.app")

@section("page-title", "Homepage Laravel DC Comics")

@section("content")
    <main>
        <div class="container">
            @foreach ($comics as $comic)
                <div class="card">
                    <a href="#" class="comic-link">
                        <div class="poster-container">
                            <img src="{{ $comic["thumb"] }}" alt="">
                        </div>
                        <p> {{ $comic["series"] }} </p>
                    </a>
                </div>
            @endforeach
        </div>
    </main>
@endsection
