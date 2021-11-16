<div>
    {{-- The whole world belongs to you. --}}
    <!-- Error & Success -->
    <div class="pt-12">
        @if(session()->has('success'))
        <x-success success="{{ session('success') }}" />
    @endif
    @if(session()->has('error'))
        <x-error error="{{ session('error') }}" />
    @endif
    </div>
    <!-- End Error & Success -->
    <div class="flex flex-col">
        <div class="flex items-center justify-center min-h-screen">
            <div class="flex flex-col justify-around h-full">
                <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
                    <div class="max-w-lg mx-auto">
                        <h1 class="text-2xl font-bold text-center text-indigo-600 sm:text-3xl">Welcome User</h1>


                        <form wire:submit.prevent='loginForm' class="p-8 mt-6 mb-0 space-y-4 rounded-lg shadow-2xl">
                            <p class="text-lg font-medium">Sign in to your account</p>

                            <div>
                                <label for="email" class="text-sm font-medium">Email</label>

                                <div class="relative mt-1">
                                    <x-input type="email" wire:model="user.email" :errors="$errors->first('user.email')"
                                        class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"
                                        placeholder="Enter email" />

                                    <span class="absolute inset-y-0 inline-flex items-center right-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                        </svg>
                                    </span>
                                </div>
                            </div>

                            <div>
                                <label for="password" class="text-sm font-medium">Password</label>

                                <div class="relative mt-1">
                                    <x-input type="password" wire:model="password" :errors="$errors->first('password')"
                                        class="border-gray-200 rounded-lg shadow-sm"
                                        placeholder="Enter password" />

                                    <span class="absolute inset-y-0 inline-flex items-center right-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </span>
                                </div>
                            </div>

                            <button
                                class="block w-full px-5 py-3 text-sm font-medium text-white bg-indigo-600 rounded-lg">
                                <i wire:loading.delay.long='loginForm' class="duration-300 animate-spin">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M19.4,11c-0.8,0-1.5-0.5-1.9-1.3C16.6,7.5,14.5,6,12,6S7.4,7.5,6.4,9.8c-0.4,1-1.6,1.5-2.6,1.1c-1-0.4-1.5-1.6-1.1-2.6	C4.3,4.5,7.9,2,12,2s7.7,2.5,9.3,6.2c0.4,1-0.1,2.2-1.1,2.6C19.9,11,19.7,11,19.4,11z">
                                        </path>
                                        <path
                                            d="M4.6,17c-1.1,0-2-0.9-2-2c0-0.9,0.7-1.8,1.6-2c1.2-0.3,2.4,0.7,2.4,2C6.6,16.1,5.7,17,4.6,17z"
                                            opacity=".35"></path>
                                        <path
                                            d="M13.2,20.2c-0.4-1,0.1-2.2,1.1-2.6l0,0l0,0l0,0c1-0.4,2.2,0.1,2.6,1.1l0,0c0.4,1-0.1,2.2-1.1,2.6	c-0.3,0.1-0.5,0.2-0.8,0.2C14.3,21.4,13.6,20.9,13.2,20.2z"
                                            opacity=".35"></path>
                                        <path
                                            d="M8.1,21.2c-1-0.4-1.5-1.6-1.1-2.6l0,0c0.4-1,1.6-1.5,2.6-1.1l0,0l0,0l0,0c1,0.4,1.5,1.6,1.1,2.6l0,0	C10.3,21.2,9.1,21.7,8.1,21.2z"
                                            opacity=".35"></path>
                                    </svg>
                                </i>
                                Sign in
                            </button>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
