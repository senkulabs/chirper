<form action="{{ ($chirp ?? false) ? route('chirps.update', $chirp) : route('chirps.store') }}" method="post">
    @csrf
    @if ($chirp ?? false)
        @method('patch')
    @endif
    <textarea name="message" placeholder="{{ __('What\'s on your mind?') }}"
        class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
        >{{ old('message', $chirp->message ?? '') }}</textarea>
    <x-input-error :messages="$errors->get('message')" class="mt-2" />
    <div class="mt-4 space-x-2">
        <x-primary-button>{{ __('Chirp') }}</x-primary-button>
        @if ($chirp ?? false)
            <a href="{{ route('chirps.index') }}">{{ __('Cancel') }}</a>
        @endif
    </div>
</form>
