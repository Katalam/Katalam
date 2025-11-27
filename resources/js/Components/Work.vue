<script setup>
import { Link } from "@inertiajs/inertia-vue3";
</script>

<template>
    <h2>Work History</h2>
    <ul>
        <li>
            <h4 class="font-bold mb-2">2023 - now</h4>
            <p>
                Senior Software Developer at
                <Link target="_blank" href="https://www.inno-brain.de"
                    >InnoBrain</Link
                >
            </p>
        </li>
        <li>
            <h4 class="uppercase font-bold mb-2">2020 - 2023</h4>
            <p>
                Junior Software Developer at
                <Link target="_blank" href="https://www.spacesquad.de"
                    >SpaceSquad</Link
                >
            </p>
        </li>
        <li>
            <h4 class="uppercase font-bold mb-2">2018 - 2020</h4>
            <p>Freetime Software Developer at Home</p>
        </li>
    </ul>
</template>
