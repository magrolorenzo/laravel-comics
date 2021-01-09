@extends("layouts.app")

@section("page-title", "Homepage Laravel DC Comics")

@section("content")
    <section id="comic-details">

        <div class="separator">
            <div class="container">

                <div class="comic-poster-container">
                    <div class="poster-wrapper">
                        <span class="type uppercase">Type</span>
                        <img src="" alt="">
                        <span class="view-gallery uppercase">View Gallery</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="details-wrapper">
            <div class="container">

                <div class="details">
                    <h1 class="uppercase">{{$comic["title"]}}</h1>
                    <div class="price">

                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
@endsection
