@extends('layouts.admin.main')

@section('content')

<div class="col-lg-12">

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Data Kelurahan</h5>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <a href="{{route('tambah-kelurahan')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Tambah Kelurahan</a>
        </div>
        <!-- Table with stripped rows -->
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Kelurahan</th>
              <th scope="col">Kecamatan</th>
              <th scope="col">Kota</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($kelurahan as $data)
            <tr>
              <th scope="row">{{++$i}}</th>
              <td>{{$data->kelurahan}}</td>
              <td>{{$data->kecamatan}}</td>
              <td>{{$data->kota}}</td>
              <td>
                <a href="/admin/edit-kelurahan/{{$data->id}}" class="btn btn-success">Edit</a>
                <a href="/hapus-kelurahan/{{$data->id}}" class="btn btn-danger" title="Hapus" data-toggle="tooltip" onclick="return confirm('Anda yakin mau menghapus kelurahan {{$data->kelurahan}} ?')"> Hapus</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <!-- End Table with stripped rows -->
      </div>
    </div>
</div>
@stop
