<div class="max-w-2xl mx-auto p-4">
    <h1 class="text-3xl font-extrabold text-gray-800 dark:text-gray-100 mb-6">Tweets</h1>

    <form wire:submit.prevent="create"
        class="bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-lg shadow-sm p-4 mb-6">
        <label for="content" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Novo Tweet</label>
        <input type="text" name="content" id="content" wire:model="content" placeholder="O que está acontecendo?"
            class="w-full border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
        @error('content')
        <span class="text-red-500 text-sm mt-1 block">* {{ $message }}</span>
        @enderror

        <button type="submit" class="mt-3 bg-blue-500 hover:bg-blue-700 text-white py-2 px-6 rounded-lg transition">
            Criar Tweet
        </button>
    </form>

    @foreach ($tweets as $tweet)
    <div
        class="flex items-start gap-4 bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-600 rounded-lg p-4 mb-4 shadow-sm">
        <div class="flex-shrink-0">
            @if ($tweet->user->profile_photo_path)
            <img src="{{ url("storage/{$tweet->user->profile_photo_path}") }}" alt="{{ $tweet->user->name }}"
            class="rounded-full h-12 w-12 object-cover ring-2 ring-white shadow">
            @else
            <img src="{{ url('imgs/no-image.jpg') }}" alt="{{ $tweet->user->name }}"
                class="rounded-full h-12 w-12 object-cover ring-2 ring-white shadow">
            @endif
        </div>

        <div class="flex-1">
            <div class="flex justify-between items-center mb-1">
                <span class="font-semibold text-gray-800 dark:text-white">{{ $tweet->user->name }}</span>
            </div>

            <p class="text-gray-700 dark:text-gray-200 mb-2">{{ $tweet->content }}</p>

            @if ($tweet->likes->count())
            <a href="#" wire:click.prevent="unlike({{ $tweet->id }})"
                class="text-red-600 font-semibold hover:underline">Descurtir</a>
            @else
            <a href="#" wire:click.prevent="like({{ $tweet->id }})"
                class="text-green-600 font-semibold hover:underline">Curtir</a>
            @endif
        </div>
    </div>
    @endforeach

    <div class="mt-6">
        {{ $tweets->links() }}
    </div>
</div>