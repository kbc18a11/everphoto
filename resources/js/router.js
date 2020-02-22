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
        path: '/loginform',
        name: 'loginform',
        component: Loing
    }
];

const router = new VueRouter({
    mode: 'history',
    routes
});

export default router;
