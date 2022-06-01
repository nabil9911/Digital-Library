<template>
    <div class="container">
        <div class="row">
            <div class="col">
                <Sidebar />
            </div>
        </div>
        <link
            href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
            rel="stylesheet"
        />
        <div class="dashboard">
            <div class="row">
                <div class="col logo">
                    <h1>Dashboard</h1>
                </div>
            </div>
            <div class="row card_content">
                <div class="col">
                    <div
                        class="card shadow p-3 mb-5 bg-body rounded"
                        style="width: 18rem"
                    >
                        <div class="icon">
                            <i class="bx bx-book img-fluid"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Total Books</h5>
                            <span class="fs-2"> 20</span>
                            <a href="" class="text-decoration-none">
                                <div class="col">
                                    <i class="bx bx-plus"></i>Add new Books
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div
                        class="card shadow p-3 mb-5 bg-body rounded"
                        style="width: 18rem"
                    >
                        <div class="icon">
                            <i class="bx bxs-user img-fluid"></i>
                        </div>
                        <div class="card-body text-sm">
                            <h5 class="card-title">Total Users</h5>
                            <span class="fs-2">100</span>
                            <p class="text-muted">New user Noted every week</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row table_book">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama lengkap</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>
                                <i class="bx bxs-bullseye"></i>
                                <i class="bx bx-check"></i>
                                <i class="bx bx-x"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>
                                <i class="bx bxs-bullseye"></i>
                                <i class="bx bx-check"></i>
                                <i class="bx bx-x"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            <td>
                                <i class="bx bxs-bullseye"></i>
                                <i class="bx bx-check"></i>
                                <i class="bx bx-x"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
import Sidebar from "../../components/sidebar/Sidebar";
export default {
    components: { Sidebar },
};
</script>

<style>
.container {
    position: relative;
}
.dashboard .card_content .card .icon {
    color: #062c30;
    width: 100%;
    font-size: 30px;
}
</style>
