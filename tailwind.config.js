/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontWeight: {
                thin: "100",
                hairline: "100",
                extralight: "200",
                light: "300",
                normal: "400",
                medium: "500",
                semibold: "740",
                bold: "900",
                extrabold: "800",
                // 'extra-bold': '800',
                black: "900",
            },
            screens: {
                sm: "580px",
                md: "765px",
                lg: "995px",
                xl: "1200px",
                xxl: "1360px",
            },
        },
    },
    plugins: [],
};
