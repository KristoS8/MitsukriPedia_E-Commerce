/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                helvetica: ["Helvetica", "Arial", "sans-serif"],
            },
            colors: {
                "biru-utama": ["#0099FF"],
            },
        },
    },
    plugins: [],
};
