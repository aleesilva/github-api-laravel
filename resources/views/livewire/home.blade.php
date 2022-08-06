<div class="container mx-auto m-10">
    <div class="flex flex-col">
        <h1 class="text-3xl font-bold text-center justify-center">Search User</h1>
        <form wire:submit.prevent="search">
            <input type="text" id="username" wire:model="username"
                class="mt-5 mb-5 my-5 mx-5 bg-slate-200 text-sm rounded-lg block w-full p-3" placeholder="Search User..."
                required>

            <button
                class="text-white block text-lg mt-5 mb-5 my-5 mx-5 w-full p-2.5 bg-blue-400 rounded-lg">Search</button>
        </form>

    </div>
</div>

@if ($profile)
    {{ dd($profile) }}
@endif
