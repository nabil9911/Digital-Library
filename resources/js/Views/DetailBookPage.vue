<template>
    <div class="container-fluid">
        <link
            href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
            rel="stylesheet"
        />
        <Navbar />
        <div class="body">
            <div class="row">
                <div class="col-lg-3">
                    <div class="row">
                        <div
                            class="col d-flex flex-column fixed-bottom ms-5"
                            style="width: 400px"
                        >
                            <div class="col">
                                <span>Pages</span>
                                <p>54 Pages</p>
                            </div>
                            <div class="col">
                                <span>Penerbit</span>
                                <p>Susanto</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col content-book mt-3">
                            <h3>Leonardo Decaprio(2001)</h3>
                            <h5>Judul Buku</h5>
                            <div class="plus">
                                <i class="bx bx-plus"></i>
                            </div>
                            <img
                                style="width: 35rem"
                                class="card-image-top mt-3"
                                src="/assets/p5.jpg"
                                alt=""
                            />

                            <a href="/reading" class="btn btn-1">Read</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import Navbar from "../components/navbar/Navbar";
export default {
    components: { Navbar },
};
</script>

<style>
* {
    margin: 0;
    padding: 0;
}

.container-fluid {
    width: 100%;
    height: 100vh;
    background: linear-gradient(-45deg, #c3b091, #ffe6bc, #f3e9dd, #ceab93);
    background-size: 400% 300%;
    position: relative;
    animation: change 10s ease-in-out infinite;
}

.content-book {
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
}

.plus {
    position: relative;
    width: 60px;
    height: 60px;
    background: #fff;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 3;
    cursor: pointer;
    box-shadow: 0 3px 4px rgba(0, 0, 0, 0.15);
}

.btn {
    text-decoration: none;
    padding: 80px 80px;
    font-size: 1.25rem;
    position: relative;
    color: #000;
}
.btn-1 {
    margin-top: -40px !important;
    font-family: "Poppins", sans-serif;
    font-weight: 600;
    box-sizing: border-box;
    color: #000;
    z-index: 1;
}
.btn-1::after,
.btn-1::before {
    border: 2px solid #000;
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    z-index: 2;
    transition: transform 0.3s ease;
}

.btn-1:hover::after {
    transform: translate(-5px, -5px);
}
.btn-1:hover::before {
    transform: translate(5px, 5px);
}
@keyframes change {
    0% {
        background-position: 0 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0 50%;
    }
}
</style>
