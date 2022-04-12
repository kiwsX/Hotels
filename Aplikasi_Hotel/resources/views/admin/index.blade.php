@extends('layout.admin',['title'=>'Admin'])

@section('content-header')
    <h1 class="m-0"><i class="fas fa-users"></i>User Admin</h1>
@endsection

@section('content')
    <x-status/>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <x-btn-create :link="route('admin.create')"/>
            </div>
            <div class="col">
                <x-search />
            </div>
        </div>
    </div>
</div>
    <div class="card">
        <div class="card-body p-0">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama User</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach($data as $row)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$row->nama}}</td>
                        <td>{{$row->username}}</td>
                        <td>{{$row->role}}</td>
                        <td>
                            <x-btn-edit :link="route('admin.edit',['admin'=>$row->id])"/>
                            <x-btn-delete :link="route('admin.destroy',['admin'=>$row->id])"/>
                        </td>
                    </tr>
                    @endforeach
                </thead>
            </table>
        </div>
    </div>
@endsection

@section('modal')
    <x-modal-delete/>
@endsection
