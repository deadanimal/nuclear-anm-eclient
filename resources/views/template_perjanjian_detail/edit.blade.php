
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
<h2>KOD PERJANJIAN</h2>
{{-- 
<table style="text-align: center">
  <tr>
    <th>KOD</th>
    <th>NAMA</th>
    <th>BIL</th>
    <th>KETERANGAN</th>
    <th>TINDAKAN</th>
  </tr>
  <tr>
    <form action="/template_perjanjian_detail/{{ $template_perjanjian_detail -> id }}" method="POST">
      @method('PUT')
      @csrf
       <td style="max-width: 10px"><ul> <input type="text" name="tpd_urutan" value="{{ $template_perjanjian_detail -> tpd_urutan}}"></ul></td>
      <td style="max-width: 10px" ><ul> <input type="text" name="tpd_level" value="{{ $template_perjanjian_detail -> tpd_level}}"></ul></td>
      <td style="max-width: 10\5px" ><ul> <input type="text" name="tpd_bil" value="{{ $template_perjanjian_detail -> tpd_bil}}"></ul></td> 
      <td style="max-width: 550px"><ul> <input type="text" name="tpd_keterangan" value="{{ $template_perjanjian_detail -> tpd_keterangan}}"> </ul></td>
      <td>
    <td><button type="submit" value="submit">KEMASKINI</button></td>
  </form>
  </tr>
  
</table> --}}
<table>
<tr>
  <form action="/template_perjanjian_detail/{{ $template_perjanjian_detail -> id }}" method="POST">
    @method('PUT')
    @csrf
    <tr>
      <td style="max-width: 10px">
        <label for="tpd_urutan">KOD</label></td><br>
        <td>
        <input type="text" value="{{ $template_perjanjian_detail -> tpd_urutan}}"></td>
      </tr>
    <tr>
      <td style="max-width: 10px" >
        <label for="tpd_level">NAMA</label></td><br>
        <td>
        <input type="text" value="{{ $template_perjanjian_detail -> tpd_level}}"></td>
      </tr>
    <tr>
      <td style="max-width: 10\5px" >
        <label for="tpd_bil">BIL</label></td><br>
        <td>
        <input type="text" value="{{ $template_perjanjian_detail -> tpd_bil}}"></td>
      </tr>
    <tr>
      <td style="max-width: 100%">
        <label for="tpd_keterangan">KETERANGAN</label></td><br>
        <td>
        <textarea style="height: 500px; width: 500px; text-align:top" type="text" value="{{ $template_perjanjian_detail -> tpd_keterangan}}">{{ $template_perjanjian_detail -> tpd_keterangan}}</textarea></td>
      </tr>
    <tr>
      </tr>
  <td><button type="submit" value="submit">KEMASKINI</button></td>
</form>
</tr> 

</table>
@endsection
