<template>
    <a :href="link">
        <div class="w-16 h-16 hover:scale-105 cursor-pointer rounded-xl bg-white flex items-center justify-center shadow text-gray-600">
            <slot></slot>
        </div>
    </a>
</template>
