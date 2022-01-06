
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
<form action="/spp_pusat_khidmat/{{ $spp_pusat_khidmat -> id}}" method="POST" id="new_servis_pusat_khidmat">
  @method('PUT')
  @csrf
<br>
<table style="text-align: center">
<h2>Pusat Khidmat</h2>

<tr style="text-align: center">
    <td><label for="kumpulan">KUMPULAN</label></td>
    <td> 
      <input value="{{ $spp_pusat_khidmat -> kumpulan}}" name="kumpulan" type="text" class="">
      <input value="{{ $spp_pusat_khidmat -> kod}}" name="kod" type="text" class="">
    </td>
<br>
</tr>
<tr style="text-align: center">
  <td><label for="nama">NAMA</label></td>
  <td> <input value="{{ $spp_pusat_khidmat -> nama}}" name="nama" type="text" class=""></td>
<br>
</tr>
<tr style="text-align: center">
  <td><label for="namaE">NAMA LAIN</label></td>
  <td> <input value="{{ $spp_pusat_khidmat -> namaE}}" name="namaE" type="text" class=""></td>
<br>
</tr>
<tr style="text-align: center">
  <td><label for="cid">CID</label></td>
  <td> <input value="{{ $spp_pusat_khidmat -> cid}}" name="cid" type="text" class=""></td>
</tr>

<br>

</table>
<br>
<button type="submit" value="submit">KEMASKINI</button>

</form>

<table style="text-align: center">
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th>
    <th>Description</th>
    <th>Update</th>
  </tr>
  @foreach ($spp_pusat_khidmat1 as $spk)
  <tr style="text-align: center">
    <td><ul> {{ $spk -> kod}}</ul></td>
    <td><ul> {{ $spk -> kumpulan}}</ul></td>
    <td><ul> {{ $spk -> nama}}</ul></td>
    <td><ul> {{ $spk -> namaE}}</ul></td>
    <td><a href="spp_pusat_khidmat/{{ $spk -> id }}/edit">Kemaskini</a><button type='button' onclick='productDelete(this);' class='btn btn-DANGER'>BUANG<span class='glyphicon glyphicon-remove' /></button></td>
    </tr>
@endforeach
</table>
<script>
  function productDelete(ctl) {
    $(ctl).parents("tr").remove();
}
</script>
@endsection
