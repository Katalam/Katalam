<script setup>
import {useForm} from "@inertiajs/inertia-vue3";

const form = useForm({
    link: '',
});

const submit = () => {
    form.post(route('short-url.store'));
};
</script>
<template>
    <div class="grid grid-cols-5 min-h-screen bg-gradient-to-r from-cyan-500/40 to-blue-500/50">
        <div class="col-start-2 col-span-3">
            <div class="h-full grid content-center justify-center">
                <form @submit.prevent="submit">
                    <div class="flex flex-col items-center justify-center space-y-4 w-96">
                        <h1 class="font-bold text-white text-3xl">Paste your link here!</h1>
                        <input type="text" v-model="form.link"
                               class="px-4 py-2 shadow-lg rounded-lg w-full focus:ring-0 focus:outline-0 text-neutral-800"
                               placeholder="https://www.google.com">
                        <button class="px-4 py-2 rounded-lg bg-pink-500 shadow-lg text-white">Short it!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
