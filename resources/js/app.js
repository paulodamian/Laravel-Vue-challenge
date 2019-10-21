require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';

import App from './components/App';
import Home from './components/Home';
import Movies from './components/MoviesList';
import People from './components/PeopleList';
import NotFound from './components/NotFound';
import MovieDetail from './components/MovieDetail';
import PersonDetail from './components/PersonDetail';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/movies',
            name: 'movies',
            component: Movies,
        },
        { 
            path: '/movies/:id',
            name: 'movieDetail', 
            component: MovieDetail
        },
        { 
            path: '/people',
            name: 'people', 
            component: People
        },
        { 
            path: '/people/:id',
            name: 'personDetail', 
            component: PersonDetail
        },
        {
            path: '/*',
            name: 'notFound',
            component: NotFound,
        },
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    methods: {},
    router,
});
