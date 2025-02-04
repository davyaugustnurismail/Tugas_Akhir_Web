@extends('admin.layouts.adminapp')

@section('content')
    <div class="container">
        <h2>Edit Catatan</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('admin.note.update', $note->note_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" name="judul" class="form-control" value="{{ old('judul', $note->judul) }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea name="description" class="form-control" required>{{ old('description', $note->description) }}</textarea>
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" value="{{ old('tanggal', $note->tanggal) }}" required>
            </div>
            <div class="mb-3">
                <label for="priority" class="form-label">Prioritas</label>
                <select name="priority" class="form-control" required>
                    <option value="default" {{ old('priority', $note->priority) == 'default' ? 'selected' : '' }}>Default</option>
                    <option value="very_low" {{ old('priority', $note->priority) == 'very_low' ? 'selected' : '' }}>Sangat Rendah</option>
                    <option value="low" {{ old('priority', $note->priority) == 'low' ? 'selected' : '' }}>Rendah</option>
                    <option value="medium" {{ old('priority', $note->priority) == 'medium' ? 'selected' : '' }}>Sedang</option>
                    <option value="high" {{ old('priority', $note->priority) == 'high' ? 'selected' : '' }}>Tinggi</option>
                    <option value="very_high" {{ old('priority', $note->priority) == 'very_high' ? 'selected' : '' }}>Sangat Tinggi</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="tanda" class="form-label">Tanda</label>
                <select name="tanda" class="form-control" required>
                    @for ($i = 1; $i <= 6; $i++)
                        <option value="{{ $i }}" {{ old('tanda', $note->tanda) == $i ? 'selected' : '' }}>{{ $i }}</option>
                    @endfor
                </select>
            </div>
            <div class="mb-3">
                <label for="shared" class="form-label">Dibagikan?</label>
                <select name="shared" class="form-control" required>
                    <option value="1" {{ old('shared', $note->shared) ? 'selected' : '' }}>Ya</option>
                    <option value="0" {{ old('shared', $note->shared) === 0 ? 'selected' : '' }}>Tidak</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="user_id" class="form-label">User</label>
                <select name="user_id" class="form-control" required>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ old('user_id', $note->user_id) == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection