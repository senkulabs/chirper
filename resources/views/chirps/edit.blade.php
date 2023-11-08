<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <x-turbo-frame :id="$chirp" target="_top">
            @include('chirps._form', ['chirp' => $chirp])
        </x-turbo-frame>
    </div>
</x-app-layout>
