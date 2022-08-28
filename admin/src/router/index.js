import { createRouter, createWebHistory } from "vue-router";
import HomeView from "../views/HomeView.vue";

const router = createRouter({
    history: createWebHistory(
        import.meta.env.BASE_URL),
    routes: [{
            path: "/",
            name: "home",
            component: HomeView,
        },
        {
            path: "/Admin",
            name: "Admin",
            // route level code-splitting
            // this generates a separate chunk (Admin.[hash].js) for this route
            // which is lazy-loaded when the route is visited.
            component: () =>
                import ("../views/AdminView.vue"),
        },
        {
            path: "/Convert",
            name: "Convert",
            // route level code-splitting
            // this generates a separate chunk (Convert.[hash].js) for this route
            // which is lazy-loaded when the route is visited.
            component: () =>
                import ("../views/ConvertView.vue"),
        },
        {
            path: "/CurrencyList",
            name: "CurrencyList",
            // route level code-splitting
            // this generates a separate chunk (CurrencyList.[hash].js) for this route
            // which is lazy-loaded when the route is visited.
            component: () =>
                import ("../views/CurrencyListView.vue"),
        },
    ],
});

export default router;