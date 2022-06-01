<template>
    <div>
        <header>
            <Navbar />
        </header>

        <div class="body">
            <div class="container tagline">
                <div class="row mt-5">
                    <div class="col">
                        <img src="/assets/icon.png" class="rounded" alt="" />
                    </div>
                    <div class="col">
                        <strong>
                            <p class="text-start fs-2">
                                <span class="green"> Education</span> is not the
                                learning <br />
                                of facts, but the training of <br />
                                the mind to <span class="yellow">think</span>
                            </p>
                            <p class="fs-3">Alberth Einsten</p>
                        </strong>
                    </div>
                </div>
            </div>

            <div class="about">
                <div class="container d-flex flex-column pt-5">
                    <div class="row">
                        <div class="col text-center">
                            <h2 class="text-white">About Us</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col deskrip">
                            <p class="text-white">
                                Lorem, ipsum dolor sit amet consectetur
                                adipisicing elit. Eveniet doloribus incidunt
                                assumenda quaerat beatae, ipsa dolorum, officiis
                                facilis consequatur molestias, at ea. Adipisci
                                quam accusantium assumenda magnam, placeat
                                corporis blanditiis?
                            </p>
                        </div>
                        <div class="col-lg-6 pic">
                            <img src="/assets/perpus2.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="books d-flex flex-column justify-content-center">
            <div class="row">
                <div class="col text-center">
                    <h3>Our Books</h3>
                </div>
            </div>
            <div
                id="carouselExampleControls"
                class="carousel slide"
                data-bs-ride="carousel"
            >
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col">
                                <div class="m-auto" style="width: 18rem">
                                    <img
                                        src="/assets/p1.jpg"
                                        class="img-fluid card-img-top"
                                        alt="..."
                                    />
                                    <div class="card-body">
                                        <h5 class="card-title">Zero To Hero</h5>
                                        <p class="card-text">
                                            Some quick example text to build on
                                            the card title and make up the bulk
                                            of the card's content.
                                        </p>
                                        <a
                                            href="/detailbooks"
                                            class="btn btn-success"
                                            >Details Book</a
                                        >
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="m-auto" style="width: 18rem">
                                    <img
                                        src="/assets/p2.jpg"
                                        class="img-fluid card-img-top"
                                        alt="..."
                                    />
                                    <div class="card-body">
                                        <h5 class="card-title">Zero To Hero</h5>
                                        <p class="card-text">
                                            Some quick example text to build on
                                            the card title and make up the bulk
                                            of the card's content.
                                        </p>
                                        <a
                                            href="/detailbooks"
                                            class="btn btn-success"
                                            >Details Book</a
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="m-auto" style="width: 18rem">
                                    <img
                                        src="/assets/p3.jpg"
                                        class="img-fluid card-img-top"
                                        alt="Card image cap"
                                    />
                                    <div class="card-body">
                                        <h5 class="card-title">Zero To Hero</h5>
                                        <p class="card-text">
                                            Some quick example text to build on
                                            the card title and make up the bulk
                                            of the card's content.
                                        </p>
                                        <a
                                            href="/detailbooks"
                                            class="btn btn-success"
                                            >Details Book</a
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col">
                                <div class="m-auto" style="width: 18rem">
                                    <img
                                        src="/assets/p4.jpg"
                                        class="img-fluid card-img-top"
                                        alt="..."
                                    />
                                    <div class="card-body">
                                        <h5 class="card-title">Zero To Hero</h5>
                                        <p class="card-text">
                                            Some quick example text to build on
                                            the card title and make up the bulk
                                            of the card's content.
                                        </p>
                                        <a
                                            href="/detailbooks"
                                            class="btn btn-success"
                                            >Details Book</a
                                        >
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="m-auto" style="width: 18rem">
                                    <img
                                        src="/assets/p5.jpg"
                                        class="img-fluid card-img-top"
                                        alt="..."
                                    />
                                    <div class="card-body">
                                        <h5 class="card-title">Zero To Hero</h5>
                                        <p class="card-text">
                                            Some quick example text to build on
                                            the card title and make up the bulk
                                            of the card's content.
                                        </p>
                                        <a
                                            href="/detailbooks"
                                            class="btn btn-success"
                                            >Details Book</a
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="m-auto" style="width: 18rem">
                                    <img
                                        src="/assets/p6.jpg"
                                        class="img-fluid card-img-top"
                                        alt="Card image cap"
                                    />
                                    <div class="card-body">
                                        <h5 class="card-title">Zero To Hero</h5>
                                        <p class="card-text">
                                            Some quick example text to build on
                                            the card title and make up the bulk
                                            of the card's content.
                                        </p>
                                        <a
                                            href="/detailbooks"
                                            class="btn btn-success"
                                            >Details Book</a
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button
                    class="carousel-control-prev"
                    type="button"
                    data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev"
                >
                    <span
                        class="carousel-control-prev-icon"
                        aria-hidden="true"
                    ></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                    class="carousel-control-next"
                    type="button"
                    data-bs-target="#carouselExampleControls"
                    data-bs-slide="next"
                >
                    <span
                        class="carousel-control-next-icon"
                        aria-hidden="true"
                    ></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</template>

<script>
import Navbar from "../components/navbar/Navbar";
export default {
    data() {
        return {
            nama: "",
            search: "",
        };
    },
    components: { Navbar },
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
.cta {
    order: 2;
}

.body .container {
    min-height: 90vh;
}

.body .about .container {
    min-height: 70vh;
}

.body img {
    width: 80%;
}

.body .green {
    color: #99d6a6;
}

.body .yellow {
    color: #f9eb67;
}

.body p {
    padding-top: 15px !important;
}
.about {
    background-color: #99d6a6;
}

.about img {
    width: 100%;
}
.img-carousel-wrapper {
    height: 250px;
    object-fit: contain;
}

@media (max-width: 992px) {
    .body .container {
        min-height: 75vh;
    }
    .container {
        flex-direction: column;
    }

    .body p {
        font-size: 13px !important;
    }

    .deskrip {
        order: 2;
    }

    .pic {
        order: 1;
    }
}
</style>
