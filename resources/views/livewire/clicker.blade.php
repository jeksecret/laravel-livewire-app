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
    <div>
        <form wire:submit="createNewUser" action="">
            <div>
                <input wire:model="name" type="text" placeholder="name">
                @error('name')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div>
                <input wire:model="email" type="email" placeholder="email">
                @error('email')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div>
                <input wire:model="password" type="password" placeholder="password">
                @error('password')
                    <span>{{ $message }}</span>
                @enderror
            </div>
    
            {{-- <button wire:click.prevent="createNewUser">Create</button> --}}
            <button>Create</button>
        </form>
    </div>
    <div>
        <h2>Users</h2>
        @foreach ($users as $user)
            <p>{{ $user->name }}</p>
        @endforeach
    </div>
</div>
