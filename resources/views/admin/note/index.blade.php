@extends('admin.layouts.adminapp')
@section('breadcrumbbar')
<div class="row align-items-center">
    <div class="col-md-8 col-lg-8">
        <h4 class="page-title">CRM</h4>
        <div class="breadcrumb-list">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Note</li>
            </ol>
        </div>
    </div>
</div>
@endsection

@section('content')

<div class="row">
    <!-- Start col -->

    <a type="button" class="btn btn-rounded btn-primary" href="{{ route('admin.note.create') }}">Tambah Note</a>
    <div class="table-responsive">
        <table class="table table-striped table-bordered mt-3" id="edit-btn">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id</th>
                    <th>User</th>
                    <th>Judul</th>
                    <th>Desc</th>
                    <th>Tanggal</th>
                    <th>Tanda</th>
                    <th>Priority</th>
                    <th>Shared</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
              foreach ($notes as $note)  @
                <tr id="1">
                    <td><span class="tabledit-span tabledit-identifier">{{ $no++ }}</span><input
                            class="tabledit-input tabledit-identifier" type="hidden" name="no" disabled="">
                    </td>

                    <td class="tabledit-view-mode"><span class="tabledit-span">{{ $note->note_id }}</span><input
                            class="tabledit-input form-control input-sm" type="text" name="id" value="0001"
                            style="display: none;" disabled=""></td>

                    <td class="tabledit-view-mode"><span class="tabledit-span"> {{$note->user->name}} </span><input
                            class="tabledit-input form-control input-sm" type="text" name="user_id" value="0001"
                            style="display: none;" disabled=""></td>

                    <td class="tabledit-view-mode"><span class="tabledit-span">{{ $note->judul }}</span><input
                            class="tabledit-input form-control input-sm" type="text" name="judul" value="davy"
                            style="display: none;" disabled=""></td>

                    <td class="tabledit-view-mode"><span class="tabledit-span">{{ $note->description }}</span><input
                            class="tabledit-input form-control input-sm" type="text" name="desc" value="xi-ppl-2"
                            style="display: none;" disabled=""></td>

                    <td class="tabledit-view-mode"><span class="tabledit-span">{{ $note->tanggal }}</span><input
                            class="tabledit-input form-control input-sm" type="text" name="tanggal"
                            value="demo@example.com" style="display: none;" disabled=""></td>

                    <td class="tabledit-view-mode"><span class="tabledit-span">{{ $note->tanda }}</span><input
                            class="tabledit-input form-control input-sm" type="text" name="tanda" value="admin123"
                            style="display: none;" disabled=""></td>

                    <td class="tabledit-view-mode"><span class="tabledit-span">{{ $note->priority }}</span><input
                            class="tabledit-input form-control input-sm" type="text" name="priority"
                            value="0812345678" style="display: none;" disabled=""></td>

                    <td class="tabledit-view-mode"><span class="tabledit-span">{{ $note->shared }}</span><input
                            class="tabledit-input form-control input-sm" type="text" name="shared"
                            value="0812345678" style="display: none;" disabled=""></td>

                    <td style="white-space: nowrap; width: 15%;">
                        <div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                            <div class="btn-group btn-group-sm" style="float: none;">

                                <a type="button" class="tabledit-edit-button btn btn-sm btn-info"
                                    style="float: none; margin: 5px;" href="{{ route('admin.note.edit', $note->note_id) }}"><span class="ti-pencil"></span></a>

                            <form action="{{ route('admin.note.destroy', $note->note_id) }}" method="POST" style="display: inline-block">
                                @csrf
                                @method('delete')
                                <button type="submit" class="tabledit-delete-button btn btn-sm btn-info"
                                style=" float: none; margin: 5px; " onclick="return confirm ('apakah anda ingin menghapus data?')">
                                <span class="ti-trash"></span>
                                </button>
                            </form>
                                

                            </div>

                            <button type="button" class="tabledit-save-button btn btn-sm btn-success"
                                style="display: none; float: none; margin: 5px;">Save</button>

                            <button type="button" class="tabledit-confirm-button btn btn-sm btn-danger"
                                style="display: none; margin: 5px; float: none;">Confirm</button>

                            <button type="button" class="tabledit-restore-button btn btn-sm btn-warning"
                                style="display: none; float: none; margin: 5px;">Restore</button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
<!-- End col -->
@endsection