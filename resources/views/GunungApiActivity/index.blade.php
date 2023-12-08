<!-- resources/views/GunungApiActivity/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="content">
        <h1>Gunung Api Activity</h1>
        <div class="mb-3">
            <a href="{{ route('gunungapiactivity.create') }}" class="btn btn-success">Tambah Data</a>
        </div>
        <table id="gunungApiTable" class="table">
            <thead>
                <tr>
                    <th>Lokasi</th>
                    <th>Deskripsi</th>
                    <th>Kedalaman</th>
                    <th>Magnitude</th>
                    <th>Waktu Kejadian</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gunungApiActivities as $activity)
                    <tr>
                        <td>{{ $activity->lokasi }}</td>
                        <td>{{ $activity->deskripsi }}</td>
                        <td>{{ $activity->kedalaman }}</td>
                        <td>{{ $activity->magnitude }}</td>
                        <td>{{ $activity->waktu_kejadian->format('Y-m-d H:i:s') }}</td>
                        <td>
                            <a href="{{ route('GunungApiActivity.edit', $activity->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('GunungApiActivity.destroy', $activity->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        // Inisialisasi DataTables pada tabel dengan id "gunungApiTable"
        $(document).ready(function() {
            $('#gunungApiTable').DataTable();
        });
    </script>
@endsection
