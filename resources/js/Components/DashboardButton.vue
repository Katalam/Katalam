<script setup>
defineProps({
    link: {
        type: String,
        required: true
    },
})
</script>
<template>
    <a :href="link" class="flex items-center gap-4 font-semibold text-lg">
        <slot/>
    </a>
</template>
