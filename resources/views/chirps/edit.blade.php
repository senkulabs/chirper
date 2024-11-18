<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form action="{{ route('chirps.update', $chirp) }}" method="post">
            @csrf
            @method('patch')
            <x-trix-input 
                id="chirp_{{ $chirp->getKey() }}_content"
                name="content"
                :value="old('content', $chirp->content?->toTrixHtml())"
                :accept-files="true"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                />
            <x-input-error :messages="$errors->get('content')" class="mt-2" />
            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
                <a href="{{ route('chirps.index') }}">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
</x-app-layout>
