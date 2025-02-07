@extends('admin.layouts.adminapp')
@section('breadcrumbbar')
<div class="row align-items-center">
    <div class="col-md-8 col-lg-8">
        <h4 class="page-title">CRM</h4>
        <div class="breadcrumb-list">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Account</li>
            </ol>
        </div>
    </div>
</div>
@endsection

@section('content')

<div class="row">
    <!-- Start col -->

    <button type="button" class="btn btn-rounded btn-primary">Tambah Akun</button>
    <div class="table-responsive">
        <table class="table table-striped table-bordered mt-3" id="edit-btn">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>No Telepon</th>
                </tr>
            </thead>
            <tbody>
            <?php $no = 1; ?>
              @foreach ($users as $user)  
                <tr id="1">
                    <td><span class="tabledit-span tabledit-identifier">{{ $no++ }}</span><input
                            class="tabledit-input tabledit-identifier" type="hidden" name="no" disabled="">
                    </td>

                    <td class="tabledit-view-mode"><span class="tabledit-span">{{ $user->id }}</span><input
                            class="tabledit-input form-control input-sm" type="text" name="id" value="id"
                            style="display: none;" disabled=""></td>

                    <td class="tabledit-view-mode"><span class="tabledit-span"> {{$user->name}} </span><input
                            class="tabledit-input form-control input-sm" type="text" name="name" value="name"
                            style="display: none;" disabled=""></td>

                    <td class="tabledit-view-mode"><span class="tabledit-span">{{ $user->email }}</span><input
                            class="tabledit-input form-control input-sm" type="text" name="email" value="email"
                            style="display: none;" disabled=""></td>

                    <td class="tabledit-view-mode"><span class="tabledit-span">{{ $user->password }}</span><input
                            class="tabledit-input form-control input-sm" type="text" name="password" value="password"
                            style="display: none;" disabled=""></td>

                    <td style="white-space: nowrap; width: 15%;">
                        <div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                            <div class="btn-group btn-group-sm" style="float: none;">

                                <a type="button" class="tabledit-edit-button btn btn-sm btn-info"
                                    style="float: none; margin: 5px;" href="{{ route('admin.account.edit', $user->id) }}"><span class="ti-pencil"></span></a>

                            <form action="{{ route('admin.account.destroy', $user->id) }}" method="POST" style="display: inline-block">
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