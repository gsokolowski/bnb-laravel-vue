import VueRouter from "vue-router";

import Bookables from "./bookables/Bookables";
import Bookable from "./bookables/Bookable";
import SecondComponent from "./components/Second"

// Define some routes as
// an array of objects
// mapping of path on web to component to render
const routes = [
    {
        path: "/",
        component: Bookables, // component registration handled by routes /bookables/Bookables.vue
        name: 'home'
    },
    {
        path: "/bookable/:id",
        component: Bookable, // component registration handled by routes /bookables/Bookable.vue
        name: 'bookable'
    },
    {
        path: "/second",
        component: SecondComponent,
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

