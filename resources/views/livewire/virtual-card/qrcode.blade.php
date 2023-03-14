<main class="grid min-h-full place-items-center bg-white py-24 px-6 sm:py-32 lg:px-8">
    <div class="text-center">
        <p class="text-base font-semibold text-indigo-600">{{ $virtualCard->name }}</p>
        <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">Scan Me</h1>
        <div class="my-4 mx-auto">
            {!! QrCode::size(300)->generate(route('virtual-card', ['slug'=> $virtualCard->slug])); !!}
        </div>
    </div>
</main>