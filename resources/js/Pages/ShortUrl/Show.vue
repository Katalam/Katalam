<script setup>
defineProps({
    link: {
        type: String,
        required: true
    },
})
</script>
<template>
    <div class="grid grid-cols-5 min-h-screen bg-gradient-to-r from-cyan-500/40 to-blue-500/50">
        <div class="col-start-2 col-span-3">
            <div class="h-full grid content-center justify-center">
                    <div class="flex flex-col items-center justify-center space-y-4 w-96">
                        <h1 class="font-bold text-white text-3xl">Your short link is ready!</h1>
                        <input type="text" v-model="$props.link"
                               class="px-4 py-2 shadow-lg rounded-lg w-full focus:ring-0 focus:outline-0 text-neutral-800" disabled>
                        <button class="px-4 py-2 rounded-lg bg-pink-500 shadow-lg text-white" v-clipboard="$props.link">Copy</button>
                    </div>
            </div>
        </div>
    </div>
</template>
