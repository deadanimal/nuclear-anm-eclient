
@extends('bases')
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
  center;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
@section('content')   

<br>
<form action="/spp_pusat_khidmat/" method="POST" id="new_servis_pusat_khidmat">
  @csrf
<br>
<table style="text-align: center">
<h2>Pusat Khidmat Table</h2>

<tr style="text-align: center">
    <td><label for="kumpulan">KUMPULAN</label></td>
    <td> <input name="kumpulan" type="text" class=""></td>
<br>
</tr>
<tr style="text-align: center">
  <td><label for="nama">NAMA</label></td>
  <td> <input name="nama" type="text" class=""></td>
<br>
</tr>
<tr style="text-align: center">
  <td><label for="namaE">NAMA LAIN</label></td>
  <td> <input name="namaE" type="text" class=""></td>
<br>
</tr>
<tr style="text-align: center">
  <td><label for="cid">CID</label></td>
  <td> <input name="cid" type="text" class=""></td>
</tr>

<br>

</table>
<br>
<button type="submit" value="submit">TAMBAH PUSAT KHIDMAT</button>

</form>

<table style="text-align: center">
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th>
    <th>Description</th>
    {{-- <th>Created time</th>
    <th>Update time</th> --}}
    <th>Update</th>
  </tr>
  @foreach ($spp_pusat_khidmat as $spk)
  <tr style="text-align: center">
    <td><ul> {{ $spk -> kod}}</ul></td>
    <td><ul> {{ $spk -> kumpulan}}</ul></td>
    <td><ul> {{ $spk -> nama}}</ul></td>
    <td><ul> {{ $spk -> namaE}}</ul></td>
    <td><button type='button' onclick='productDelete(this);' class='btn btn-default'>" + "<span class='glyphicon glyphicon-remove' /></button></td>
    {{-- <td> <a href="{{ route('spp_pusat_khidmat.edit',$spp_pusat_khidmat->id) }}">Kemaskini</a></td> --}}
    </tr>
@endforeach
</table>
<script>
  function productDelete(ctl) {
    $(ctl).parents("tr").remove();
}
</script>
@endsection
