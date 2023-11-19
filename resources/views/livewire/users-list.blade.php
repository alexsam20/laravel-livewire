<div class="mt-10 p-5 w-full mx-auto sm:w=full shadow border-blue-500 border-t-2 m-2">
    <div class="flex">
        <h2 class="text-center font-semibold text-2x text-gray-800 mb-5">User List</h2>
    </div>
    <table class="border-collapse border border-slate-500 w-full text-gray-800 mb-5">
        <thead class="bg-gray-100 text-left">
        <tr>
            <th class="border border-slate-300 font-semibold p-2 text-sm font-medium">NAME</th>
            <th class="border border-slate-300 font-semibold p-2 text-sm font-medium">EMAIL</th>
            <th class="border border-slate-300 font-semibold p-2 text-sm font-medium">JOINED</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td class="border border-slate-300 p-1 text-sm font-medium">{{ $user->name }}</td>
                <td class="border border-slate-300 p-1 text-sm font-medium">{{ $user->email }}</td>
                <td class="border border-slate-300 p-1 text-sm font-medium">{{ $user->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $users->links('vendor.livewire.tailwind') }}
</div>
