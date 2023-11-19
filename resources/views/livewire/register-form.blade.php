<div class="mt-10 p-5 mx-auto sm:w=full sm:max-w-sm shadow border-teal-500 border-t-2">
    <div class="flex">
        <h2 class="text-center font-semibold text-2x text-gray-800 mb-5">Create New Account</h2>
    </div>
    @if(session('success'))
        <span class="text-green-500">{{ session('success') }}</span>
    @endif
    <form wire:submit="create" action="" class="">
        <label class="mt-3 block text-sm font-medium leading-6 text-gray-900">Name</label>
        <input wire:model="name" type="text" id="name" placeholder="name.."
            class="ring-1 ring-inset ring-gray-300 bg-gray-100 text-gray-900 text-sm block rounded w-full border border-gray-100 px-3 py-1 mt-2" >
        @error('name')
        <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror

        <label class="mt-3 block text-sm font-medium leading-6 text-gray-900">Email</label>
        <input wire:model="email" type="email" id="email" placeholder="email"
            class="ring-1 ring-inset ring-gray-300 bg-gray-100 text-gray-900 text-sm block rounded w-full border border-gray-100 px-3 py-1 mt-2" >
        @error('email')
        <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror

        <label class="mt-3 block text-sm font-medium leading-6 text-gray-900">Password</label>
        <input  wire:model="password" type="password" id="password" placeholder="password"
            class="ring-1 ring-inset ring-gray-300 bg-gray-100 text-gray-900 text-sm block rounded w-full border border-gray-100 px-3 py-1 mt-2" >
        @error('password')
        <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror

        <label class="mt-3 block text-sm font-medium leading-6 text-gray-900">Profile picture</label>
        <input wire:model="image" accept="image/png, image/jpeg" type="file" id="image"
            class="ring-1 ring-inset ring-gray-300 bg-gray-100 text-gray-900 text-sm block rounded w-full border border-gray-100 px-3 py-1 mt-2" >
        @error('image')
        <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror

        @if($image)
            <img class="rounded h-10 mt-5 block" src="{{ $image->temporaryUrl() }}" alt="">
        @endif

        <div wire:loading wire:target="create">
            <span class="text-green-500">Uploading ...</span>
        </div>

        <div wire:loading.delay.longest>
            <span class="text-green-500">Sending ...</span>
        </div>

        <button type="button" @click="$dispatch('user-created')" class="block rounded px-4 py-2 bg-teal-500 text-white mt-3 font-semibold hover:bg-teal-600">
            Reload List
        </button>

        <button wire:loading.class.remove="bg-blue-500" wire:loading.attr="disabled" type="submit"
            class="block rounded px-4 py-2 bg-teal-500 text-white mt-3 font-semibold hover:bg-teal-600">Create +</button>
    </form>
</div>
