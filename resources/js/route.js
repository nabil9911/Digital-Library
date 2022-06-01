import Vue from "vue";
import Router from "vue-router";
Vue.use(Router);

const router = new Router({
    scrollBehavior() {
        return { x: 0, y: 0 };
    },
    mode: "history",
    routes: [
        {
            path: "/",
            redirect: "/home",
            component: () => import("./App.vue"),
            children: [
                {
                    path: "/home",
                    component: () => import("./Views/LandingPage.vue"),
                    name: "Home",
                },
                {
                    path: "/register",
                    component: () => import("./Views/RegisterPage.vue"),
                    name: "Register",
                },
                {
                    path: "/login",
                    component: () =>
                        import("./Views/authenticationLogin/LoginUser.vue"),
                    name: "Login",
                },
                {
                    path: "/listbook",
                    component: () => import("./Views/ListBook.vue"),
                },
                {
                    path: "/detailbooks",
                    component: () => import("./views/DetailBookPage.vue"),
                },
                {
                    path: "/admin/login",
                    component: () => import("./views/admin/login.vue"),
                },
                {
                    path: "/admin/dashboard",
                    component: () => import("./Views/admin/Dashboard.vue"),
                },
                {
                    path: "/admin/database",
                    component: () => import("./Views/admin/Database.vue"),
                },
                {
                    path: "/form-books",
                    component: () =>
                        import("./Views/assignmentbook/FormBooks.vue"),
                },
                {
                    path: "/reading",
                    component: () => import("./Views/ReadingPage.vue"),
                },
                {
                    path: "/forgot-password",
                    component: () => import("./Views/ForgotPass.vue"),
                },
            ],
        },
    ],
});

export default router;
