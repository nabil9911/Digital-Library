<template>
    <div class="div">
        <link
            href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
            rel="stylesheet"
        />
        <div class="container">
            <div class="row">
                <div class="col">
                    <i v-on:click="logout" class="bx bx-log-out"></i>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    methods: {
        logout() {
            localStorage.removeItem("token");
            localStorage.removeItem("user");
            window.location.href = "/home";
        },
    },
};
</script>

<style></style>
