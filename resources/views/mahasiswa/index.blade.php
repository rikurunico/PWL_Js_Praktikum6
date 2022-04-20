@extends('mahasiswa.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input Mahasiswa</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <form action="{{ url('/search') }}" method="get">
                <div class="form-group row">
                    <div class="col-md-6">
                        <input value="{{ request('search') }}" type="text" name="cari" class="form-control" placeholder="Search">
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<table class="table table-bordered">
    <tr>
        <th>Nim</th>
        <th>Nama</th>
        <th>Foto</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        
        <th width="280px">Action</th>
    </tr>
    @foreach ($mahasiswa as $mhs)
    <tr>
        <td>{{ $mhs ->nim }}</td>
        <td>{{ $mhs ->nama }}</td>
        <td><img width="100" height="100" src="{{ asset('storage/'.$mhs->foto_mahasiswa) }}"></td>
        <td>{{ $mhs ->kelas->nama_kelas }}</td>
        <td>{{ $mhs ->jurusan }}</td>
        <td>{{ $mhs ->email }}</td>
        <td>{{ $mhs ->alamat }}</td>
        <td>{{ Carbon\Carbon::parse($mhs ->tanggal_lahir)->format('d-m-Y') }}</td>
        <td>
        <form action="{{ route('mahasiswa.destroy',['mahasiswa'=>$mhs->nim]) }}" method="POST">
            <a class="btn btn-info" href="{{ route('mahasiswa.show',$mhs->nim) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('mahasiswa.edit',$mhs->nim) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
            <a class="btn btn-warning" href="{{ route('nilai',$mhs->id) }}">Nilai</a>
        </td>
    </tr>
    @endforeach
    </table>
    <div class="d-flex">
        {{ $mahasiswa->links() }}
    </div>
@endsection