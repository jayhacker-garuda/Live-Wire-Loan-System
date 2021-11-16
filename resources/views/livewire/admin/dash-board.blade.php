<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <!-- Error & Success -->
    @if (session()->has('success'))
        <div class="pt-12">
            <x-success success="{{ session('success') }}" />
        </div>
    @endif
    @if (session()->has('error'))
        <div class="pt-12">
            <x-error error="{{ session('error') }}" />
        </div>
    @endif
    <!-- End Error & Success -->
    <div class="flex items-center justify-center min-h-screen">
        <div class="flex flex-col justify-around h-full">
            <div>
                <h1 class="mb-6 text-4xl font-light tracking-wider text-center text-gray-600 sm:mb-8 sm:text-6xl">
                    Admin Dashboard
                </h1>
                <ul class="flex flex-col space-y-2 sm:flex-row sm:flex-wrap sm:space-x-8 sm:space-y-0">
                    <li>
                        <a href="{{ route('admin.dashboard.crud.add-loan') }}"
                            class="p-2 text-sm font-normal text-white no-underline uppercase transition-colors duration-200 bg-blue-700 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50"
                            title="Add Loans">Add Loans</a>
                        <a href="javascript:void(0)"
                            class="p-2 text-sm font-normal text-white no-underline uppercase transition-colors duration-200 bg-blue-700 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50"
                            title="View Request">View Request</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
