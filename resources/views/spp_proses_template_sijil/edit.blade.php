
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
    <th>NAMA PROSES</th>
    <th>FLAG WAJIB</th>
    <th>URL PAUTAN</th>
    <th>TINDAKAN</th>
  </tr>
  </thead>
  <tbody>
    <form action="/spp_proses_template_detail/{{ $spp_proses_template_detail->id }}" method="POST">
    @method('PUT')
    @csrf
    <tr>
      <input hidden type="text" name="idTemplate" value="{{ $spp_proses_template_detail -> idTemplate  }}">
      <td> <input type="text" name="urutan" value="{{ $spp_proses_template_detail -> urutan  }}"></td>
      <td> <input type="text" name="namaProses" value="{{ $spp_proses_template_detail -> namaProses}}"></td>
      <td> <input type="text" name="flagWajib" value="{{ $spp_proses_template_detail -> flagWajib}}"> </td>
      <td> <input type="text" name="href" value="{{ $spp_proses_template_detail -> href  }}"></td>
      <td><button type="submit" value="submit">KEMASKINI</button></td>
    </tr>
    </tbody>
</form>

</table>
@endsection
