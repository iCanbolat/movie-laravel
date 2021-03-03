
<div class="relative mt-3 md:mt-0" x-data="{ isOpen: true }" @click.away=" isOpen = false " >
    
    <input @focus="isOpen = true" @keydown.escape.window="isOpen = false" @keydown="isOpen = true"
     wire:model="search" type="text" class="bg-gray-800 rounded-full focus:outline-none focus:shadow-outline w-64 px-4 pl-8 py-1 " placeholder="Search">
    <div class="absolute top-0">
    <svg class="fill-current w-4 text-gray-500 mt-2 ml-2" viewBox="0 0 24 24"><path class="heroicon-ui" d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z"/></svg>
    </div>

    
    @if (strlen($search) > 2)
    <div class="z-50 absolute bg-gray-800 rounded text-sm w-64 mt-2" 
    x-show=" isOpen "  
        @if($searchResults->count() > 0)
        @foreach($searchResults as $result)
            <ul>
                <li class="border-b border-gray-700">
                    <a href="{{ route('movies.show', $result['id']) }}" class="block hover:bg-gray-700 px-3 py-2 flex items-center hover:no-underline hover:text-white">
                    @if ($result['poster_path'])
                     <img class="w-12" src="{{ 'https://image.tmdb.org/t/p/w92/'.$result['poster_path'] }}" alt="">   
                     @else
                     <img src="https://via.placeholder.com/50x75" alt="poster" class="w-8">
                    @endif
                    <span class="ml-4">{{ $result['title'] }}</span>
                 </a>
                </li>
            </ul>
        @endforeach
        @else
          <div class="px-3 py-2">No Results for "{{ $search }}" </div>
        @endif
    </div>
    @endif


</div>