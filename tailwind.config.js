import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    darkMode: 'class',
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    50: '#f1f8ff',
                    100: '#dbf0ff',
                    200: '#b6e0ff',
                    300: '#84c5ff',
                    400: '#62a9ff',
                    500: '#0077ff',
                    600: '#0062cc',
                    700: '#004c99',
                    800: '#003366',
                    900: '#001f33',
                },
                secondary: {
                    50: '#f9f8ff',
                    100: '#f2f0ff',
                    200: '#e6e0ff',
                    300: '#d1c2ff',
                    400: '#bfa6ff',
                    500: '#9c73ff',
                    600: '#7f4fff',
                    700: '#5e3c99',
                    800: '#3e2b66',
                    900: '#1f1933',
                },
                success: {
                    50: '#f0fdf4',
                    100: '#dcfce7',
                    200: '#bbf7d0',
                    300: '#86efac',
                    400: '#4ade80',
                    500: '#22c55e',
                    600: '#16a34a',
                    700: '#047857',
                    800: '#005c4f',
                    900: '#004440',
                },
                danger: {
                    50: '#fff5f5',
                    100: '#fed7d7',
                    200: '#feb2b2',
                    300: '#fc8181',
                    400: '#f56565',
                    500: '#e53e3e',
                    600: '#c53030',
                    700: '#9b2c2c',
                    800: '#822727',
                    900: '#63171b',
                },
                warning: {
                    50: '#fffdf0',
                    100: '#fefcbf',
                    200: '#faf089',
                    300: '#f6e05e',
                    400: '#ecc94b',
                    500: '#d69e2e',
                    600: '#b7791f',
                    700: '#975a16',
                    800: '#744210',
                    900: '#5f370e',
                },
                info: {
                    50: '#f0f9ff',
                    100: '#cfe0ff',
                    200: '#a5c8ff',
                    300: '#6eafff',
                    400: '#4684ff',
                    500: '#1c64f2',
                    600: '#0d4bca',
                    700: '#073b99',
                    800: '#042b66',
                    900: '#021b33',
                },
                light_dark: {
                    50: '#f8f9fa',
                    100: '#e9ecef',
                    200: '#dee2e6',
                    300: '#ced4da',
                    400: '#adb5bd',
                    500: '#868e96',
                    600: '#495057',
                    700: '#343a40',
                    800: '#212529',
                    900: '#12181b',
                },

                brown: {
                    200: '#e5d1c9',
                    300: '#d8b7ab',
                    400: '#be8570',
                    500: '#a45335',
                    600: '#8e4a30',
                    700: '#753e29',
                    800: '#5c3222',
                    900: '#4a291b',
                },
                }
            },
            },
    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [forms, typography],
};
