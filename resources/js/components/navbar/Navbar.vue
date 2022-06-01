<template>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <div class="logo">
                <img src="/assets/uinsu.png" alt="" />
                <a class="ps-2 navbar-brand fw-normal" href="#"
                    >Digital Library</a
                >
            </div>
            <ul class="d-flex mb-2 mb-lg-0 menu">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/home"
                        >Home</a
                    >
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/form-books"
                        >Form Books</a
                    >
                </li>

                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDarkDropdown"
                    aria-controls="navbarNavDarkDropdown"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="collapse navbar-collapse"
                    id="navbarNavDarkDropdown"
                >
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="navbarDarkDropdownMenuLink"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Categories
                            </a>
                            <ul
                                class="dropdown-menu"
                                aria-labelledby="navbarDarkDropdownMenuLink"
                            >
                                <li>
                                    <a class="dropdown-item" href="#">Agama</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Ekonomi</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Hukum</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Kesehatan</a
                                    >
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </ul>

            <div class="d-flex cta">
                <form
                    @submit.prevent="search_navigation"
                    class="d-flex search-form bg-light justify-content-between"
                >
                    <input
                        v-model="search"
                        class="ps-3"
                        placeholder="Find Your Book Here"
                    />
                    <button type="submit" class="btn">
                        <img src="/assets/search.png" alt="" />
                    </button>
                </form>
                <div class="profile" v-if="nama">
                    <div class="row">
                        <div class="col">
                            <p>{{ nama }}</p>
                        </div>
                    </div>

                    <Logout />
                </div>
                <div class="tombol" v-else>
                    <div class="row">
                        <div class="col">
                            <a href="/login">
                                <button
                                    type="button"
                                    class="btn btn-sign-in mx-2"
                                >
                                    Sign In
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="/register">
                                <button type="button" class="btn btn-sign-up">
                                    Sign Up
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
import Logout from "../logout/Logout.vue";
export default {
    data() {
        return {
            nama: "",
            search: "",
        };
    },
    components: { Logout },
    methods: {
        search_navigation() {
            this.$router.push({
                path: "/listbook",
                query: {
                    search: this.search,
                },
            });
        },
    },
    mounted() {
        let user = JSON.parse(localStorage.getItem("user"));

        if (user) {
            this.nama = user.nama;
        } else {
            this.nama = null;
        }
    },
};
</script>

<style>
* {
    margin: 0;
    padding: 0;
}

.navbar a {
    font-family: "Poppins", sans-serif;
    font-weight: 700;
}
.navbar a:hover {
    color: black;
}
.navbar a:focus {
    color: black;
}
.container {
    display: flex;
    flex-direction: row;
}
.container .navbar {
    display: flex;
    justify-content: space-around;
}

.search-form input {
    width: 65%;
    background: none;
    border: none;
    outline: none;
}

.profile {
    display: flex;
    flex-direction: row;
}
.tombol {
    display: flex;
    flex-direction: row;
}

.btn:focus {
    box-shadow: none !important;
}

.btn-sign-in {
    outline: none !important;
    background-color: #99d6a6 !important ;
}

.btn-sign-up {
    background-color: #f9eb67 !important;
}

.cta {
    order: 2;
}

.menu {
    order: 1;
    list-style: none !important;
}

.menu li a {
    color: black;
}

@media (max-width: 992px) {
    .body .container {
        min-height: 75vh;
    }
    .container {
        flex-direction: column;
    }
    .cta {
        order: 1;
    }

    .menu {
        order: 2;
    }
    .menu {
        list-style: none !important;
        text-decoration: none !important;
    }
    .navbar {
        padding-top: 10px;
        font-size: 10px;
    }
    header {
        justify-content: center !important;
        font-size: 10px;
    }

    nav .nav-item {
        margin-top: 10px;
    }
    nav .logo a {
        margin-top: 20px !important;
    }
    nav .logo img {
        margin-bottom: 10px !important;
    }

    .nav .nav-item h1 {
        font-size: 20px;
        justify-content: center;
    }

    nav button {
        font-size: 10px !important;
    }
    nav.logo img {
        width: 20%;
        margin-bottom: 10px;
    }
}
</style>
