@extends('bases')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@section('content')     

<section class="content" style="padding-left: 0px; padding-top: 20px">
  <form method="POST" action="/spp_profil_syarikat/">
    <div>
      <div class="row">
        <div class="col card">
          <div class="form-group">
            @csrf
            <div>
              <label style=" padding-right: 20px" for="noSyarikat">No Syarikat :</label>
              <input class="form-control" value=""  type="text" id="noSyarikat" name="noSyarikat" >
              <label for="idKategoriSyarikat">Kategori Syarikat:</label>
              <select name="idKategoriSyarikat" id="kod_negeri_syarikat">
                @foreach ($spp_profil_syarikat1 as $kod)
                  <option value="{{ $kod -> id }}">{{ $kod -> nama }}</option>
                @endforeach
                </select>
                <br>
              <label style=" padding-right: 20px" for="nama">Nama Syarikat :</label>
              <input class="form-control" value=""  type="text" id="nama" name="nama" >
              <label style=" padding-right: 20px" for="alamat1">Alamat</label>
              <input class="form-control" placeholder="alamat"  type="text" id="alamat1" name="alamat1" > <br>
              <input class="form-control" placeholder="alamat"  type="text" id="alamat" name="alamat" > <br>
              <label style=" padding-right: 20px" for="poskod"></label>Poskod :<br>
              <input class="form-control" value=""  type="number" id="poskod" name="poskod" >

              <label for="idKategoriSyarikat">Negeri:</label>
              <select name="idKategoriSyarikat" id="kod_negeri_syarikat">
                @foreach ($spp_profil_syarikat2 as $neg)
                  <option value="{{ $neg -> id }}">{{ $neg -> nama }}</option>
                @endforeach
                </select>
                <br>

                <label for="idDaerah">Kategori Syarikat:</label>
                <select name="idDaerah" id="id_daerah">

              <label style=" padding-right: 20px" for="noTel">No Telefon :</label>
              <input class="form-control" placeholder="catatan"  type="text" id="noTel" name="noTel" > <br>
              <label style=" padding-right: 20px" for="noFax">No Fax :</label>
              <input class="form-control" placeholder="catatan"  type="text" id="noFax" name="noFax" > <br>
              <label style=" padding-right: 20px" for="email">Emel Syarikat :</label>
              <input class="form-control" placeholder="catatan"  type="email" id="email" name="email" > <br>
            </div>
            <input type="submit" value="Submit"><br>
          </div>
        </div>
      </div>
    </div>
    <br>
  <br>
  <br>
  </form>


<script type="text/javascript">
  $(document).ready(function(){
    $(document).on('change','#kod_negeri_syarikat',function(){
      $("#id_daerah").empty();
      let selected = $(this).val();
      $.ajax({
          method: "POST",
          url: "{{ url('/daerah') }}",
          data: {
              "_token": "{{ csrf_token() }}",
              "id": selected,
          },
      }).done(function(response) {
          var data = jQuery.parseJSON(response);
          $('#id_daerah').html('');
          $('#id_daerah').append('<option value="">Pilih...</option>');
          $.each(data.dae, function(index,value) {
            $('#id_daerah').append('<option value="'+value.id+'">'+value.nama+'</option>');
            });
            });
            });
                });
</script>

</section>

@endsection

