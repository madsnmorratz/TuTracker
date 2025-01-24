import './bootstrap';
import { createApp } from 'vue';
//import VueRouter from 'vue-router';
import router from './router/routes';
import App from "./components/App.vue"
import Example from "./components/Example.vue"
import Home from "./components/Home.vue"
import NotFound from "./components/NotFound.vue"
import TrailerPage from "./components/TrailerPage.vue"


// Vue.use(VueRouter);

const app = createApp(App);

app.use(router).mount("#app");
