
@extends('bases')
<style>

</style>
@section('content')   

<form action="carian_kakitangan" method="POST">
  @csrf
  <label for="Bio_Nama">Nama</label>
<input name="Bio_Nama" type="text" placeholder="Search..">

<br>
<label for="idPkhidmat">Pusat Khidmat </label>

<select name="idPkhidmat" >
  <option value="">Sila pilih</option>
@foreach ($psm_biodata1 as $kod)
  <option value="{{ $kod -> id }}">{{ $kod -> kumpulan }}-{{ $kod -> nama }}</option>
@endforeach
</select>
<button type="submit" value="submit">Cari</button>
</form>
<a href="/psm_biodata/create">TAMBAH KAKITANGAN</a>


@endsection
