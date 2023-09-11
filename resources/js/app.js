require('./bootstrap');

// import routes defined in file routes.js
import VueRouter from "vue-router";
import Index from "./Index";
import router from "./routes";

window.Vue = require('vue');


// Vue component to use VuewRouter imported above
// Inside every component of our VueJs application
// this will give us access to special object
// the $router and the $route prepended by dolar sign
// you can see this under Vew Debuger by clicking on ExampleComponent and
// data route
Vue.use(VueRouter);

const app = new Vue({
    el: '#app',
    router: router, // add router from fle (router.js ) property to Vue instance
    components: {   // pass components to vue
        "index": Index
    }
});
