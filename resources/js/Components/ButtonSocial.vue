<template>
    <button :type="type" class="rounded-md bg-gray-100 px-4 py-2 text-center text-sm text-black hover:bg-gray-200">
        <slot />
    </button>
</template>

<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>
