<!-- resources/views/sidebar.blade.php -->
<style>
    /* CSS untuk spinner */
    .page-spinner {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.8);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .spinner {
        border: 4px solid rgba(0, 0, 0, 0.3);
        border-radius: 50%;
        border-top: 4px solid #007bff; /* Warna utama */
        width: 40px;
        height: 40px;
        animation: spin 2s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
}

/* CSS untuk tombol */
.myButton {
    box-shadow: 3px 4px 0px 0px #899599;
    background:linear-gradient(to bottom, #ededed 5%, #bab1ba 100%);
    background-color:#ededed;
    border-radius:15px;
    border:1px solid #d6bcd6;
    display:inline-block;
    cursor:pointer;
    color:#3a8a9e;
    font-family:Arial;
    font-size:17px;
    padding:7px 25px;
    text-decoration:none;
    text-shadow:0px 1px 0px #e1e2ed;
}

.myButton:hover {
    background:linear-gradient(to bottom, #bab1ba 5%, #ededed 100%);
    background-color:#bab1ba;
}

.myButton:active {
    position:relative;
    top:1px;
}
</style>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Tambahkan konten sidebar AdminLTE di sini -->
    <a href="{{ url('index.php') }}" class="brand-link">
        <span class="brand-text font-weight-light">SisKin OB BPRS <img src="{{ asset('img/logo_white.png') }}" alt="" style="width:80px;"></span>
    </a>
    <div class="sidebar">
        <ul class="nav nav-pills nav-sidebar flex-column nowrap" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ url('index.php?page=dashboard') }}" class="nav-link {{ isPageActive('dashboard') }}">
                    <i class="fa fa-tachometer-alt nav-icon"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="fas fa-edit nav-icon"></i>
                    <p>
                        Settings
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('GunungApiActivity.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Gunung Api Activity</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link logout-link">
                    <i class="fas fa-sign-out-alt nav-icon"></i>
                    <p>Logout</p>
                </a>
            </li>
        </ul>
    </div>
</aside>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Skrip JavaScript untuk mengontrol pushmenu -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const body = document.querySelector("body");
        const pageSpinner = document.getElementById("page-spinner");

        // Function to toggle the sidebar
        const toggleSidebar = () => {
            body.classList.toggle("sidebar-collapse");
            body.classList.toggle("sidebar-open");
        };

        // Add event listener to the sidebar button
        const sidebarButton = document.querySelector(".nav-link[data-widget='pushmenu']");
        sidebarButton.addEventListener("click", function (e) {
            e.preventDefault();
            toggleSidebar();
        });

        // Add event listener to the caret-down icons for submenu
        const submenuToggles = document.querySelectorAll(".nav-item.has-treeview > .nav-link > .fas.fa-caret-down");
        submenuToggles.forEach((toggle) => {
            toggle.addEventListener("click", function (e) {
                e.preventDefault();
                const parent = toggle.parentElement.parentElement;
                parent.classList.toggle("menu-open");
            });
        });

        // Function to show the spinner
        function showSpinner() {
            pageSpinner.style.display = "flex";
        }

        // Function to hide the spinner
        function hideSpinner() {
            pageSpinner.style.display = "none";
        }

        // Add event listener to each navigation link that will display the spinner
        const navLinks = document.querySelectorAll(".nav-link");
        navLinks.forEach(function (link) {
            link.addEventListener("click", function () {
                showSpinner();
            });
        });

        // Hide the spinner when a new page is loaded
        window.addEventListener("load", function () {
            hideSpinner();
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    // Function to show SweetAlert logout confirmation
    function confirmLogout() {
        Swal.fire({
            title: 'Logout Confirmation',
            text: 'Are you sure you want to logout?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect to logout.php page if the user clicks "Yes"
                window.location.href = "{{ url('logout.php') }}";
            }
        });
    }

    // Add event listener to the "Logout" link
    const logoutLink = document.querySelector(".logout-link");
    logoutLink.addEventListener("click", function (e) {
        e.preventDefault();
        confirmLogout();
    });
});
</script>
