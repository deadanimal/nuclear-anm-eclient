
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

<table style="text-align: center">
<h2>TEMPLATE DETAIL</h2>

<table class="table ">
  <thead class="thead-dark">
  <tr>
    <th>URUTAN</th>
    <th>LEVEL</th>
    <th>KETERANGAN</th>
    <th>TINDAKAN</th>
  </tr>
  </thead>
  <tbody>
    <form action="/spp_proses_template_sijil_detail/{{ $spp_proses_template_sijil_detail->id }}" method="POST">
    @method('PUT')
    @csrf
    <tr>
      <input hidden type="text" name="idTemplateSijil" value="{{ $spp_proses_template_sijil_detail -> idTemplateSijil  }}">
      <td> <input type="text" name="urutan" value="{{ $spp_proses_template_sijil_detail -> urutan  }}"></td>
      <td> <input type="text" name="level" value="{{ $spp_proses_template_sijil_detail -> level}}"></td>
      <td> <input type="text" name="keterangan" value="{{ $spp_proses_template_sijil_detail -> keterangan}}"> </td>
      <td><button type="submit" value="submit">KEMASKINI</button></td>
    </tr>
    </tbody>
</form>

</table>
@endsection
