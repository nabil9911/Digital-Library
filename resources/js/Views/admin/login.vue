<template>
    <main class="login fluid-container d-grid items-center">
        <div class="row">
            <div
                class="col px-5 d-flex justify-content-center align-items-center"
            >
                <form action="">
                    <div class="row judul">
                        <div class="col">
                            <h1 style="font-weight: bolder" class="text-black">
                                Welcome Admin UIN-SU
                            </h1>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg">
                            <label style="font-weight: bold" for="email">
                                Email
                            </label>
                            <input
                                type="email"
                                placeholder="Enter Your Email"
                                class="form-control"
                                id="email"
                            />
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg">
                            <label style="font-weight: bold" for="email">
                                Password
                            </label>
                            <input
                                type="password"
                                placeholder="Enter Your Password"
                                class="form-control"
                                id="password"
                            />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <button
                                type="button"
                                class="btn btn-lg w-100 btn-success mt-3"
                            >
                                Login
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div
                class="logo col px-5 text-center d-flex justify-content-center align-items-center flex-column"
                style="background-color: #b5fe83"
            >
                <img
                    class="img-fluid d-block mb-4"
                    width="160px"
                    src="https://imgs.search.brave.com/1oT4QqgFwIzJo7_t7cfrXvgIHOXAvBAMrmNfgF98fkc/rs:fit:859:833:1/g:ce/aHR0cHM6Ly9pLnBp/bmltZy5jb20vb3Jp/Z2luYWxzLzZjL2E2/LzBmLzZjYTYwZmM4/MmU5YzBjMzg5ZTZk/NzczN2NiNDNhMjdj/LnBuZw"
                    alt=""
                />
                <h3>Digital Library UIN SUMATERA UTARA</h3>
                <h5>Solution for Modern Library</h5>
            </div>
        </div>
    </main>
</template>

<script>
import axios from "axios";
export default {};
</script>

<style>
/* .box {
    position: fixed;
    top: 30%;
    left: 30%;
    margin-top: -50px;
    margin-left: -100px;
}
.logo {
    padding: 50px;
} */
.login {
    min-height: 100vh;
    overflow: hidden;
}
</style>
