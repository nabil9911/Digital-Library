<template>
    <main class="register fluid-container h-100">
        <div class="row">
            <form>
                <div class="col-lg-6">
                    <form action="">
                        <div class="row mt-3 judul">
                            <div class="col">
                                <h1 style="font-weight: 700" class="text-black">
                                    Create new account
                                </h1>
                                <p
                                    class="text-secondary"
                                    style="font-weight: 700"
                                >
                                    Welcome, Please enter your details
                                </p>
                            </div>
                        </div>

                        <div class="name row mt-3" style="font-weight: 600">
                            <div class="col-lg-6">
                                <label for="first-name">First Name</label>

                                <input
                                    placeholder="Firstname"
                                    type="text"
                                    class="form-control"
                                    id="first-name"
                                    aria-describedby="emailHelp"
                                    v-model="form.firstname"
                                    name="firtsname"
                                />
                                <span
                                    class="w-full text-danger"
                                    v-if="errors.firstname"
                                    >{{ errors.firstname[0] }}</span
                                >
                            </div>
                            <div class="col-lg-6">
                                <label for="last-name">Last Name</label>
                                <span class="w-full" v-if="errors.lastname"
                                    >{{ errors.lastname[0] }}
                                </span>
                                <input
                                    id="last-name"
                                    class="form-control"
                                    type="text"
                                    placeholder="Lastname"
                                    v-model="form.lastname"
                                    name="lastname"
                                />
                            </div>
                        </div>

                        <div class="row mt-3" style="font-weight: 600">
                            <div class="col-lg-12">
                                <label for="input-email">Email</label>
                                <input
                                    type="email"
                                    class="form-control"
                                    placeholder="Enter your email"
                                    id="input-email"
                                    aria-describedby="emailHelp"
                                    v-model="form.email"
                                />
                                <span
                                    class="w-full text-danger"
                                    v-if="errors.email"
                                    >{{ errors.email[0] }}</span
                                >
                                <div id="emailHelp" class="form-text">
                                    We'll never share your email with anyone
                                    else.
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3" style="font-weight: 600">
                            <div class="col-lg">
                                <label for="input-password">Password</label>
                                <input
                                    type="password"
                                    class="form-control"
                                    placeholder="Enter your password"
                                    id="input-password"
                                    v-model="form.password"
                                    name="password"
                                />
                                <span
                                    class="w-full text-danger"
                                    v-if="errors.password"
                                    >{{ errors.password[0] }}</span
                                >
                            </div>
                        </div>
                        <div class="row mt-3" style="font-weight: 600">
                            <div class="col-lg">
                                <label for="confirm-password"
                                    >Confirm Password</label
                                >
                                <input
                                    type="password"
                                    class="form-control"
                                    placeholder="Re-Enter your password"
                                    id="confirm-password"
                                    v-model="form.password_confirmation"
                                    name="password_confirmation"
                                />

                                <span
                                    class="w-full danger text-danger"
                                    v-if="errors.password_confirmation"
                                    >{{ errors.password_confirmation[0] }}</span
                                >
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="document text-center cursor-pointer">
                                <form
                                    @click="openUploadFile"
                                    action=""
                                    class="w-100"
                                >
                                    <h2>Upload your document</h2>

                                    <p>
                                        {{ form.KTM ? form.KTM.name : "(KTM)" }}
                                    </p>
                                    <p>In JPG, ZIP or PDF</p>
                                </form>
                                <input
                                    @change="handleChangeFile"
                                    class="d-none"
                                    type="file"
                                    name=""
                                    id=""
                                    ref="uploadFile"
                                />
                            </div>
                            <span
                                class="w-full text-danger"
                                v-if="errors.KTM"
                                >{{ errors.KTM[0] }}</span
                            >
                        </div>
                        <div class="row check-box mt-3">
                            <div class="col-lg-6">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    value=""
                                    id="flexcheck"
                                />
                                <label
                                    class="form-check-label"
                                    for="flexcheck"
                                    style="font-weight: 600"
                                >
                                    Remember me
                                </label>
                            </div>
                            <div class="col-lg-6" style="font-weight: 600">
                                <a
                                    href="#"
                                    class="text-dark"
                                    style="text-decoration: none"
                                    >Forgot Password</a
                                >
                            </div>
                        </div>
                        <button
                            type="button"
                            class="btn btn-lg w-100 btn-success mt-3"
                            @click.prevent="saveForm"
                        >
                            Sign Up
                        </button>
                    </form>
                </div>
            </form>
            <div class="col-lg-6 side-bg">
                <img src="/assets/library.jpg" alt="" />
            </div>
        </div>
    </main>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            form: {
                firstname: "",
                lastname: "",
                email: "",
                password: "",
                password_confirmation: "",
                KTM: null,
            },
            errors: [],
        };
    },
    methods: {
        saveForm() {
            // untuk menyimpan data di dalam cache browser
            let formData = new FormData();
            for (var key in this.form) {
                formData.append(key, this.form[key]);
            }
            axios
                .post("/api/register", formData, {
                    headers: {
                        "Content-Type": "multipart/form-data",
                    },
                })
                .then((res) => {
                    this.$router.push({ name: "Login" });
                })
                .catch((error) => {
                    this.errors = error.response.data.errors;
                });
        },
        openUploadFile() {
            this.$refs.uploadFile.click();
        },
        handleChangeFile(e) {
            this.form.KTM = e.target.files[0];
        },
    },
};
</script>

<style>
main.register {
    overflow-x: hidden;
    font-family: "Poppins", sans-serif;
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
.document {
    background-color: rgba(51, 208, 242, 30%);
    border-style: dashed;
}

.document p {
    color: #bbbbbb;
}

@media (max-width: 992px) {
    .name {
        padding-top: 10px !important ;
    }
    img {
        display: none;
    }
}
</style>
