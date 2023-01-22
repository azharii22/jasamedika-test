@extends('layouts.operator.main')

@section('content')

<title>Operator Jasamedika</title>

<div class="col-lg-12">

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Data Pasien</h5>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <a href="{{route('tambah-pasien')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Tambah Pasien</a>
        </div>
        <!-- Table with stripped rows -->
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Alamat</th>
              <th scope="col">No. Telpon</th>
              <th scope="col">RT</th>
              <th scope="col">RW</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Tanggal Lahir</th>
              <th scope="col">Kelurahan</th>
              {{-- <th scope="col">Aksi</th> --}}
            </tr>
          </thead>
          <tbody>
            @foreach ($pasien as $data)
            <tr>
              <th scope="row">{{++$i}}</th>
              <td>{{$data->nama}}</td>
              <td>{{$data->alamat}}</td>
              <td>{{$data->no_telp}}</td>
              <td>{{$data->rt}}</td>
              <td>{{$data->rw}}</td>
              <td>{{$data->jk}}</td>
              <td>{{$data->tgl_lahir}}</td>
              <td>{{$data->kelurahan->kelurahan}}</td>
              <td>{{$data->aksi}}</td>
              <td>
                <a href="/edit-pasien/{{$data->id}}" class="btn btn-success">Edit</a>
                <a href="/cetak/pasien/{{$data->id}}" class="btn btn-warning">Cetak</a>
                <a href="/hapus-pasien/{{$data->id}}" class="btn btn-danger" title="Hapus" data-toggle="tooltip" onclick="return confirm('Anda yakin mau menghapus pasien {{$data->nama}} ?')"> Hapus</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <!-- End Table with stripped rows -->
      </div>
    </div>
</div>
@endsection
