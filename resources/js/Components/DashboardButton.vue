<script setup>
defineProps({
    link: {
        type: String,
        required: true
    },
})
</script>
<template>
    <a :href="link">
        <div class="w-16 h-16 hover:scale-110 cursor-pointer rounded-xl bg-gray-100 flex items-center justify-center shadow-xl border-b border-gray-100 text-gray-600">
            <slot></slot>
        </div>
    </a>
</template>
