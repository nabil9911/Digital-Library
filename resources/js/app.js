require("./bootstrap");

import Vue from "vue";
import router from "./route";
import "boxicons";
const app = new Vue({
    el: "#app",
    router,
});
