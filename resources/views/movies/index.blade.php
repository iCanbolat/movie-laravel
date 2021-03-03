@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="text-orange-500 ">POPULAR MOVIES</h2>
             <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                 @foreach($popularMovies as $movie)
                    
                    <x-movie-card :movie="$movie" :genres="$genres" /> 
                 @endforeach
         </div>
    </div>
</div>
                
             </div>       
        </div>
    </div>
    <!--- end -->

    <div class="container mx-auto now-playing-movies py-24">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg">now playing</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach($nowPlaying as $movie)
            <x-movie-card :movie="$movie" :genres="$genres" />
            @endforeach
        </div>
    </div>



@endsection