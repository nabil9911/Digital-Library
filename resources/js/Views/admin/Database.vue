<template>
    <div class="container data_user">
        <h1>database</h1>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button
                    class="nav-link active"
                    id="user-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#user"
                    type="button"
                    role="tab"
                    aria-controls="user"
                    aria-selected="true"
                >
                    User
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button
                    class="nav-link"
                    id="Books-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#books"
                    type="button"
                    role="tab"
                    aria-controls="books"
                    aria-selected="false"
                >
                    Books
                </button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div
                class="tab-pane fade show active"
                id="user"
                role="tabpanel"
                aria-labelledby="user-tab"
            >
                <div class="row table_book">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama lengkap</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                                <th scope="col">Kartu Tanda mahasiswa</th>
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
            <div
                class="tab-pane fade"
                id="books"
                role="tabpanel"
                aria-labelledby="books-tab"
            >
                <div class="row table_book">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama Buku</th>
                                <th scope="col">ISBN</th>
                                <th scope="col">Author</th>
                                <th scope="col">Penerbit</th>
                                <th scope="col">Tahun Terbit</th>
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
        <Sidebar />
    </div>
</template>

<script>
import Sidebar from "../../components/sidebar/Sidebar";
export default {
    components: { Sidebar },
};
</script>

<style></style>
