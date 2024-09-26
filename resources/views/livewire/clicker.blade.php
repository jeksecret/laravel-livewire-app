<div>
    {{-- The Master doesn't talk, he acts. --}}
    <h1>Hello World</h1>
    <h2>{{ $title }}</h2>
    <div>
        {{ count($users) }}
        <button wire:click="createNewUser">
            Create New User
        </button>
    </div>
</div>
