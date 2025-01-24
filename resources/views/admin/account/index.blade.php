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
                <tr id="1">
                    <td><span class="tabledit-span tabledit-identifier">1</span><input
                            class="tabledit-input tabledit-identifier" type="hidden" name="id" value="1" disabled="">
                    </td>

                    <td class="tabledit-view-mode"><span class="tabledit-span">0001</span><input
                            class="tabledit-input form-control input-sm" type="text" name="id" value="0001"
                            style="display: none;" disabled=""></td>

                    <td class="tabledit-view-mode"><span class="tabledit-span">Davy</span><input
                            class="tabledit-input form-control input-sm" type="text" name="name" value="davy"
                            style="display: none;" disabled=""></td>

                    <td class="tabledit-view-mode"><span class="tabledit-span">XI-PPL 2</span><input
                            class="tabledit-input form-control input-sm" type="text" name="kelas" value="xi-ppl-2"
                            style="display: none;" disabled=""></td>

                    <td class="tabledit-view-mode"><span class="tabledit-span">demo@example.com</span><input
                            class="tabledit-input form-control input-sm" type="text" name="email"
                            value="demo@example.com" style="display: none;" disabled=""></td>

                    <td class="tabledit-view-mode"><span class="tabledit-span">admin123</span><input
                            class="tabledit-input form-control input-sm" type="text" name="password" value="admin123"
                            style="display: none;" disabled=""></td>

                    <td class="tabledit-view-mode"><span class="tabledit-span">0812345678</span><input
                            class="tabledit-input form-control input-sm" type="text" name="no_telepon"
                            value="0812345678" style="display: none;" disabled=""></td>

                    <td style="white-space: nowrap; width: 15%;">
                        <div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                            <div class="btn-group btn-group-sm" style="float: none;">

                                <button type="button" class="tabledit-edit-button btn btn-sm btn-info"
                                    style="float: none; margin: 5px;"><span class="ti-pencil"></span></button>

                                <button type="button" class="tabledit-delete-button btn btn-sm btn-info"
                                    style=" float: none; margin: 5px; "><span class="ti-trash"></span></button>

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
            </tbody>
        </table>
    </div>
</div>
</div>
<!-- End col -->
@endsection