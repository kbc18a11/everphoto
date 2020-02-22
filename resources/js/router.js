import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from './components/home.vue';
import Loing from './components/loginform.vue';

Vue.use(VueRouter);

const routes = [
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/login',
        name: 'login',
        component: Loing
    }
];

const router = new VueRouter({
    mode: 'history',
    routes
});

export default router;
