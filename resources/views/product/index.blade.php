@extends('template')

@section('title','daftar produk')

@section('content')
<div class="col-3">
	        <span class="float-left">{{ session('msg') }}</span>
	        <a href="/product/create" class="btn btn-secondary float-right">Tambah</a><br /><br />
        <table class="table table-bordered table-striped">
          <tr>
            <th>Nama</th>
            <th>Harga</th>
            <th>Aksi</th>
          </tr>
          @foreach($list as $d)
          <tr>
            <td>{{ $d->name }}</td>
            <td>{{ $d->price }}</td>
            <td>
              <a href="/product/{{ $d->id }}/edit" class="btn btn-primary">Edit</a>
	              <form method="post" action="/product/{{ $d->id }}" style="display:inline" onsubmit="return confirm('Yakin hapus?')">
	                @csrf
	                @method('DELETE')
	                <button class="btn btn-danger">Hapus</button>
	              </form>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
@endsection
