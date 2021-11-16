<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <section class="pt-10">
        <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-x-16 gap-y-8 lg:grid-cols-5">
                <div class="lg:py-12 lg:col-span-2">
                    <p class="max-w-xl text-lg">
                        “This planet has - or rather had - a problem, which was this: most of the people living on it
                        were unhappy for pretty much of the time. Many solutions were suggested for this problem, but
                        most of these were largely concerned with the movement of small green pieces of paper, which was
                        odd because on the whole it wasn't the small green pieces of paper that were unhappy.”
                        ― Douglas Adams
                    </p>

                    <div class="mt-8">
                        <a href="https://www.goodreads.com/work/quotes/3078186-the-hitchhiker-s-guide-to-the-galaxy"
                            class="text-2xl font-bold text-pink-600"> The Hitchhiker's Guide to the Galaxy</a>

                    </div>
                </div>

                <div class="p-8 rounded-lg shadow-lg lg:p-12 lg:col-span-3">
                    <form wire:submit.prevent='submitLoan' class="space-y-4">
                        <div>
                            <label class="sr-only" for="name">Name</label>
                            <x-input wire:model='loan.name' placeholder="Loan Name" type="text"
                                :errors="$errors->first('loan.name')" id="name" />
                        </div>
                        <div>
                            <label for="loan.loan_type">Loan Type</label>
                            <x-select wire:model='loan.loan_type' :errors="$errors->first('loan.loan_type')">
                                <x-option selected title="-- Choose --" />
                                <x-option value="auto-loan" title="Auto Loan" />
                                <x-option value="payday-loan" title="PayDay Loan" />
                                <x-option value="business-loan" title="Business Loan" />
                                <x-option value="mortgage" title="Mortgage" />
                            </x-select>
                        </div>
                        <div>
                            <label class="sr-only" for="message">Description</label>
                            <textarea class="w-full p-3 text-sm rounded-lg form-textarea" wire:model='loan.description'
                                placeholder="Description" rows="8" id="message"></textarea>
                            @error('loan.description')
                                <span class="m-1 font-thin text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="loan.requirements">Requirements</label>
                            <textarea wire:model='loan.requirements' class="w-full p-3 text-sm border-gray-400 rounded-lg form-textarea"
                                placeholder="Requirements" rows="8" ></textarea>
                            @error('loan.requirements')
                                <span class="m-1 font-thin text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <input type="file" accept="image/*" class="w-full mb-2 form-input" wire:model='image' id="customFile2"
                                x-on:change="files = Object.values($event.target.files)" />
                            <span
                                x-text="files ? files.map(file => file.name).join(', ') : 'Choose Your Image To Represent Loan Name...'"></span>
                            </label>
                            @error('image')
                                <span class="m-1 font-thin text-red-600">{{ $message }}</span>
                            @enderror
                            <button type="reset" @click="files = null"
                                class="px-3 py-1 text-gray-800 bg-gray-300 rounded">Reset</button>
                        </div>

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label for="loan.max_year">Year</label>
                                <x-input wire:model='loan.max_year' placeholder="Max Year"
                                    :errors="$errors->first('loan.max_year')" type="number" />
                            </div>
                            <div>
                                <label for="loan.interest_rate">(%)</label>
                                <x-input wire:model='loan.interest_rate' placeholder="Interest Rate"
                                    :errors="$errors->first('loan.interest_rate')" type="number" />
                            </div>

                        </div>
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label for="loan.min_amount">Min Amount</label>
                                <x-input wire:model='loan.min_amount' placeholder="Amount"
                                    :errors="$errors->first('loan.min_amount')" type="text" />
                            </div>
                            <div>
                                <label for="loan.max_amount">Max Amount</label>
                                <x-input wire:model='loan.max_amount' placeholder="Amount"
                                    :errors="$errors->first('loan.max_amount')" type="text" />
                            </div>

                        </div>





                        <div class="mt-4">
                            <button type="submit"
                                class="inline-flex items-center justify-center w-full px-5 py-3 text-white bg-black rounded-lg sm:w-auto">
                                <span class="font-medium"> Add Loan </span>

                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-3" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </button>
                            <button wire:click.prevent='clearLoanField'
                                class="inline-flex items-center justify-center w-full px-5 py-3 text-white bg-black rounded-lg sm:w-auto">
                                <span class="font-medium"> Empty Fields </span>

                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-3" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </button>
                            <a href="{{ route('display.loans') }}"
                                class="inline-flex items-center justify-center w-full px-5 py-3 text-white bg-blue-400 rounded-lg sm:w-auto">
                                <span class="font-medium"> See Loans </span>

                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-3" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</div>
