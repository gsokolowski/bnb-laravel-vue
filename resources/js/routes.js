import ExampleComponent from "./components/ExampleComponent"
import Example2 from "./components/Example2"

import VueRouter from "vue-router";

// Define some routes as
// an array of objects
// mapping of path on web to component to render
const routes = [
    {
        path: "/",
        component: ExampleComponent, // from ExampleComponent.vue
        name: 'home',
    },
    {
        path: "/second",
        component: Example2,
        name: "second",
    },
]

// Create the router instance and pass the `routes` options
const router = new VueRouter({
    mode: 'history',
    routes: routes // new property routes matches routes above
})

// At this point router object (VueRouter)
// is created but we have to make it available inside app.js file
// so export it
export default router // router object is exported automatically now

// test git
