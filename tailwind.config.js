module.exports = {
    content: [
        "./resources/views/app.blade.php",
        "./resources/js/**/*.{vue,js}",
        "./index.html",
        "./src/**/*.{js,ts,jsx,tsx}",
    ],
    theme: {
        extend: {
            colors: {
                'brown': '#B5997F',
            },
            fontFamily: {
                'sans': ['Newsreader', 'sans-serif']
            },
            backgroundImage: {
                'newspaper': "url('data:image/svg+xml,<svg width=\"210mm\" height=\"297mm\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"><defs><pattern id=\"paperTexture\" patternUnits=\"userSpaceOnUse\" width=\"10\" height=\"10\"><image href=\"data:image/png;base64,...(base64 encoded texture)...\" x=\"0\" y=\"0\" width=\"10\" height=\"10\" /></pattern></defs><rect width=\"100%\" height=\"100%\" fill=\"url(%23paperTexture)\" /></svg>')",
            },
        },
    },
    plugins: [],
}
