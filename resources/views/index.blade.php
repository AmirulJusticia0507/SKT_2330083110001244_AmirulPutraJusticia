<!-- resources/views/index.blade.php -->
@extends('layouts.app')

@section('content')
    <!-- Konten Utama -->
    <main class="content">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>
        <!-- ... (konten lainnya) ... -->
    </main>
@endsection

@section('scripts')
    <!-- Tambahkan skrip khusus untuk halaman ini di sini -->
    <script>
        // Contoh skrip khusus untuk halaman Dashboard
        document.addEventListener("DOMContentLoaded", function () {
            // ... (Tambahkan skrip khusus Anda di sini) ...
        });

        // Skrip untuk menambahkan event click pada tombol pushmenu
        $(document).ready(function() {
            $('.nav-link[data-widget="pushmenu"]').on('click', function() {
                // Toggle class 'sidebar-collapse' pada elemen body
                $('body').toggleClass('sidebar-collapse');
            });
        });
    </script>
@endsection
