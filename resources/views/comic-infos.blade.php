@extends("layouts.app")

@section("page-title", "Homepage Laravel DC Comics")

@section("content")
    <section id="comic-details">

        <div class="separator">
            <div class="container">

                <div class="comic-poster-container">
                    <div class="poster-wrapper">
                        <span class="type uppercase">{{$comic["type"]}}</span>
                        <img src="{{$comic["thumb"]}}" alt="">
                        <span class="view-gallery uppercase">View Gallery</span>
                    </div>
                </div>
            </div>
        </div>

        <div id="details-wrapper">
            <div class="container">

                <div class="details">
                    <h1 class="uppercase">{{$comic["title"]}}</h1>
                    <div class="price">
                        <span>U.S. Price: {{$comic["price"]}}</span>
                        <span>Available</span>
                        <span>Check Availability</span>

                    </div>
                    <p>
                        {{$comic["description"]}}
                    </p>

                </div>
                <div class="advert-container">
                    <h2 class="uppercase">Advertisement</h2>
                    <div class="advert-img-container">
                        <img src="{{asset('images/adv.jpg')}}" alt="apply-now">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="talent-and-specs">

        <div class="container">
            <div class="infos-wrapper">

                <div class="talent">
                    <h2>
                        Talent
                    </h2>

                    <div class="art">

                        <div class="label">
                            <span>
                                Art By:
                            </span>
                        </div>

                        <div class="list">
                            @foreach ($comic["artists"] as $artist)
                                <a href="#">{{$artist}}</a><span>{{!$loop->last ? ',' : ''}}</span>
                            @endforeach
                        </div>

                    </div>

                    <div class="written">
                        <div class="label">
                            <span>
                                Written By:
                            </span>
                        </div>
                        <div class="list">
                            @foreach ($comic["writers"] as $writer)
                                <a href="#">{{$writer}}</a><span>{{!$loop->last ? ',' : ''}}</span>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Specs div --}}
                <div class="specs">
                    <h2>Specs</h2>

                    {{-- Series --}}
                    <div class="series-info">
                        <div class="label">
                            <span>
                                Series:
                            </span>
                        </div>
                        <div class="link">
                            <a href="#">{{$comic["series"]}}</a><span>
                        </div>
                    </div>

                    {{-- Price --}}
                    <div class="price-info">
                        <div class="label">
                            <span>
                                U.S. Price:
                            </span>
                        </div>
                        <div class="link">
                            <a href="#">{{$comic["price"]}}</a><span>
                        </div>
                    </div>

                    {{-- On sale date --}}
                    <div class="sale-info">
                        <div class="label">
                            <span>
                                On Sale Date:
                            </span>
                        </div>
                        <div class="link">
                            <a href="#">{{$comic["sale_date"]}}</a><span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
