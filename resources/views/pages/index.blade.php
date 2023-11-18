@extends('layout.default')


@section('content')
    <div class="bg-black text-white min-h-screen">
        <div class="container mx-auto pt-10">
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


        <div class="container mx-auto pt-10">
            <h2 class="my-5 text-orange-500 uppercase">Now Playing</h2>
            <div class="grid grid-cols-4 gap-8">
                @foreach ($now_playing_movies['results'] as $now_playing_movie)
                    <div class="border bg-black text-white rounded-xl overflow-hidden">
                        <img src="{{ 'http://image.tmdb.org/t/p/original' . $now_playing_movie['poster_path'] }}"
                            alt="{{ $now_playing_movie['title'] }}">
                        <p class="mb-4 mt-5 px-4 text-center">{{ $now_playing_movie['title'] }}</p>
                        <p class="text-center">{{ $now_playing_movie['release_date'] }}</p>

                        <div class="flex justify-center mt-6">
                            @foreach ($now_playing_movie['genre_ids'] as $genre)
                                <div class="bg-white text-black rounded-full mx-1 px-4 py-2 my-3 text-xs">
                                    {{ $genres->get($genre) }}
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="container mx-auto pt-10">
            <h2 class="my-5 text-orange-500 uppercase">Upcoming Movies</h2>
            <div class="grid grid-cols-4 gap-8">
                @foreach ($upcoming_movies['results'] as $upcoming_movie)
                    <div class="border bg-black text-white rounded-xl overflow-hidden">
                        <img src="{{ 'http://image.tmdb.org/t/p/original' . $upcoming_movie['poster_path'] }}"
                            alt="{{ $upcoming_movie['title'] }}">
                        <p class="mb-4 mt-5 px-4 text-center">{{ $upcoming_movie['title'] }}</p>
                        <p class="text-center">{{ $upcoming_movie['release_date'] }}</p>

                        <div class="flex justify-center mt-6">
                            @foreach ($upcoming_movie['genre_ids'] as $genre)
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
