@extends("layouts.app")

@section("page-title", "Homepage Laravel DC Comics")

@section("content")
    <main>
        <div class="container">
            @foreach ($comics as $comic)
                <div class="card">
                    <div class="poster-container">
                        <img src="{{ $comic["thumb"] }}" alt="">
                    </div>
                    <p> {{ $comic["title"] }} </p>
                </div>
            @endforeach
        </div>
    </main>
@endsection
