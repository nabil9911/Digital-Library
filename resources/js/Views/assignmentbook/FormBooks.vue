<template>
    <div class="form-books">
        <link
            href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
            rel="stylesheet"
        />
        <div class="container">
            <div class="row">
                <div class="col-4 window" style="width: 200px">
                    <a href="/home">
                        <i
                            class="bx bx-chevrons-left light text-decoration-none"
                            style="font-size: 40px"
                        >
                        </i>
                    </a>
                </div>

                <div class="col-6 form-book" style="color: #fff">
                    <div class="judul mt-5 mb-5">
                        <h1>Register Your Book Here.</h1>
                    </div>
                    <div class="row">
                        <div class="col">
                            <form @submit.prevent="saveBuku">
                                <div class="row">
                                    <div class="col mb-4">
                                        <input
                                            type="text"
                                            class="form-control"
                                            id=""
                                            aria-describedby="emailHelp"
                                            placeholder="Author"
                                            v-model="form.author"
                                        />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-4">
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="exampleInputEmail1"
                                            aria-describedby="emailHelp"
                                            placeholder="Email"
                                            v-model="form.email"
                                        />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col mb-4">
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="exampleInputEmail1"
                                            aria-describedby="emailHelp"
                                            placeholder="Judul Buku"
                                            v-model="form.judul_buku"
                                        />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-4">
                                        <input
                                            type="text"
                                            class="form-control"
                                            id=""
                                            aria-describedby="emailHelp"
                                            placeholder="ISBN"
                                            v-model="form.isbn"
                                        />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 mb-4">
                                        <input
                                            type="number"
                                            class="form-control"
                                            id=""
                                            aria-describedby="emailHelp"
                                            placeholder="Pages"
                                            v-model="form.pages"
                                        />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 mb-4">
                                        <input
                                            type="date"
                                            class="form-control"
                                            id=""
                                            aria-describedby=""
                                            placeholder="Pages"
                                            v-model="form.tahun_terbit"
                                        />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col mb-4">
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="exampleInputEmail1"
                                            aria-describedby="emailHelp"
                                            placeholder="Publisher"
                                            v-model="form.publisher"
                                        />
                                    </div>
                                </div>
                                <div class="row mt-3 mb-4">
                                    <div
                                        class="document text-center cursor-pointer"
                                    >
                                        <form
                                            @click="openUploadFile('e_book')"
                                            action=""
                                            class="w-100"
                                        >
                                            <h2>Upload your Book Here</h2>
                                            <p>
                                                {{
                                                    form.e_book
                                                        ? form.e_book.name
                                                        : "In PDF"
                                                }}
                                            </p>
                                        </form>
                                        <input
                                            @change="handleChangeFile"
                                            accept=",.pdf"
                                            class="d-none"
                                            type="file"
                                            name="e_book"
                                            id=""
                                            ref="e_book"
                                        />
                                    </div>
                                    <span
                                        class="w-full text-danger"
                                        v-if="errors.e_book"
                                        >{{ errors.e_book[0] }}</span
                                    >
                                </div>
                                <div class="row mt-3 mb-4">
                                    <div
                                        class="document text-center cursor-pointer"
                                    >
                                        <form
                                            @click="
                                                openUploadFile('cover_book')
                                            "
                                            action=""
                                            class="w-100"
                                        >
                                            <h2>Upload your Cover Book Here</h2>
                                            <p>
                                                {{
                                                    form.cover_book
                                                        ? form.cover_book.name
                                                        : "In JPG or PNG"
                                                }}
                                            </p>
                                        </form>
                                        <input
                                            @change="handleChangeFile"
                                            accept=".jpg,.png"
                                            class="d-none"
                                            type="file"
                                            name="cover_book"
                                            id=""
                                            ref="cover_book"
                                        />
                                    </div>
                                    <span
                                        class="w-full text-danger"
                                        v-if="errors.cover_book"
                                        >{{ errors.cover_book[0] }}</span
                                    >
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <button
                                            type="submit"
                                            class="btn btn-primary"
                                        >
                                            Submit
                                        </button>
                                    </div>
                                    <div class="col-2">
                                        <button
                                            type="submit"
                                            class="btn btn-danger ps-4 pe-4"
                                        >
                                            <router-link
                                                class="text-decoration-none"
                                                style="color: #fff"
                                                to="/home"
                                                >Back</router-link
                                            >
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Swal from "sweetalert2";
export default {
    data() {
        return {
            form: {
                author: "nabil",
                email: "gilanggokils19@gmail.com",
                judul_buku: "zero to hero",
                isbn: "12313212",
                pages: "45",
                publisher: "muttaqin",
                tahun_terbit: "",
                e_book: "",
                cover_book: "",
            },
            errors: [],
        };
    },
    methods: {
        saveBuku() {
            let formData = new FormData();
            for (var key in this.form) {
                formData.append(key, this.form[key]);
            }

            axios
                .post("/api/books/register", formData, {
                    headers: {
                        "Content-type": "multipart/form-data",
                    },
                })
                .then((res) => {
                    Swal.fire(
                        "Good job!",
                        "good, we have received your data ",
                        "success"
                    );
                    window.location.href = "/home";
                })
                .catch((error) => {
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: error.response.data.message,
                        footer: "Sorry, please fill in all the forms provided",
                    });
                });
        },
        openUploadFile(ref) {
            this.$refs[ref].click();
        },
        handleChangeFile(e) {
            this.form[e.target.name] = e.target.files[0];
        },
    },
};
</script>

<style>
* {
    margin: 0;
    padding: 0;
}

.window {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    background-color: #c0eda6;
}
.window a {
    color: #fff;
}

.window a:hover {
    color: #fff;
}
.form-books {
    position: relative;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #6ebf8b;
    height: 100%;
}
.form-book {
    position: relative;
    margin-left: 200px !important;
}
.document {
    background-color: rgba(51, 208, 242, 30%);
    border-style: dashed;
}

.document p {
    color: #fff;
}
textarea:focus,
textarea.form-control:focus,
input.form-control:focus,
input[type="text"]:focus,
input[type="password"]:focus,
input[type="email"]:focus,
input[type="number"]:focus,
[type="text"].form-control:focus,
[type="password"].form-control:focus,
[type="email"].form-control:focus,
[type="tel"].form-control:focus,
[contenteditable].form-control:focus {
    box-shadow: inset 0 -1px 0 #ddd;
}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
</style>
