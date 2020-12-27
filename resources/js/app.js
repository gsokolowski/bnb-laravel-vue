require('./bootstrap');

// import routes defined in file routes.js
import router from "./routes";
import VueRouter from "vue-router";

window.Vue = require('vue');

Vue.component(
    'example-component',
    require('./components/ExampleComponent.vue').default
);
//Vue.component("example2", require("./components/Example2.vue").default);

// Vue component to use VuewRouter imported above
// Insied every component of our VueJs application
// this will give us access to special object
// the $router and the $route prepended by dolar sign
// you can see this under Vew Debuger by clicking on ExampleComponent and
// data route
Vue.use(VueRouter);

const app = new Vue({
    el: '#app',
    router: router // add router from fle (router.js ) property to Vue instance
});
