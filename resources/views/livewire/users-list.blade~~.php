<div class="p-5 mx-auto max-w-md">
    <h2 class="text-2xl mb-3">Users List</h2>
{{--    <input wire:model.live.blur='search' type="text" placeholder="Search..."--}}
{{--    <input wire:model.live.debounce.300ms='search' type="text" placeholder="Search..."--}}
    <input wire:model.live.throttle.500ms='search' type="text" placeholder="Search..."
        class="ring-1 ring-inset ring-gray-300 bg-gray-100 text-gray-900 text-sm block rounded w-full border border-gray-100 px-3 py-1 mt-2">
    <button wire:click="update" type="button" class="block rounded px-4 py-2 bg-teal-500 text-white mt-3 font-semibold hover:bg-teal-600">
        Search</button>
    <div role="status"
         class="max-w-md mt-5 p-4 space-y-4 border border-gray-200 divide-y divide-gray-200 rounded shadow dark:divide-gray-700 md:p-6 dark:border-gray-700"
        @foreach($users as $user)
            <div wire:key="{{ $user->id }}" class="flex items-center justify-between pt-4">
                <div class="">
                    <div class="text-gray-900 w-30">{{ $user->name }}</div>
                    <div class="w-32 h-3 text-gray-600 text-sm">{{ $user->email }}</div>
                </div>
                <button class="text-white bg-teal-500 px-3 py-1 rounded-full">View</button>
            </div>
        @endforeach
    </div>
</div>




