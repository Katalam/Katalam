<template>
    <a :href="link">
        <div class="w-16 h-16 rounded-xl bg-white flex items-center justify-center shadow text-gray-600">
            <slot></slot>
        </div>
    </a>
</template>

<script>
export default {
    name: 'DashboardButton',

    props: {
        link: String,
    },

    data() {
        return {};
    },

    computed: {},

    methods: {},

    mounted() {
    },
};
</script>
