//require("./bootstrap");

import "bootstrap/dist/css/bootstrap.min.css"

import axios from 'axios'
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Vue = require("vue").default;

import Vue from "vue";
import VueRouter from "vue-router";
import { routes } from "./routes";


Vue.use(VueRouter);

Vue.component(
    "employees-index",
    require("./components/employees/Index.vue").default
);

const router = new VueRouter({
    mode: "history",
    routes: routes
});

const app = new Vue({
    el: "#app",
    router: router
});