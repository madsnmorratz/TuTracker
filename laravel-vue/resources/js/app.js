import './bootstrap';
import { createApp } from 'vue';
import router from './router/routes';
import App from "./components/App.vue"
import Axios from "axios";

axios.defaults.baseURL = "http://127.0.0.1:8000"
createApp(App).use(router).mount("#app");
