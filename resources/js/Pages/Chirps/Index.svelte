<script>
    import Chirp from '@/Components/Chirp.svelte';
    import InputError from '@/Components/InputError.svelte';
    import PrimaryButton from '@/Components/PrimaryButton.svelte';
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.svelte';
    import { page, useForm } from '@inertiajs/svelte';

    const form = useForm({
        message: ''
    });

    function submit(e) {
        e.preventDefault();
        $form.post(route('chirps.store'), {
            onFinish: () => {
                $form.reset();
            }
        });
    }

    const chirps = $derived($page.props.chirps);
</script>

<svelte:head>
    <title>Chirps</title>
</svelte:head>

<AuthenticatedLayout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg-p-8">
        <form onsubmit={submit}>
            <textarea
                required
                bind:value={$form.message}
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                placeholder="What's on your mind?"
            ></textarea>
            <InputError class="mt-2" message={$form.errors.message} />
            <PrimaryButton class="mt-4">Chirp</PrimaryButton>
        </form>

        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
            {#each chirps as chirp (chirp.id)}
                <Chirp {chirp} />
            {/each}
        </div>
    </div>
</AuthenticatedLayout>
