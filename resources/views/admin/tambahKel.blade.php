@extends('layouts.admin.main')

@section('content')

<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Input Kelurahan Baru</h5>
    <!-- General Form Elements -->
    <form action="/post-kelurahan" method="POST">
    @csrf
    <div class="row mb-3">
      <label for="inputText" class="col-sm-2 col-form-label">Kelurahan</label>
      <div class="col-sm-10">
        <input type="text" name="kelurahan" class="form-control">
      </div>
    </div>
    <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label">Kecamatan</label>
        <div class="col-sm-10">
          <input type="text" name="kecamatan" class="form-control">
        </div>
      </div><div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label">Kota</label>
        <div class="col-sm-10">
          <input type="text" name="kota" class="form-control">
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
@endsection
