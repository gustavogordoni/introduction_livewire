<div class="max-w-2xl mx-auto p-4">
    <h1 class="text-3xl font-extrabold text-gray-800 dark:text-gray-100 mb-6">Atualizar Foto de Perfil</h1>

    <form wire:submit.prevent="storagePhoto"
        class="bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-lg shadow-sm p-4">
        <label for="photo" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Escolha uma nova
            imagem</label>
        <input type="file" accept="image/*" name="photo" id="photo" wire:model="photo" class="block w-full text-sm text-gray-500 
                   file:mr-4 file:py-2 file:px-4
                   file:rounded-full file:border-0
                   file:text-sm file:font-semibold
                   file:bg-blue-50 file:text-blue-700
                   hover:file:bg-blue-100 transition">

        @error('photo')
        <span class="text-red-500 text-sm mt-1 block">* {{ $message }}</span>
        @enderror

        @if ($photo)
        <div class="mt-4">
            <p class="text-sm text-gray-600 dark:text-gray-300 mb-2">Pré-visualização:</p>
            <img src="{{ $photo->temporaryUrl() }}" alt="Pré-visualização" class="rounded-full h-8 w-8">
        </div>
        @endif

        <button type="submit" class="mt-3 bg-blue-500 hover:bg-blue-700 text-white py-2 px-6 rounded-lg transition">
            Upload Foto
        </button>
    </form>
</div>