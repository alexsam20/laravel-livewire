<div>
    <h2>{{ $username }}</h2>

    <h1>{{ $title }}</h1>

    {{ count($users) }}

    <hr />

    <button wire:click="createNewUser" >
        Create new user
    </button>
</div>
