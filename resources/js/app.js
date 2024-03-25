import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import { Link, Head } from "@inertiajs/vue3";
import Layout from "@js/shared/Layout.vue";

// import "bootstrap";
// @import "../sass/app.scss";

const pages = import.meta.glob("./Pages/**/*.vue", { eager: true });

createInertiaApp({
    resolve: (name) => {
        // const pageImport = pages[`./Pages/${name}.vue`];
        // if (!pageImport) throw new Error(`Component "${name}" not found`);
        // return pageImport; // Explicit type assertion
        const pages = import.meta.glob("./Pages/**/*.vue", { eager: true });
        let page = pages[`./Pages/${name}.vue`];
        page.default.layout = page.default.layout || Layout;
        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .component("Head", Head)
            .component("Link", Link)
            .mount(el);
    },
    title: (title) => "My App -" + title,
});
