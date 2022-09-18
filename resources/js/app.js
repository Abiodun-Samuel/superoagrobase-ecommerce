// import './bootstrap';

import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/inertia-vue3";
import { InertiaProgress } from "@inertiajs/progress";
import DashboardLayout from "./Layouts/Dashboard/DashboardLayout.vue";
import DefaultLayout from "./Layouts/Default/DefaultLayout.vue";

import "bootstrap/dist/js/bootstrap.js";

InertiaProgress.init({
    color: "#28c76f",
    includeCSS: true,
    showSpinner: true,
});

createInertiaApp({
    resolve: (name) => import(`./Pages/${name}`),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el);
    },
});
