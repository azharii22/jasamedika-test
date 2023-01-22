@extends('layouts.operator.main')

@section('content')

<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Input Pasien Baru</h5>
<!-- General Form Elements -->
    <form action="/post-pasien" method="POST">
    @csrf
    <div class="row mb-3">
      <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
      <div class="col-sm-10">
        <input type="text" name="nama" class="form-control">
      </div>
    </div>
    <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
          <input type="text" name="alamat" class="form-control">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label">No. Telepon</label>
        <div class="col-sm-10">
          <input type="number" name="no_telp" class="form-control">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label">RT</label>
        <div class="col-sm-10">
          <input type="number" name="rt" class="form-control">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label">RW</label>
        <div class="col-sm-10">
          <input type="number" name="rw" class="form-control">
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-10">
          <select class="form-select" name="jk" aria-label="Default select example">
            <option selected>Pilih Jenis Kelamin</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-10">
          <input type="date" name="tgl_lahir" class="form-control">
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Kelurahan</label>
        <div class="col-sm-10">
          <select class="form-select" name="id_kel" aria-label="Default select example">
            <option selected>Pilih Kelurahan</option>
            @foreach ($kelurahan as $data)
            <option value="{{$data->id}}">{{$data->kelurahan}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
  </form>
  <!-- End General Form Elements -->
</div>
</div>

</div>
    </div>
</section>

    {{-- <form action="/post-pasien" method="POST">
        @csrf
        <div class="form-group row">
          <label for="input1" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nama" placeholder="Nama Pasien">
          </div>
        </div>
        <div class="form-group row">
          <label for="input2" class="col-sm-2 col-form-label">Alamat</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="alamat" placeholder="Alamat">
          </div>
        </div>
        <div class="form-group row">
            <label for="input3" class="col-sm-2 col-form-label">No. Telepon</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="no_telp" placeholder="Nomor Telepon">
            </div>
        </div>
        <div class="form-group row">
            <label for="input3" class="col-sm-2 col-form-label">RT</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="rt" placeholder="RT">
            </div>
        </div>
        <div class="form-group row">
            <label for="input3" class="col-sm-2 col-form-label">RW</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="rw" placeholder="RW">
            </div>
        </div>
        <div class="form-group row">
            <label for="input3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
              <select name="jk" class="form-control">
              <option> Pilih Jenis Kelamin </option>
              <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
              </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="input3" class="col-sm-2 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" name="tgl_lahir">
            </div>
        </div>
        <div class="form-group row">
            <label for="input3" class="col-sm-2 col-form-label">Kelurahan</label>
            <div class="col-sm-10">
              <select name="id_kel" class="form-control">
              <option> Pilih Kelurahan </option>
              @foreach ($kelurahan as $data)
              <option value="{{$data->id}}">{{$data->kelurahan}}</option>
              @endforeach
              </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form> --}}

@endsection
