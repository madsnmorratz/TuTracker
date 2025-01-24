import { createRouter, createWebHistory } from "vue-router";

// Components

import home from '../components/Home.vue';
import trailer from '../components/TrailerPage.vue';
import example from '../components/Example.vue';
import notfound from '../components/NotFound.vue';

const routes = [
    {
        path: "/",
        component: home,
    },
    {
        path: "/trailer",
        component: trailer,
    },
    {
        path: "/example",
        component: example,
    },
    {
        path: "/:pathMatch(.*)*",
        component: notfound,
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;