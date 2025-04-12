<div>
    <h1 class="text-3xl font-bold mb-3">Show Tweets</h1>

    <p>Variável: {{ $this->message }}</p>

    <form wire:submit.prevent="create" class="border border-gray-400 rounded p-2 my-4">
        <input type="text" name="message" id="message" wire:model="message" class="border border-gray-400 rounded">
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">CriarTweet</button>
    </form>


    <p class="text-2xl">Tweets:</p>
    @foreach ($tweets as $tweet)
    <p>{{ $tweet->user->name }} - {{ $tweet->content }}</p>
    @endforeach
</div>