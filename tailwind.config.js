/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./storage/framework/views/*.php",
    ],
    theme: {
        extend: {},
    },
    corePlugins: {
        preflight: false,  // ⛔ DESACTIVA EL RESET DE TAILWIND
    },
};
