<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="flex flex-col">
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
        <section class="relative flex flex-wrap">
            <div
                class="flex items-center w-full px-4 py-12 lg:w-1/2 sm:px-6 lg:px-8 sm:py-16 lg:py-24 lg:h-screen lg:items-center">
                <div class="max-w-lg mx-auto text-center lg:text-left lg:pr-12">
                    <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">We have Greate Customer Service.</h2>

                    <p class="mt-4 text-gray-500">
                        “To earn the respect (and eventually love) of your customers, you first have to respect those
                        customers. That is why Golden Rule behavior is embraced by most of the winning companies.” –
                        Colleen
                        Barrett, Southwest Airlines President Emerita
                    </p>

                    <a class="inline-block px-5 py-3 mt-8 text-sm font-medium text-white bg-blue-500 rounded-lg"
                        href="{{ route('about-us') }}">
                        Find out more
                    </a>
                </div>
            </div>

            <div class="relative w-full h-64 sm:h-96 lg:w-1/2 lg:h-auto">
                <img class="absolute inset-0 object-cover w-full h-full"
                    src="https://www.hyperui.dev/code/photos/man-1.jpeg" alt="" />
            </div>
        </section>

        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap w-full mb-20">
                    <div class="w-full mb-6 lg:w-1/2 lg:mb-0">
                        <h1 class="mb-2 text-2xl font-medium text-gray-900 sm:text-3xl title-font">Pitchfork Kickstarter
                            Taxidermy</h1>
                        <div class="w-20 h-1 bg-indigo-500 rounded"></div>
                    </div>
                    <p class="w-full leading-relaxed text-gray-500 lg:w-1/2">Whatever cardigan tote bag tumblr hexagon
                        brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't
                        heard
                        of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
                </div>
                <div class="flex flex-wrap -m-4">
                    @foreach ($loans as $loan)
                        <div
                            class="w-1/2 p-4 transition duration-300 transform md:w-1/4 hover:translate-y-2 hover:shadow-xl">
                            <a href="javascript:void(0)" wire:click='showDetails({{ $loan->id }})'>
                                <div class="p-6 bg-white rounded-lg">
                                    <img class="object-cover object-center w-full h-40 mb-6 rounded"
                                        src="{{ url('/storage/loan-image/' . $loan->image) }}" alt="content">
                                    <h3 class="text-xs font-medium tracking-widest text-indigo-500 title-font">
                                        <div class="flex space-x-4">
                                            <span>
                                                <svg height="13px" width="13px" version="1.1" id="Layer_1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                                    xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256
   c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128
   c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span>{{ $loan->created_at->DiffForHumans() }}</span>
                                        </div>
                                    </h3>
                                    <h2 class="mb-4 text-lg font-medium text-gray-900 title-font">{{ $loan->name }}
                                    </h2>
                                    <p class="text-base leading-relaxed truncate">{{ $loan->description }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    @if ($showMode)
                        <div x-data="{ showLoan: false }" x-on:show-loans-open.window="showLoan = true"
                            x-on:show-loans-close.window="showLoan = false">
                            <div
                                class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-75 md:px-0">

                                    <div class="flex flex-col w-5/6 h-full p-4 m-auto overflow-y-scroll text-base bg-white border border-t-8 border-b-8 border-blue-400 rounded-lg shadow md:w-1/2 lg:w-1/3">
                                        <div class="flex flex-col p-4">
                                            <h3 class="text-4xl">{{ $showMode->name }}</h3>
                                            <p class="my-4 text-base break-words">{{ $showMode->description }}</p>
                                            <p class="my-4 font-sans text-base break-words">{{ $showMode->requirements }}</p>
                                            <p class="my-4 font-sans text-base break-words">Max Year: {{ $showMode->max_year }}</p>
                                            <p class="my-4 font-sans text-base break-words">Interest Rate: {{ $showMode->interest_rate }}</p>
                                            <p class="my-4 font-sans text-base break-words">Loan Type: {{ $showMode->loan_type }}</p>
                                            <div class="flex flex-row space-x-4">
                                                <div class="flex flex-col px-2 transition duration-300 transform bg-blue-400 rounded-md hover:translate-y-2 hover:shadow-xl">
                                                    <p class="my-4 text-sm font-black text-black hover:text-white">Min Year: {{ $showMode->min_amount }}</p>
                                                </div>
                                                <div class="flex flex-col px-2 transition duration-300 transform bg-blue-400 rounded-md hover:translate-y-2 hover:shadow-xl">

                                                    <p class="my-4 text-sm font-black text-black hover:text-white">Max Year: {{ $showMode->max_amount }}</p>
                                                </div>
                                            </div>
                                            <form wire:submit.prevent='loanSubscription'>
                                                <div class="mt-4">Your Email
                                            </div>
                                            <x-input type="email" wire:model="subscribe.email" placeholder="your email is required" :errors="$errors->first('subscribe.email')" />
                                            <div class="flex flex-row space-x-4">
                                                <div class="flex flex-col">
                                                    <button
                                                class="px-6 py-2 m-auto my-4 text-lg text-gray-400 bg-gray-800 border-0 rounded hover:text-white hover:bg-green-400 shadow-px-4"
                                                >Subscribe</button>
                                            </div>
                                            <div class="flex flex-col">
                                                    <button wire:click='cancelSubscription'
                                                        class="px-6 py-2 m-auto my-4 text-lg text-gray-400 bg-red-800 border-0 rounded hover:text-white hover:bg-green-400 shadow-px-4"
                                                        >Cancle</button>

                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                    @endif
                </div>
            </div>
        </section>
    </div>
</div>
