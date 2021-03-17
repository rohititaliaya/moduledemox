
window.Vue = require('vue').default;
window.Fire = new Vue();

import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);

import Vue from 'vue';

Vue.component('home', require('./vue/Home.vue').default);


const app= new Vue({
    el : '#home',
});