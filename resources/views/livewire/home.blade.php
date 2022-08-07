<div class="container mx-auto m-10">
    <div class="flex flex-col">
        <h1 class="text-3xl font-bold text-center justify-center">Search User</h1>
        <form wire:submit.prevent="search">
            <input type="text" id="username" wire:model="username"
                class="mt-5 mb-5 my-5 mx-5 bg-slate-200 text-sm rounded-lg block w-full p-3" placeholder="Search User..."
                required>

            <button
                class="text-indigo-50 block text-lg mt-5 mb-5 my-5 mx-5 w-full p-2.5 bg-purple-700 rounded-lg">Search</button>
        </form>

    </div>

    @if ($profile)
        <div class="w-full">
            <div class='flex space-x-2 w-full bg-white shadow-md rounded-lg overflow-hidden mx-auto'>
                <div
                    class="card  min-w-sm border border-gray-700 bg-gray-700 text-gray-50   transition-shadow shadow-xl hover:shadow-xl min-w-max">
                    <!---->
                    <div class="w-full card__media"><img
                            src="https://image.freepik.com/free-vector/abstract-binary-code-techno-background_1048-12836.jpg"
                            class="w-full"></div>

                    <div class="flex items-center p-4">
                        <div class="relative flex flex-col items-center w-full">
                            <div
                                class="h-24 w-24 md rounded-full relative avatar flex items-end justify-end text-purple-400 min-w-max absolute -top-16 flex bg-purple-200 text-purple-100 row-start-1 row-end-3 text-purple-650 ring-1 ring-white">
                                <img class="h-24 w-24 md rounded-full relative" src="{{ $profile['avatar_url'] }}"
                                    alt="">
                                <div class="absolute"></div>
                            </div>
                            <div class="flex flex-col space-y-1 justify-center items-center -mt-12 w-full">
                                <span
                                    class="text-md whitespace-nowrap text-gray-50 font-semibold">{{ $profile['login'] }}</span>
                                <p class="text-sm text-gray-200">
                                    {{ $profile['bio'] }}
                                </p>
                                <div class="py-2 flex space-x-2">
                                    <button
                                        class="flex justify-center  max-h-max whitespace-nowrap focus:outline-none  focus:ring  focus:border-blue-300 rounded max-w-max border bg-transparent border-purple-400 text-purple-400 hover:border-purple-800 hover:border-purple-500 px-4 py-1 flex items-center hover:shadow-lg"><span
                                            class="mr-2"></span>FOLLOW<span class="ml-2"></span></button><button
                                        class="flex justify-center  max-h-max whitespace-nowrap focus:outline-none  focus:ring  focus:border-blue-300 rounded max-w-max text-gray-100 bg-green-500 hover:bg-green-600 px-4 py-1 flex items-center hover:shadow-lg"><span
                                            class="mr-2"><svg height="20" width="20" viewBox="0 0 32 32"
                                                class="fill-current text-red-100">
                                                <path
                                                    d="M22.5,4c-2,0-3.9,0.8-5.3,2.2L16,7.4l-1.1-1.1C12,3.3,7.2,3.3,4.3,6.2c0,0-0.1,0.1-0.1,0.1c-3,3-3,7.8,0,10.8L16,29	l11.8-11.9c3-3,3-7.8,0-10.8C26.4,4.8,24.5,4,22.5,4z">
                                                </path>
                                            </svg></span>SPONSOR <span class="ml-2"></span></button>
                                </div>
                                <div
                                    class="py-4 flex justify-center items-center w-full divide-x divide-gray-400 divide-solid">
                                    <span class="text-center px-2">
                                        <span class="font-bold text-gray-50">{{ $profile['followers'] }}</span>
                                        <span class="text-gray-100"> followers</span></span>
                                    <span class="text-center px-2"><span
                                            class="font-bold text-gray-50">{{ $profile['following'] }}</span>
                                        <span class="text-gray-100">following</span></span>
                                    <span class="text-center px-2"><span
                                            class="font-bold text-gray-50">{{ $profile['public_repos'] }}</span>
                                        <span class="text-gray-100">repos</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---->
                </div>
            </div>
        </div>
    @endif
</div>
