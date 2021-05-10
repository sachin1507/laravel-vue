import 'es6-promise/auto'
import axios from 'axios'
import './bootstrap'
import Vue from 'vue'
import VueAuth from '@websanova/vue-auth'
import VueAxios from 'vue-axios'
import VueRouter from 'vue-router'
import App from './components/App'
//import Index from './Index'
import auth from './auth.js'
import router from './routes.js'
// Set Vue globally
window.Vue = Vue
// Set Vue router
Vue.router = router
Vue.use(VueRouter)
// Set Vue authentication
Vue.use(VueAxios, axios)
axios.defaults.baseURL = `${process.env.MIX_APP_URL}api`
Vue.use(VueAuth, auth)

// Load Index
Vue.component('App', App)
const app = new Vue({
  el: '#app',
  router,
});


/*require('./bootstrap');

window.Vue = require('vue');

Vue.component('welcome', require('./components/Welcome.vue').default);

const app = new Vue({
    el: '#app'
});
*/

/*import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import App from './components/App'
//import Welcome from './components/Welcome'
import Home from './pages/Home';
import Privacy from './pages/Privacy';

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/privacy-policy',
            name: 'privacy-policy',
            component: Privacy
        },
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});*/