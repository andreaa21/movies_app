@extends('layout.default')


@section('content')
    <div class="bg-black text-white min-h-screen">

        <div class="jumbo min-h-screen"
            style="background-image: url({{ 'http://image.tmdb.org/t/p/original' . $popular_movies['results'][0]['backdrop_path'] }})">

            <p class="text-8xl flex align-items-center">{{ $popular_movies['results'][0]['title'] }}</p>
        </div>


        <div class="container mx-auto mt-10">
            <h2 class="my-5 text-orange-500 uppercase">Popular Movies</h2>
            <div class="grid grid-cols-4 gap-8">
                @foreach ($popular_movies['results'] as $popular_movie)
                    <div class="border bg-black text-white rounded-xl overflow-hidden">
                        <img src="{{ 'http://image.tmdb.org/t/p/original' . $popular_movie['poster_path'] }}"
                            alt="{{ $popular_movie['title'] }}">
                        <p class="mb-4 mt-5 px-4 text-center">{{ $popular_movie['title'] }}</p>
                        <p class="text-center">{{ $popular_movie['release_date'] }}</p>

                        <div class="flex justify-center mt-6">
                            @foreach ($popular_movie['genre_ids'] as $genre)
                                <div class="bg-white text-black rounded-full mx-1 px-4 py-2 my-3 text-xs">
                                    {{ $genres->get($genre) }}
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
