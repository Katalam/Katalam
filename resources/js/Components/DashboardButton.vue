<script setup>
defineProps({
    link: {
        type: String,
        required: true
    },
})
</script>
<template>
    <a :href="link" class="flex items-center gap-4">
        <div class="w-16 h-16 hover:scale-110 cursor-pointer rounded-xl bg-[#d3ac89] flex items-center justify-center shadow-xl shadow-[#ad9988] border-b border-orange-900 text-gray-600">
            <slot></slot>
        </div>
        <slot name="title"></slot>
    </a>
</template>
