/**  @type {import('tailwindcss').Config} */
export default {
    content: [
        "./public/**/*.php",
        "./src/**/*.php",
        "./*.php"
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    50 : '#eff6ff',
                    500: '#3b82f6',
                    900: '#1e3a8a',
                }
            }
        },
    },
    Plugin: [],
}