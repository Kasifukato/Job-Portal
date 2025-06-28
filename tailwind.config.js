/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./public/**/*.html",
    ],
    theme: {
        extend: {
            fontFamily: {
                'sans': ['Hanken Grotesk', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                'serif': ['ui-serif', 'Georgia', 'serif'],
                'mono': ['ui-monospace', 'monospace'],
                // Keep Hanken Grotesk as custom option too
                'hanken': ['Hanken Grotesk', 'sans-serif'],
            },
            fontSize: {
                "xs":".625rem" // 10px
            }
        },
    },
    plugins: [],
}
