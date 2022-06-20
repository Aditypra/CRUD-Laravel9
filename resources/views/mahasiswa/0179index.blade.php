@extends('layouts.0179app',['title'=>'Mahasiswa'])

@section('content')

<section>

<h1 class="text-center mb-4">CRUD LARAVEL 9</h1>
    <div class="container">
        <a href="/tambah" class="text-center mb-2 btn btn-primary">Tambah <i class="bi bi-person-plus"></i></a>
        <a href="/exportpdf" class="text-center mb-2 btn btn-outline-danger">Export PDF <i class="bi bi-file-earmark-pdf"></i></a>
        <div class="row">
            @if ($message = Session::get('succes'))
            <div class="alert alert-success" role="alert">
            {{ $message }}
            </div>

            @endif

            <table class="table table-striped">
                <thead class="table-dark">
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Kewarganegaraan</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data as $row)

                    <tr>

                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->nim }}</td>
                        <td>{{ $row->alamat }}</td>
                        <td>{{ $row->tempatlahir }}</td>
                        <td>{{ $row->jeniskelamin }}</td>
                        <td>{{ $row->kewarganegaraan }}</td>
                        <td>{{ $row->umur }}</td>
                        <td>
                            <a href="/tampildata/{{ $row->id }}" class="btn btn-info">Edit <i class="bi bi-pencil-square"></i></a>
                            <button type="button" class="btn btn-danger delete" data-id="{{ $row->id }}" data-nama="{{ $row->nama }}">Hapus <i class="bi bi-trash3"></i></button>
                        </td>
                    </tr>

                    @endforeach


                </tbody>
              </table>

        </div>
    </div>

</section>

@endsection
