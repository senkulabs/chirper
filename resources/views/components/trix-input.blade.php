@props(['id', 'name', 'value' => ''])

<input
    type="hidden"
    name="{{ $name }}"
    id="{{ $id }}_input"
    value="{{ $value }}"
/>

<div class="border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus-within:ring-1 focus-within:border-indigo-500 dark:focus-within:border-indigo-600 focus-within:ring-indigo-500 dark:focus-within:ring-indigo-600 rounded-md shadow-sm">
    <trix-toolbar
        class="bg-white dark:bg-gray-800 rounded-t-md border-b dark:-border-gray-900 shadow-xs sticky top-0 inset-x-0"
        id="{{ $id }}_toolbar"
    >
        <div class="trix-button-row">
            <span class="!mb-0 !border-0 trix-button-group trix-button-group--text-tools" data-trix-button-group="text-tools">
                <button type="button" class="!border-0 trix-button trix-button--icon trix-button--icon-bold" data-trix-attribute="bold" data-trix-key="b" title="${lang.bold}" tabindex="-1">${lang.bold}</button>
                <button type="button" class="!border-0 trix-button trix-button--icon trix-button--icon-italic" data-trix-attribute="italic" data-trix-key="i" title="${lang.italic}" tabindex="-1">${lang.italic}</button>
                <button type="button" class="!border-0 trix-button trix-button--icon trix-button--icon-strike" data-trix-attribute="strike" title="${lang.strike}" tabindex="-1">${lang.strike}</button>
                <button type="button" class="!border-0 trix-button trix-button--icon trix-button--icon-link" data-trix-attribute="href" data-trix-action="link" data-trix-key="k" title="${lang.link}" tabindex="-1">${lang.link}</button>
                <button type="button" class="!border-0 trix-button trix-button--icon trix-button--icon-heading-1" data-trix-attribute="heading1" title="${lang.heading1}" tabindex="-1">${lang.heading1}</button>
                <button type="button" class="!border-0 trix-button trix-button--icon trix-button--icon-quote" data-trix-attribute="quote" title="${lang.quote}" tabindex="-1">${lang.quote}</button>
                <button type="button" class="!border-0 trix-button trix-button--icon trix-button--icon-code" data-trix-attribute="code" title="${lang.code}" tabindex="-1">${lang.code}</button>
                <button type="button" class="!border-0 trix-button trix-button--icon trix-button--icon-bullet-list" data-trix-attribute="bullet" title="${lang.bullets}" tabindex="-1">${lang.bullets}</button>
                <button type="button" class="!border-0 trix-button trix-button--icon trix-button--icon-number-list" data-trix-attribute="number" title="${lang.numbers}" tabindex="-1">${lang.numbers}</button>
                <button type="button" class="!border-0 trix-button trix-button--icon trix-button--icon-decrease-nesting-level" data-trix-action="decreaseNestingLevel" title="${lang.outdent}" tabindex="-1">${lang.outdent}</button>
                <button type="button" class="!border-0 trix-button trix-button--icon trix-button--icon-increase-nesting-level" data-trix-action="increaseNestingLevel" title="${lang.indent}" tabindex="-1">${lang.indent}</button>
                <button type="button" class="!border-0 trix-button trix-button--icon trix-button--icon-attach" data-trix-action="attachFiles" title="${lang.attachFiles}" tabindex="-1">${lang.attachFiles}</button>
            </span>

            <span class="trix-button-group-spacer"></span>

            <span class="trix-button-group trix-button-group--history-tools !mb-0 !border-0" data-trix-button-group="history-tools">
                <button type="button" class="!border-0 trix-button trix-button--icon trix-button--icon-undo" data-trix-action="undo" data-trix-key="z" title="{{ __('Undo') }}" tabindex="-1">{{ __('Undo') }}</button>
                <button type="button" class="!border-0 trix-button trix-button--icon trix-button--icon-redo" data-trix-action="redo" data-trix-key="shift+z" title="{{ __('Redo') }}" tabindex="-1">{{ __('Redo') }}</button>
            </span>
        </div>

        <div class="trix-dialogs" data-trix-dialogs data-cloak>
            <div class="trix-dialog trix-dialog--link" data-trix-dialog="href" data-trix-dialog-attribute="href">
                <div class="trix-dialog__link-fields">
                    <x-text-input type="url" name="href" class="block mt-1 w-full" placeholder="{{ __('Enter a URL') }}" aria-label="${lang.url}" required data-trix-input/>
                    <div class="trix-button-group !border-0 !ms-1">
                        <input type="button" class="trix-button--dialog" value="{{ __('Link') }}" data-trix-method="setAttribute">
                        <input type="button" class="trix-button--dialog !border-l-0" value="{{ __('Unlink') }}" data-trix-method="removeAttribute">
                    </div>
                </div>
            </div>
        </div>
    </trix-toolbar>

    <trix-editor
        id="{{ $id }}"
        toolbar="{{ $id }}_toolbar"
        input="{{ $id }}_input"
        {{ $attributes->merge(['class' => 'trix-content !rounded-t-none !border-none !border-none dark:[&_pre]:!bg-gray-700 dark:[&_pre]:rounded dark:[&_pre]:!text-white']) }}
    ></trix-editor>
</div>