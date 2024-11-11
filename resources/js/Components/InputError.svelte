<script>
    let { message, ...attrs } = $props();
</script>

{#if message}
    <div {...attrs}>
        <p class="text-sm text-red-600">{ message }</p>
    </div>
{/if}
