<script>
    import dayjs from 'dayjs';
    import relativeTime from 'dayjs/plugin/relativeTime';
    import Dropdown from './Dropdown.svelte';
    import InputError from './InputError.svelte';
    import PrimaryButton from './PrimaryButton.svelte';
    import { useForm, page } from '@inertiajs/svelte';
    import DropdownLink from './DropdownLink.svelte';

    dayjs.extend(relativeTime);

    let { chirp } = $props();

    let editing = $state(false);

    const form = useForm({
        message: chirp.message
    });

    function submit(e) {
        e.preventDefault();
        $form.patch(route('chirps.update', chirp), {
            onSuccess: () => {
                editing = false;
            }
        });
    }
</script>

<div class="p-6 flex space-x-2">
    <svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-6 w-6 text-gray-600 -scale-x-100"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
        strokeWidth="2"
    >
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"
        />
    </svg>
    <div class="flex-1">
        <div class="flex justify-between items-center">
            <div>
                <span class="text-gray-800">{chirp.user.name}</span>
                <small class="ml-2 text-sm text-gray-600">{dayjs(chirp.created_at).fromNow()}</small
                >
                {#if chirp.created_at !== chirp.updated_at}
                    <small class="text-sm text-gray-600">&middot; edited</small>
                {/if}
            </div>
            {#if chirp.user.id === $page.props.auth.user.id}
                <Dropdown>
                    {#snippet trigger()}
                        <!-- svelte-ignore a11y_consider_explicit_label -->
                        <button>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 text-gray-400"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                            >
                                <path
                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"
                                />
                            </svg>
                        </button>
                    {/snippet}
                    {#snippet content()}
                        <button
                            class="block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:bg-gray-100 transition duration-150 ease-in-out"
                            onclick={() => (editing = true)}
                        >
                            Edit
                        </button>
                        <DropdownLink
                            href={route('chirps.destroy', chirp)}
                            as="button"
                            method="delete">Delete</DropdownLink
                        >
                    {/snippet}
                </Dropdown>
            {/if}
        </div>
        {#if editing}
            <form onsubmit={submit}>
                <textarea
                    bind:value={$form.message}
                    class="mt-4 w-full text-gray-900 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                ></textarea>
                <InputError message={$form.errors.message} class="mt-2" />
                <div class="space-x-2">
                    <PrimaryButton class="mt-4">Save</PrimaryButton>
                    <button
                        class="mt-4"
                        onclick={() => {
                            editing = false;
                            $form.reset();
                            $form.clearErrors();
                        }}>Cancel</button
                    >
                </div>
            </form>
        {:else}
            <p class="mt-4 text-lg text-gray-900">{chirp.message}</p>
        {/if}
    </div>
</div>
