@extends('admin.layouts.adminapp')

@section('content')
    <div class="container">
        <h2>Tambah Catatan</h2>
        <form action="{{ route('admin.note.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" name="judul" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="priority" class="form-label">Prioritas</label>
                <select name="priority" class="form-control" required>
                    <option value="default">Default</option>
                    <option value="very_low">Sangat Rendah</option>
                    <option value="low">Rendah</option>
                    <option value="medium">Sedang</option>
                    <option value="high">Tinggi</option>
                    <option value="very_high">Sangat Tinggi</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="tanda" class="form-label">Tanda</label>
                <select name="tanda" class="form-control" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="shared" class="form-label">Dibagikan?</label>
                <select name="shared" class="form-control" required>
                    <option value="1">Ya</option>
                    <option value="0">Tidak</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="user_id" class="form-label">User ID</label>
                <input type="number" name="user_id" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
@endsection
