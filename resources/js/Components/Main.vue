<script setup lang="ts">
import Books from "./Books.vue";
import Tools from "./Tools.vue";
import Work from "./Work.vue";
</script>

<template>
    <main
        class="pt-12 mx-auto mt-12 border-t prose text-zinc-500 dark:text-zinc-400 prose-a:font-semibold prose-a:text-blue-300 dark:prose-a:text-blue-400 prose-a:hover:text-zinc-900 dark:prose-a:hover:text-white prose-headings:text-zinc-900 dark:prose-headings:text-white prose-blockquote:text-blue-700 dark:prose-blockquote:text-blue-300 prose-code:text-blue-400 dark:prose-code:text-blue-300 prose-strong:text-blue-500 dark:prose-strong:text-blue-400 prose-img:rounded-3xl prose-pre:rounded-2xl border-zinc-200 dark:border-zinc-700"
    >
        <p>
            The world is being rewritten in real-time. Technology evolves at a breakneck pace and and the constant
            innovations
        </p>
        <Books />
        <Tools />
        <Work />
    </main>
</template>
