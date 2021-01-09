@extends("layouts.app")

@section("page-title", "Homepage Laravel DC Comics")

@section("content")
    <main>
        <div class="container">

            <div class="main-title">
                <h1 class="uppercase">Current Series</h1>
            </div>

            <div class="cards-container">

                @foreach ($comics as $id => $comic)
                    <div class="card">
                        <a href="{{route("infos", $id)}}" class="comic-link">
                            <div class="poster-container">
                                <img src="{{ $comic["thumb"] }}" alt="">
                            </div>
                            <p> {{ $comic["series"] }} </p>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
