@extends('layouts.0179app',['title'=>'Tambah'])

@section('content')

<h1 class="text-center mb-4">Tambah Mahasiswa</h1>
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-8">
            <div class="card">
                <div class="card-body">

    <form action="/insertdata" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
          <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nim</label>
            <input type="number" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
            <input type="text" name="tempatlahir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
            <select class="form-select" name="jeniskelamin" aria-label="Default select example">
                <option selected>Pilih Jenis Kelamin</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Kewarganegaraan</label>
            <input type="text" name="kewarganegaraan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Umur</label>
            <input type="text" name="umur" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>

      </form>

</div>

@endsection
