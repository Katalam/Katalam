<script setup lang="ts">
const date = new Date().toDateString();
</script>

<template>
    <header class="max-w-xl mx-auto">
        <div class="text-center md:text-balance">
            <p
                class="text-xs relative font-semibold uppercase tracking-wide text-zinc-500 dark:text-zinc-400"
            >
                <time datetime="{{ date }}">{{ date }}</time>
            </p>
            <h1
                class="text-3xl sm:text-3xl md:text-4xl lg:text-5xl mt-4 font-semibold tracking-tight text-zinc-900 dark:text-white"
            >
                Hello there!
            </h1>
            <p
                class="text-base mt-2 font-medium text-zinc-500 dark:text-zinc-400"
            >
                I'm Bruno, a passionate software developer from germany, with a
                love for clean code and tested solutions.
            </p>
        </div>
        <div class="flex items-center justify-center mt-6 gap-2">
            <div>
                <img
                    class="inline-block rounded-full size-9"
                    src="https://avatars.githubusercontent.com/u/39590058"
                    alt="katalams picture"
                />
            </div>
            <div>
                <p
                    class="text-xs relative font-semibold uppercase tracking-wide text-zinc-500 dark:text-zinc-400"
                >
                    Bruno Görß
                </p>
                <p class="text-xs font-medium text-zinc-400 dark:text-zinc-500">
                    @Katalam
                </p>
            </div>
        </div>
    </header>
</template>
