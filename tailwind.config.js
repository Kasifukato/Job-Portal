export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        colors: {
            "black": 'red', // this will replace Tailwind's default black
        },
        fontFamily: {
            inter: ['Inter', 'sans-serif'],
            // or override default
            sans: ['Inter', 'sans-serif'],
        },

    },
    plugins: [],
}
