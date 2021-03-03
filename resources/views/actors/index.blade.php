@extends('layouts.main')

@section('content')

    <div class="container mx-auto px-4 py-16">
        <div class="popular">
            <h2 class="uppercase text-orange-500 text-lg ">popular actors</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach($popularActors as $actor)
                <div class="actor mt-8">
                    <a href="{{ route ('actors.show', $actor['id']) }}"><img src="{{ $actor['profile_path'] }}" alt=""></a>
                
                <div class="mt-2">
                    <a href="{{ route ('actors.show', $actor['id']) }}" class="text-lg hover:opacity-75 transition ease-in-out duration-150 text-decoration-none">{{ $actor['name'] }}</a> 
                    <div class="text-sm truncate text-gray-40">{{ $actor['known_for'] }}</div>
                </div>
            </div>
            @endforeach    
            </div>
            
        </div>
    </div>
@endsection

@section('scripts')
<script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>

<script>

    var elem = document.querySelector('.grid');
    var infScroll = new InfiniteScroll( elem, {
    // options
    path: '/actors/page/@{{#}}',
    append: '.actor',
    //history: false,
    });

</script>


@endsection