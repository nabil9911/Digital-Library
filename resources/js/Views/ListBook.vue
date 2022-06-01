<template>
    <div>
        <header><Navbar /></header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ul>
                            <div class="row">
                                <div class="col-lg-3 pt-5">
                                    <div style="with: 18rem">
                                        <img
                                            class="card-img-top"
                                            src="/assets/p2.jpg"
                                            alt=""
                                        />
                                        <div class="card-body">
                                            <h5>Zero To Hero</h5>
                                            <p>Leonardo Decaprio</p>
                                            <p>2017</p>
                                            <a href="/detailbooks"
                                                ><button
                                                    type="button"
                                                    class="btn btn-success"
                                                >
                                                    Details Book
                                                </button></a
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 pt-5">
                                    <div style="with: 18rem">
                                        <img
                                            class="card-img-top"
                                            src="/assets/p2.jpg"
                                            alt=""
                                        />
                                        <div class="card-body">
                                            <h5>Zero To Hero</h5>
                                            <p>Leonardo Decaprio</p>
                                            <p>2017</p>
                                            <a href="/detailbooks"
                                                ><button
                                                    type="button"
                                                    class="btn btn-success"
                                                >
                                                    Details Book
                                                </button></a
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 pt-5">
                                    <div style="with: 18rem">
                                        <img
                                            class="card-img-top"
                                            src="/assets/p2.jpg"
                                            alt=""
                                        />
                                        <div class="card-body">
                                            <h5>Zero To Hero</h5>
                                            <p>Leonardo Decaprio</p>
                                            <p>2017</p>
                                            <a href="/detailbooks"
                                                ><button
                                                    type="button"
                                                    class="btn btn-success"
                                                >
                                                    Details Book
                                                </button></a
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 pt-5">
                                    <div style="with: 18rem">
                                        <img
                                            class="card-img-top"
                                            src="/assets/p2.jpg"
                                            alt=""
                                        />
                                        <div class="card-body">
                                            <h5>Zero To Hero</h5>
                                            <p>Leonardo Decaprio</p>
                                            <p>2017</p>
                                            <a href="/detailbooks"
                                                ><button
                                                    type="button"
                                                    class="btn btn-success"
                                                >
                                                    Details Book
                                                </button></a
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 pt-5">
                                    <div style="with: 18rem">
                                        <img
                                            class="card-img-top"
                                            src="/assets/p2.jpg"
                                            alt=""
                                        />
                                        <div class="card-body">
                                            <h5>Zero To Hero</h5>
                                            <p>Leonardo Decaprio</p>
                                            <p>2017</p>
                                            <a href="/detailbooks"
                                                ><button
                                                    type="button"
                                                    class="btn btn-success"
                                                >
                                                    Details Book
                                                </button></a
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 pt-5">
                                    <div style="with: 18rem">
                                        <img
                                            class="card-img-top"
                                            src="/assets/p2.jpg"
                                            alt=""
                                        />
                                        <div class="card-body">
                                            <h5>Zero To Hero</h5>
                                            <p>Leonardo Decaprio</p>
                                            <p>2017</p>
                                            <a href="/detailbooks"
                                                ><button
                                                    type="button"
                                                    class="btn btn-success"
                                                >
                                                    Details Book
                                                </button></a
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 pt-5">
                                    <div style="with: 18rem">
                                        <img
                                            class="card-img-top"
                                            src="/assets/p2.jpg"
                                            alt=""
                                        />
                                        <div class="card-body">
                                            <h5>Zero To Hero</h5>
                                            <p>Leonardo Decaprio</p>
                                            <p>2017</p>
                                            <a href="/detailbooks"
                                                ><button
                                                    type="button"
                                                    class="btn btn-success"
                                                >
                                                    Details Book
                                                </button></a
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </main>
    </div>
</template>

<script>
import Navbar from "../components/navbar/Navbar";
export default {
    components: { Navbar },
};
</script>

<style>
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
.menu {
    order: 1;
    list-style: none !important;
}

.menu li a {
    color: black;
}
.cta {
    order: 2;
}

.card-body {
    margin-right: 20px !important;
}
</style>
