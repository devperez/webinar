<x-guest-layout>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel='stylesheet'>

    <div class="pt-4 bg-gray-100">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                <x-jet-authentication-card-logo />
            </div>

            <div class="w-full sm:max-w-4xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose">
                @yield('content')
            </div>
        </div>
    </div>
</x-guest-layout>