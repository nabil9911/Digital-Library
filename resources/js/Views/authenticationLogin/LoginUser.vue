<template>
    <main class="login fluid-container h-100 mt-3">
        <div class="row">
            <div class="col-lg-6">
                <form action="">
                    <div class="row judul">
                        <div class="col">
                            <h1 style="font-weight: bolder" class="text-black">
                                Welcome
                            </h1>
                            <p style="font-weight: bolder" class="text-muted">
                                Welcome, please enter your details
                            </p>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg">
                            <label style="font-weight: bold" for="Email">
                                Email
                            </label>
                            <input
                                type="email"
                                placeholder="Enter your Email"
                                class="form-control"
                                id="Email"
                                v-model="form.email"
                            />
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg">
                            <label style="font-weight: bold" for="Password">
                                Password
                            </label>
                            <input
                                type="password"
                                placeholder="Enter your Password"
                                class="form-control"
                                id="Password"
                                v-model="form.password"
                                name="password"
                            />
                        </div>
                    </div>
                    <div class="row check-box mt-3">
                        <div class="col-lg-6">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                value=""
                                id="flexcheck"
                            />
                            <label class="form-check-label" for="flexcheck">
                                Remember me
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <a
                                href="/forgot-password"
                                class="text-dark"
                                style="text-decoration: none"
                                >Forgot Password</a
                            >
                        </div>
                    </div>
                    <button
                        type="button"
                        class="btn btn-lg w-100 btn-success mt-3"
                        @click.prevent="loginUser"
                    >
                        Sign in
                    </button>
                    <div class="row">
                        <div class="col text-center">
                            <span
                                >Dont have an account?
                                <a
                                    href="/register"
                                    style="text-decoration: none"
                                    >Sign up for free</a
                                ></span
                            >
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 side-bg">
                <img src="/assets/library.jpg" alt="" />
            </div>
        </div>
    </main>
</template>

<script>
import Swal from "sweetalert2";
import axios from "axios";
export default {
    data() {
        return {
            form: {
                email: "gilanggokilss19@gmail.com",
                password: "Salsa007",
            },
            errors: [],
        };
    },
    methods: {
        loginUser() {
            axios
                .post("api/login", this.form)
                .then((res) => {
                    Swal.fire("Hello!", "Welcome To Digilab UIN-SU", "success");
                    let user = res.data.data;
                    let token = res.data.token;
                    localStorage.setItem("token", token);
                    localStorage.setItem("user", JSON.stringify(user));
                    window.location.href = "/home";
                })
                .catch((error) => {
                    Swal.fire({
                        icon: "error",
                        title: "Oops!!",
                        text: error.data,
                        footer: "Sorry, please fill in all the forms provided",
                    });
                    // this.errors = error.response.data.errors;
                });
        },
    },
};
</script>

<style>
main.login {
    overflow-x: hidden;
}

.side-bg {
    position: fixed;
    right: 0;
    bottom: 0;
    top: 0;
}

.side-bg {
    width: 100%;
}
.side-bg img {
    height: 100vh;
    /* width: 100%; */
    object-fit: cover;
}

form {
    margin: auto;
    width: 70%;
    padding: 20px 0;
}

.check-box {
    color: #4b4d54;
    font-weight: 700;
}
form span a {
    color: #4b4d54;
    font-weight: 700;
}
form span a:hover {
    color: #4b4d54;
}
@media (max-width: 992px) {
    img {
        display: none;
    }
}
</style>
