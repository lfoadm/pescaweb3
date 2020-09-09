
require('./bootstrap');

window.Vue = require('vue');

import vuetify from '../plugins/vuetify' // path to vuetify export

import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'

import User from './Helpers/User'
window.User = User




Vue.component('AppHome', require('./components/AppHome.vue').default);




import router from "./Router/router.js"

const app = new Vue({
    el: '#app',
    vuetify: new Vuetify(),
    router
});
