<!-- resources/views/GunungApiActivity/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="content">
        <h1>Form Edit Gunung Api Activity</h1>
        <form action="{{ route('GunungApiActivity.update', $GunungApiActivity->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="lokasi">Lokasi:</label>
            <input type="text" name="lokasi" value="{{ $GunungApiActivity->lokasi }}" required>

            <label for="deskripsi">Deskripsi:</label>
            <textarea name="deskripsi" required>{{ $GunungApiActivity->deskripsi }}</textarea>

            <label for="kedalaman">Kedalaman:</label>
            <input type="number" name="kedalaman" value="{{ $GunungApiActivity->kedalaman }}" required>

            <label for="magnitude">Magnitude:</label>
            <input type="number" step="0.1" name="magnitude" value="{{ $GunungApiActivity->magnitude }}" required>

            <button type="submit">Update</button>
        </form>
    </div>
@endsection
