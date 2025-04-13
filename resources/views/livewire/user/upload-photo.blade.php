<div>
    <h1 class="text-3xl">Atualizar Foto de perfil</h1>

    <form action="" method="post" wire:submit.prevent="storagePhoto" class="border border-gray-400 rounded p-2 my-4">
        <input type="file" accept="image/*" name="photo" id="photo" wire:model="photo" class="border border-gray-400 rounded">
        @error('photo')
            <span class="text-red-500">* {{ $message }}</span>
        @enderror
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Upload foto</button>
    </form>
</div>
