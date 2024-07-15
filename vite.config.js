import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/css/components/navbar.css",
                "resources/css/components/footer.css",
                "resources/css/components/custom-button.css",
                "resources/css/components/rating-card.css",
                "resources/css/pages/home.css",
                "resources/css/pages/menu.css",
                "resources/css/pages/menu-filter.css",
            ],
            refresh: true,
        }),
    ],
});
