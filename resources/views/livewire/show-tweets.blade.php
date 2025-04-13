<div>
    <h1 class="text-3xl font-bold mb-3">Show Tweets</h1>

    <p>Variável: {{ $this->content }}</p>

    <form wire:submit.prevent="create" class="border border-gray-400 rounded p-2 my-4">
        <input type="text" name="content" id="content" wire:model="content" class="border border-gray-400 rounded">
        @error('content')
            <span class="text-red-500">* {{ $message }}</span>
        @enderror

        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">CriarTweet</button>
    </form>


    <p class="text-2xl">Tweets:</p>
    @foreach ($tweets as $tweet)
        <p>{{ $tweet->user->name }} - {{ $tweet->content }}</p>
        
        @if ($tweet->likes->count())
            <a href="">Descurtir</a>
        @else
            <a href="">Curtir</a>            
        @endif
        
    @endforeach

    <hr>

    {{ $tweets->links() }}
</div>