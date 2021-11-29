
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
<h2>Berita</h2>


<table style="text-align: center">
  @foreach ($berita as $berita)
  <tr style="text-align: center">
   <td style="max-width: 200px">{{ $berita -> gambar}}</td> 
    <td><h4>{{ $berita -> tajuk}}</h4>
      <p>{{ $berita -> kandungan}}</p>
    </td>
  </tr>
@endforeach
</table>
{{-- <a href="/berita/create">Add berita</a> --}}



@endsection
