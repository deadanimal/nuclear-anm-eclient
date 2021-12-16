
@extends('bases')
@section('content')   

<br>
<form action="/kod_kategori_servis/" method="POST">
  @csrf
<br>
<table style="text-align: center">
<h2>KOD PROSES</h2>

<select name="kategori_servis" id="kategori_servis" >
  <option value=""> Sila pilih:</option>
 @foreach  ($kod_kategori_servis as $mo)
     <option value="{{ $mo-> id }}">{{ $mo -> nama  }}  {{ $mo -> namaE  }}</option>
 @endforeach
</select>

<table  style="text-align: center">
<thead>
  <tr align="center">
    <th>NAMA</th>
    <th>TINDAKAN</th>
  </tr>
</thead>
<tbody>  
  <tr>
  <form action="/kod_kategori_servis/" method="POST">
    @csrf
  <td> <input  name="kod" type="text" class=""></td>
  <td> <input name="nama" type="text" class=""></td>
  <td><button type="submit" value="submit">TAMBAH</button></td>
</form>
</tr>
</tbody>
<tbody id="kategori_proses_template">
</tbody>
</table>
<script>
    $(document).on('change','#kategori_servis',function(){
      $("#kategori_proses_template").empty();
      let selected = $(this).val();
      console.log(selected);
      $.ajax({
          method: "POST",
          url: "{{ url('kategori_proses_template') }}",
          data: {
              "_token": "{{ csrf_token() }}",
              "id": selected,
          },
      }).done(function(response) {
          var data = jQuery.parseJSON(response);
          $('#kategori_proses_template').html('');
          $('#kategori_proses_template').append('<tr value=""></tr>');
          $.each(data.ipt, function(index,value) {
              $('#kategori_proses_template').append(
                `<tr>
                <td>
                  <form action="detail_proses" method="POST">
                  @csrf
                  <input type="hidden" name="id" value="${value.id}" />
                  <button type="submit">${value.nama}</button>
                  </form>
                </td>
                <td>
                  
                 <a href="/spp_pusat_khidmat_servis/${value.id}/edit">Kemaskini</a>
                </td>
                </tr>`
                );
          });
      });
    });
</script>
@endsection
