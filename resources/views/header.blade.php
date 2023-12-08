<!-- resources/views/header.blade.php -->
<style>
    /* CSS Kustom untuk Header */
    .navbar-custom-menu {
        margin-right: 10px; /* Atur margin kanan sesuai kebutuhan */
    }

    .navbar-custom-menu .dropdown-menu {
        right: 0; /* Menggeser menu dropdown ke kanan */
        left: auto; /* Menonaktifkan penyesuaian ke kiri */
    }

    .user-details {
        padding: 10px;
    }
</style>

<div class="navbar-custom-menu ml-auto">
    <ul class="nav navbar-nav">
        <!-- Gambar Profil -->
        <li class="dropdown user user-menu">
            {{-- Sisipkan koneksi.php --}}
            {{-- ... (sesuaikan dengan sintaks Blade) ... --}}

            {{-- <a href="#" class="dropdown-toggle" data-toggle="dropdown"> --}}
            {{--    <img src="{{ $profileImageUrl }}" class="user-image" alt="User Image"> --}}
            {{--    <span class="hidden-xs">{{ $username }}</span> --}}
            {{-- </a> --}}
            {{-- <ul class="dropdown-menu"> --}}
            {{--    <li class="user-details"> --}}
            {{--        <p>Nama Pengguna: <strong>{{ $username }}</strong></p> --}}
            {{--        <p>Peran: <strong>{{ $role }}</strong></p> --}}
            {{--    </li> --}}
            {{-- </ul> --}}
        </li>
    </ul>
</div>
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script>
    $(document).ready(function () {
        // Saat tombol dropdown di-klik
        $(".dropdown-toggle").click(function (e) {
            e.preventDefault(); // Mencegah tindakan default dari link
            $(this).next(".dropdown-menu").slideToggle(); // Menampilkan atau menyembunyikan dropdown menu
        });
    });
</script>
