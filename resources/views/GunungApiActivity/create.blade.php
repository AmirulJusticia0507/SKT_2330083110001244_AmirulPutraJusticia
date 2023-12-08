<!-- resources/views/gunungapiactivity/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="content">
        <h1>Form Input Gunung Api Activity</h1>
        <form action="{{ route('GunungApiActivity.store') }}" method="POST">
            @csrf
            <label for="lokasi">Lokasi:</label>
            <input type="text" name="lokasi" required>

            <label for="deskripsi">Deskripsi:</label>
            <textarea name="deskripsi" required></textarea>

            <label for="kedalaman">Kedalaman:</label>
            <input type="number" name="kedalaman" required>

            <label for="magnitude">Magnitude:</label>
            <input type="number" step="0.1" name="magnitude" required>

            <button type="submit">Simpan</button>
        </form>
    </div>
@endsection
