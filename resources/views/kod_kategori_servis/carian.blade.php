
@extends('bases')
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css"> 
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@section('content')   

<table style="display:block" id="hiddenTable" class="table ">
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
    <form action="/spp_proses_template_main/" method="POST">
    @csrf
    <tr>
      {{-- <td> <input type="text" name="idTemplate" value="{{ $kod_kategori_servis->idTemplate }}"></td> --}}
      <td> <input type="text" name="urutan" value=""></td>
      <td> <input type="text" name="namaProses" value=""></td>
      <td>
        <select name="flagWajib" >
          <option value="Y" >WAJIB</option>
          <option value="T" >TIDAK WAJIB</option>
        </select>
        </td>
      <td> <input type="text" name="href" value=" "></td>
      <td><button type="submit" value="submit">TAMBAH</button></td>
    </tr>
    </tbody>
  <tbody id="myTable">
    @foreach  ($kod_kategori_servis as $mo)
  <tr>
    <td value="">{{ $mo -> urutan  }}</td>
    {{-- <td value="">{{ $mo -> tpd_urutan  }}</td> --}}
    <td value="">{{ $mo -> namaProses  }}</td>
    <td value="">{{ $mo -> flagWajib  }}</td>
    <td value="">{{ $mo -> href  }}</td>
    <td>
      <a href="/spp_proses_template_detail/{{ $mo -> id}}/edit">Kemaskini</a>
    </td>
  </tr>
  @endforeach
  </tbody>
</table>

@endsection
