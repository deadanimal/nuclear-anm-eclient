@extends('bases')

@section('content')       
<section class="content">
  <form method="POST" action="/spp_staf_info/{{ $spp_staf_info -> id}}">
    @method('PUT')  
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
                    @foreach ($spp_staf_info1 as $sps)
                      <option value="{{ $sps -> id }}">{{ $sps -> nama }}</option>
                    @endforeach
                    </select>
                    <br>
                  <label style=" padding-right: 20px" for="nama">Nama Syarikat :</label>
                  <input class="form-control" value="{{ $spp_staf_info -> nama }}"  type="text" id="nama" name="nama" >
                  <label style=" padding-right: 20px" for="alamat1">Alamat</label>
                  <input class="form-control" placeholder="alamat" value="{{ $spp_staf_info -> alamat1 }}" type="text" id="alamat1" name="alamat1" > <br>
                  <input class="form-control" placeholder="alamat" value="{{ $spp_staf_info -> alamat }}" type="text" id="alamat" name="alamat" > <br>
                  <label style=" padding-right: 20px" for="poskod"></label>Poskod :<br>
                  <input class="form-control" value="{{ $spp_staf_info -> poskod }}"  type="number" id="poskod" name="poskod" >
    
                  <label for="idKategoriSyarikat">Negeri:</label>
                  <select name="idKategoriSyarikat" id="kod_negeri_syarikat">
                    @foreach ($spp_staf_info2 as $neg)
                      <option {{ $spp_staf_info-> idNegeri ==  $neg-> id ? 'selected':''  }} value="">{{ $neg -> nama }}</option>
                    @endforeach
                    </select>
                    <br>
    
                    <label for="idDaerah">Kategori Syarikat:</label>
                    <select name="idDaerah" id="id_daerah">
                      <br>
                  <label style=" padding-right: 20px" for="noTel">No Telefon :</label>
                  <input class="form-control" value="{{ $spp_staf_info -> noTel }}" placeholder=""  type="text" id="noTel" name="noTel" > <br>
                  <label style=" padding-right: 20px" for="noFax">No Fax :</label>
                  <input class="form-control" value="{{ $spp_staf_info -> noFax }}" placeholder=""  type="text" id="noFax" name="noFax" > <br>
                  <label style=" padding-right: 20px" for="email">Emel Syarikat :</label>
                  <input class="form-control" value="{{ $spp_staf_info -> email }}" placeholder="Emel"  type="email" id="email" name="email" > <br>
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

