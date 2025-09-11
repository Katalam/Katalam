<script setup lang="ts">
const year = new Date().getFullYear()
</script>

<template>
    <footer class="mb-10 text-sm uppercase py-1 text-center container mx-auto max-w-5xl px-4 border-y-2 border-stone-500 text-stone-700">
        Katalam is on <a href="https://github.com/katalam" target="_blank" class="underline">GitHub</a>.
        © {{ year }}.
    </footer>
</template>
