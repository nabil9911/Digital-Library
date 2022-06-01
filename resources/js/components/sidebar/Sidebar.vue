<template>
    <div class="body">
        <link
            href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
            rel="stylesheet"
        />
        <div class="sidebar" :class="{ active: toggle_active }">
            <div class="logo_content">
                <div class="logo">
                    <i class="bx bxl-postgresql"></i>
                    <div class="logo_name">Database</div>
                </div>

                <i
                    class="bx bx-menu"
                    id="btn"
                    @click="toggle_active = !toggle_active"
                ></i>
            </div>
            <ul class="nav-list">
                <li>
                    <i class="bx bx-search"></i>

                    <input type="text" placeholder="Search..." />
                    <span class="tooltip">Search</span>
                </li>
                <li>
                    <a href="/admin/dashboard">
                        <i class="bx bx-grid-alt"></i>
                        <span class="links_name">Dashboard</span>
                    </a>
                    <span class="tooltip">Dashboard</span>
                </li>
                <li>
                    <a href="/admin/database">
                        <i class="bx bx-data"></i>
                        <span class="links_name">Database</span>
                    </a>
                    <span class="tooltip">Database</span>
                </li>
                <li>
                    <a href="#">
                        <i class="bx bxs-category"></i>
                        <span class="links_name">Category</span>
                    </a>
                    <span class="tooltip">Category</span>
                </li>
                <li>
                    <a href="#">
                        <i class="bx bx-bar-chart"></i>
                        <span class="links_name">chart</span>
                    </a>
                    <span class="tooltip">Chart</span>
                </li>
                <li>
                    <a href="#">
                        <i class="bx bx-folder-open"></i>
                        <span class="links_name">File Manager</span>
                    </a>
                    <span class="tooltip">File Manager</span>
                </li>
            </ul>
            <div class="profile_content">
                <div class="profile">
                    <div class="profile_details">
                        <img src="astro.png" alt="" />
                        <div class="name_job">
                            <div class="name">Nabil</div>
                            <div class="job">Programmer</div>
                        </div>
                    </div>
                    <i class="bx bx-log-out" id="log_out"></i>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            toggle_active: false,
        };
    },
};
</script>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

body {
    position: relative;
    min-height: 100vh;
    width: 100%;
    overflow: hidden;
}
.sidebar {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 78px;
    background-color: #019267;
    padding: 6px 14px;
    transition: all 0.5s ease;
}
.sidebar.active {
    z-index: 1;
    width: 240px;
}

.sidebar .logo_content .logo {
    color: #fff;
    display: flex;
    height: 50px;
    width: 100%;
    align-items: center;
    opacity: 0;
    pointer-events: none;
    transition: all 0.5s ease;
}

.sidebar.active .logo_content .logo {
    opacity: 1;
    pointer-events: none;
}
.logo_content .logo i {
    font-size: 28px;
    margin-right: 5px;
    color: #fff;
}
.logo_content .logo .logo_name {
    font-size: 20px;
    font-weight: 400;
}
.sidebar #btn {
    position: absolute;
    color: #fff;
    top: 6px;
    left: 50%;
    font-size: 20px;
    width: 50px;
    height: 50px;
    text-align: center;
    line-height: 50px;
    transform: translateX(-50%);
}
.sidebar.active #btn {
    left: 90%;
}
.sidebar ul {
    margin-top: 20px;
}
.sidebar ul li {
    position: relative;
    height: 50px;
    width: 100%;
    margin: 0 -40px;
    list-style: none;
    line-height: 50px;
}
.sidebar ul li .tooltip {
    position: absolute;
    left: 122px;
    top: 50%;
    transform: translateY(-50%, -50%);
    border-radius: 6px;
    height: 35px;
    width: 122px;
    background: #fff;
    line-height: 35px;
    text-align: center;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    transition: 0s;
    opacity: 0;
    pointer-events: none;
    display: block;
}
.sidebar.active ul li .tooltip {
    display: none;
}

.sidebar ul li:hover .tooltip {
    transition: 0.5s ease;
    opacity: 1;
    top: 50%;
}

.sidebar ul li input {
    position: absolute;
    height: 100%;
    width: 100%;
    left: 0;
    top: 0;
    border-radius: 12px;
    outline: none;
    border: none;
    background: #95d1cc;
    padding-left: 50px;
    font-size: 18px;
    color: #fff;
}

.sidebar ul li .bx-search {
    position: absolute;
    z-index: 99;
    color: #fff;
    transition: all 0.5 ease;
}
.sidebar ul li .bx-search:hover {
    background: #fff;
    color: #95d1cc;
}

.sidebar ul li a {
    color: #fff;
    display: flex;
    align-items: center;
    text-decoration: none;
    transition: all 0.4s ease;
    border-radius: 12px;
    white-space: nowrap;
    margin-top: 10px;
}
.sidebar ul li a:hover {
    width: 50px;
    color: #019267;
    background: #fff;
}
.sidebar.active ul li a:hover {
    width: unset;
}
.sidebar ul li i {
    height: 50px;
    min-width: 50px;
    border-radius: 12px;
    line-height: 50px;
    text-align: center;
}
.sidebar .links_name {
    opacity: 0;
    pointer-events: none;
    transition: all 0.5s ease;
}
.sidebar.active .links_name {
    opacity: 1;
    pointer-events: auto;
}

.sidebar .profile_content {
    position: absolute;
    color: #fff;
    bottom: 0;
    left: 0;
    width: 100%;
}

.sidebar .profile_content .profile {
    position: relative;
    padding: 10px 6px;
    height: 60px;
    background: none;
    transition: all 0.4s ease;
}
.sidebar.active .profile_content .profile {
    background: #95d1cc;
}
.profile_content .profile .profile_details {
    display: flex;
    align-items: center;
    opacity: 0;
    pointer-events: none;
    white-space: nowrap;
}

.sidebar.active .profile .profile_details {
    opacity: 1;
    pointer-events: auto;
}
.profile .profile_details img {
    height: 45px;
    width: 45px;
    object-fit: cover;
    border-radius: 12px;
}
.profile .profile_details .name_job {
    margin-left: 10px;
}
.profile .profile_details .name {
    font-size: 15px;
    font-weight: 400;
}

.profile .profile_details .job {
    font-size: 12px;
}
.profile #log_out {
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    min-width: 78px;
    height: 50px;
    font-size: 20px;
    text-align: center;
    transition: all 0.4s ease;
    background: #95d1cc;
}
.sidebar.active .profile #log_out {
    left: 88%;
}
.sidebar.active .profile #log_out {
    background: none;
}

.dashboard_content {
    position: absolute;
    height: 100%;
    width: calc(100%-78px);
    left: 78px;
    transition: all 0.5s ease;
}

.sidebar.active ~ .dashboard_content {
    width: calc(100%-240px);
    left: 240px;
}
</style>
