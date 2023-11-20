<x-app-layout>

    <x-turbo-stream-from source="chirps" />

    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        @include('chirps._form')

        <div id="chirps" class="mt-6 bg-white shadow-sm rounded-lg divide-y">
            @each ('chirps._chirp', $chirps, 'chirp')
        </div>
    </div>
</x-app-layout>
