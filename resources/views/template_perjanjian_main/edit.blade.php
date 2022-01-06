
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

<table style="text-align: center">
  <tr>
    <th>KOD</th>
    <th>NAMA</th>
    <th>TINDAKAN</th>
  </tr>
  <tr>
    <form action="/template_perjanjian_main/{{ $template_perjanjian_main -> id }}" method="POST" id="new_servis_pusat_khidmat">
      @method('PUT')
      @csrf
    <td> <input value="{{ $template_perjanjian_main -> tpm_id }}" name="tpm_id" type="text" class=""></td>
    <td> <input value="{{ $template_perjanjian_main -> tpm_nama }}" name="tpm_nama" type="text" class=""></td>
    <td><button type="submit" value="submit">KEMASKINI</button>
      {{-- <form action="/template_perjanjian_main/{{ $template_perjanjian_main -> id }}" method="POST">
        @csrf 
        @method('DELETE')
        <button type="submit"><span class="fas fa-bin"></span></button>
        </form> --}}
    </td>
  </form>
  </tr>
</table>
@endsection
