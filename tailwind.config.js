module.exports = {
    content: [
        "./resources/views/app.blade.php",
        "./resources/js/**/*.{vue,js}",
        "./index.html",
        "./src/**/*.{js,ts,jsx,tsx}",
    ],
    theme: {
        extend: {
            fontFamily: {
                'mono': ['IBM Plex Mono', 'monospace'],
            },
        },
    },
    plugins: [],
}
