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
    <div class="flex">
        <div class="w-2/8">
            @if ($tweet->user->profile_photo_path != null)
            {{-- <img src="{{ url("storage/{$tweet->user->profile_photo_path}") }}" alt="{{ $tweet->user->name }}"
            width="50"
            height="50" class="inline-block h-12 w-12 rounded-full ring-2 ring-white"> --}}
            <img src="{{ url("storage/{$tweet->user->profile_photo_path}") }}" alt="{{ $tweet->user->name }}"
            width="50"
            height="50" class="rounded-full h-8 w-8">
            @else
            <img src="{{ url('imgs/no-image.jpg') }}" alt="{{ $tweet->user->name }}" width="50" height="50"
                class="rounded-full h-8 w-8">
            {{-- <img src="{{ url('imgs/no-image.jpg') }}" alt="{{ $tweet->user->name }}" width="50" height="50"
                class="inline-block h-12 w-12 rounded-full ring-2 ring-white"> --}}
            @endif

            {{ $tweet->user->name }}
        </div>
        <div class="w-6/8">
            {{ $tweet->content }}

            @if ($tweet->likes->count())
            <a href="#" wire:click.prevent="unlike({{ $tweet->id }})" class="text-red-500 font-bold">Descurtir</a>
            @else
            <a href="#" wire:click.prevent="like({{ $tweet->id }})" class="text-green-500 font-bold">Curtir</a>
            @endif
        </div>

        <br>
    </div>

    @endforeach

    <hr>

    {{ $tweets->links() }}
</div>