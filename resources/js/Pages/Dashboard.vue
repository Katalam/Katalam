<script setup>
import DashboardButton from '../Components/DashboardButton.vue'
import Border from "../Components/Border.vue";
</script>
<template>
    <div class="grid grid-cols-5 w-full pt-8 px-8 gap-4">
        <Border/>
        <div class="col-start-2 col-span-3 text-5xl tracking-widest text-center font-black">Katalam</div>
        <Border/>
        <div class="col-span-5 grid grid-cols-4 place-items-center">
            <DashboardButton link="https://twitter.com/brunogoerss">
                Twitter
            </DashboardButton>
            <DashboardButton link="https://github.com/Katalam">
                GitHub
            </DashboardButton>
            <DashboardButton link="https://instagram.com/bruno.goerss">
                Instagram
            </DashboardButton>
            <DashboardButton link="https://steamcommunity.com/id/katalam">
                Steam
            </DashboardButton>
        </div>
        <Border/>
        <div class="col-span-5">
            <img src="../../images/wallpaper.png" class="w-full" alt="">
        </div>
        <Border/>
        <div class="w-full col-span-5 grid grid-cols-4 divide-x divide-pencil">
            <div class="p-4">
                <h2 class="font-bold text-3xl">Books i've read</h2>
                <ul class="space-y-2">
                    <li>Domain-Driven Design with Laravel by Martin Joo (<a
                        href="https://domain-driven-design-laravel.com">https://domain-driven-design-laravel.com</a>)
                    </li>
                    <li>Design for Developers by Adrian Twarog (<a
                        href="https://enhanceui.com">https://enhanceui.com</a>)
                    </li>
                    <li>Advanced Inertia by Boris Lepikhin (<a
                        href="https://advanced-inertia.com">https://advanced-inertia.com</a>)
                    </li>
                </ul>
            </div>
            <div class="p-4">
                <h2 class="font-bold text-3xl">How do I write code?</h2>
                <p>PHPStorm with IDEAVim</p>
                <h2 class="font-bold text-3xl mt-4">Which code do I write?</h2>
                <p>PHP - mainly Laravel</p>
                <p>JS - mainly Vue, sometimes React</p>
                <p>TS - sometimes with above</p>
            </div>
            <div />
            <div />
        </div>
    </div>
</template>
