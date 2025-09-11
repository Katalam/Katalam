<script setup lang="ts">

import {Link} from "@inertiajs/inertia-vue3";
</script>

<template>
    <main class="container mx-auto max-w-5xl px-4 mb-14">
        <section class="mb-8">
            <h1 class="text-5xl sm:text-6xl text-center mb-4 leading-[1.2] tracking-tight">Who am I?</h1>
            <div class="h-[2px] my-6 w-72 mx-auto bg-stone-600"></div>
            <p class="italic text-xl sm:text-2xl sm:leading-9">
                I'm a software developer from Germany with a passion for clean code and tested solutions.
            </p>
        </section>

        <section class="md:flex md:space-x-8 mb-8">
            <div class="mb-8 md:mb-0 md:w-72 border-2 border-stone-600 p-2">
                <h2 class="text-2xl font-extrabold uppercase mb-2">Books i've read</h2>
                <ul class="list-disc list-outside ml-5">
                    <li>Domain-Driven Design with Laravel by Martin Joo (
                        <Link
                            href="https://domain-driven-design-laravel.com">https://domain-driven-design-laravel.com
                        </Link>
                        )
                    </li>
                    <li>Design for Developers by Adrian Twarog (
                        <Link
                            href="https://enhanceui.com">https://enhanceui.com
                        </Link>
                        )
                    </li>
                    <li>Advanced Inertia by Boris Lepikhin (
                        <Link
                            href="https://advanced-inertia.com">https://advanced-inertia.com
                        </Link>
                        )
                    </li>
                </ul>
            </div>
            <div class="grow">
                <div class="mb-4">
                    <h3 class="border-y border-stone-600 uppercase text-sm py-0.5 mb-2">How do I write code?</h3>
                    <ul class="space-y-2 text-sm">
                        <li>
                            PHPStorm with IDEAVim
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="border-y border-stone-600 uppercase text-sm py-0.5 mb-2">Which code do I write?</h3>
                    <ul class="space-y-2 text-sm">
                        <li>PHP - mainly Laravel</li>
                        <li>JS - mainly Vue, sometimes React</li>
                        <li>TS - sometimes with above</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="grid sm:grid-cols-1 md:grid-cols-3 mb-8">
            <div>
                <h4 class="font-bold mb-2">now - 2023</h4>
                <p>Senior Software Developer at <a href="https://www.inno-brain.de">InnoBrain</a></p>
            </div>
            <div class="md:border-x border-y md:border-y-0 border-stone-700 md:mx-4 md:px-4 my-4 py-4 md:my-0 md:py-0">
                <h4 class="uppercase font-bold mb-2">2023 - 2020</h4>
                <p>Junior Software Developer at <a href="https://www.spacesquad.de">SpaceSquad</a></p>
            </div>
            <div>
                <h4 class="uppercase font-bold mb-2">2020 - 2018</h4>
                <p>Freetime Software Developer at Home</p>
            </div>
        </section>

<!--        <section class="bg-stone-800 text-stone-200 p-6 relative text-center overflow-clip">-->
<!--            <div class="absolute bg-stone-300 size-10 -top-5 -left-5 rounded-full"></div>-->
<!--            <div class="absolute bg-stone-300 size-10 -top-5 -right-5 rounded-full"></div>-->
<!--            <div class="absolute bg-stone-300 size-10 -bottom-5 -left-5 rounded-full"></div>-->
<!--            <div class="absolute bg-stone-300 size-10 -bottom-5 -right-5 rounded-full"></div>-->
<!--            <div class="text-4xl font-light">Headline</div>-->
<!--            <p class="mb-4 text-sm">-->
<!--                text-->
<!--            </p>-->
<!--            <a href="/docs"-->
<!--               class="inline-block relative bg-stone-300 hover:bg-neutral-200 py-2 px-3 text-stone-800 font-bold">-->
<!--                <div class="absolute bg-stone-800 size-4 -top-2 -left-2 rounded-full"></div>-->
<!--                <div class="absolute bg-stone-800 size-4 -top-2 -right-2 rounded-full"></div>-->
<!--                <div class="absolute bg-stone-800 size-4 -bottom-2 -left-2 rounded-full"></div>-->
<!--                <div class="absolute bg-stone-800 size-4 -bottom-2 -right-2 rounded-full"></div>-->
<!--                Button-->
<!--            </a>-->
<!--        </section>-->
    </main>
</template>
