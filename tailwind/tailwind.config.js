const defaultTheme = require("tailwindcss/defaultTheme");

// Set flag to include Preflight conditionally based on the build target.
const includePreflight = "editor" === process.env._TW_TARGET ? false : true;

module.exports = {
    presets: [
        // Manage Tailwind Typography's configuration in a separate file.
        require("./tailwind-typography.config.js"),
    ],
    content: [
        // Ensure changes to PHP files and `theme.json` trigger a rebuild.
        "./theme/*.php",
        "./theme/**/*.php",
        "./theme/theme.json",
    ],
    theme: {
        // Extend the default Tailwind theme.
        extend: {
            colors: {
                "paradise-pink": {
                    50: "#fdf6f7",
                    100: "#fbeeef",
                    200: "#f6d4d8",
                    300: "#f0bac0",
                    400: "#e58691",
                    500: "#DA5262",
                    600: "#c44a58",
                    700: "#a43e4a",
                    800: "#83313b",
                    900: "#6b2830",
                },
                "smoke-white": {
                    50: "#ffffff",
                    100: "#fefefe",
                    200: "#fdfdfd",
                    300: "#fbfbfb",
                    400: "#f8f8f8",
                    500: "#f5f5f5",
                    600: "#dddddd",
                    700: "#b8b8b8",
                    800: "#939393",
                    900: "#787878",
                },
                "sunset-yellow": {
                    50: "#fffcf5",
                    100: "#fef8ec",
                    200: "#fdeecf",
                    300: "#fce3b3",
                    400: "#f9cf79",
                    500: "#f7ba40",
                    600: "#dea73a",
                    700: "#b98c30",
                    800: "#947026",
                    900: "#795b1f",
                },
                "mist-blue": {
                    50: "#fcfefd",
                    100: "#f9fcfb",
                    200: "#f0f8f6",
                    300: "#e7f4f1",
                    400: "#d6ece6",
                    500: "#c4e4db",
                    600: "#b0cdc5",
                    700: "#93aba4",
                    800: "#768983",
                    900: "#60706b",
                },
                "sapphire-blue": {
                    50: "#f3f8f9",
                    100: "#e7f0f2",
                    200: "#c2dadf",
                    300: "#9ec3cc",
                    400: "#5596a6",
                    500: "#0C6980",
                    600: "#0b5f73",
                    700: "#094f60",
                    800: "#073f4d",
                    900: "#06333f",
                },
            },
            fontFamily: {
                title: ["SilkSerif", ...defaultTheme.fontFamily.serif],
                body: ["AzoSans", ...defaultTheme.fontFamily.sans],
            },
            keyframes: {
                "fade-in-down": {
                    "0%": {
                        opacity: "0",
                        transform: "translateY(-1rem)",
                    },
                    "100%": {
                        opacity: "1",
                        transform: "translateY(0)",
                    },
                },
                "fade-out-down": {
                    from: {
                        opacity: "1",
                        transform: "translateY(0px)",
                    },
                    to: {
                        opacity: "0",
                        transform: "translateY(1rem)",
                    },
                },
                "fade-in-up": {
                    "0%": {
                        opacity: "0",
                        transform: "translateY(1rem)",
                    },
                    "100%": {
                        opacity: "1",
                        transform: "translateY(0)",
                    },
                },
                "fade-out-up": {
                    from: {
                        opacity: "1",
                        transform: "translateY(0px)",
                    },
                    to: {
                        opacity: "0",
                        transform: "translateY(1rem)",
                    },
                },
                "draw-line": {
                    to: {
                        transform: "translateX(0px)",
                    },
                },
            },
            animation: {
                "fade-in-down": "fade-in-down 0.5s ease-out",
                "fade-out-down": "fade-out-down 0.5s ease-out",
                "fade-in-up": "fade-in-up 0.5s ease-out",
                "fade-out-up": "fade-out-up 0.5s ease-out",
                "draw-line": "draw-line 0.7s linear forwards",
            },
        },
    },
    corePlugins: {
        // Disable Preflight base styles in CSS targeting the editor.
        preflight: includePreflight,
    },
    plugins: [
        // Add Tailwind Typography.
        require("@tailwindcss/typography"),

        // Extract colors and widths from `theme.json`.
        require("@_tw/themejson")(require("../theme/theme.json")),

        // Uncomment below to add additional first-party Tailwind plugins.
        require("@tailwindcss/aspect-ratio"),
        require("@tailwindcss/forms"),
        // require( '@tailwindcss/line-clamp' ),
    ],
};
