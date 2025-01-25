import { createRouter, createWebHistory } from "vue-router";

// Components
import home from '../components/Home.vue';
import trailer from '../components/TrailerPage.vue';
import truck from '../components/TruckPage.vue';
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
        path: "/truck",
        component: truck,
    },
    {
        path: "/:pathMatch(.*)*",
        component: notfound,
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes,
    linkActiveClass: 'bg-gray-700 text-white text-m',
});

export default router;