@extends('base')
<style>
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 80%;
  }
  
  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    min-width: 100px;
    max-width: 150px;
  }
  
  tr:nth-child(even) {
    background-color: #dddddd;
  }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  
@section('content')

<div class="row g-0">
  <div class="col-xxl-6 px-xxl-2">
    <div class="card h-100">
      <div class="card-header bg-light py-2">
        <div class="row flex-between-center">
          <div class="col-auto">
            <h6 class="mb-0">Permohonan Sebutharga</h6>
          </div>
        </div>
      </div>
      <div class="card-body h-100">
        <div>
          <form method="POST" action="/permohonan_sebutharga_luaran/">
            @csrf
            <div class="divinput0" >
              <label for="sebutharga_jenis_permohonan">JENIS PERMOHONAN:</label>
              <select id="sebutharga_jenis_permohonan" name="sebutharga_jenis_permohonan" aria-placeholder="Jenis Permohonan" >
                <option value="dalaman">Permohonan Dalaman</option>
                <option value="luar">Permohonan Luaran</option>
              </select>
                <br>
                <br>
                <br>
                <button class="btn btn-primary" type="button" id="continue1">Continue</button>
            </div>
            <div class="divinput1" >
              <br>
              <label for="name">NAMA PELANGGAN: {{Auth()->user()->name}}</label>
              <input type="text" id="name" name="name" value="{{ Auth() ->user()->name }}" hidden>
              <table>
                <tr>
                  <td><label for="no_pelanggan">NO PELANGGAN:</label></td>
                  <td><input type="tel" id="no_pelanggan" name="no_pelanggan" ></td>
                </tr>
                <tr>
                  <td><label for="note">CATATAN:</label></td>
                  <td><textarea style=" width: 100%; height: 100px; word-break: break-all" type="text" id="note" name="note" ></textarea></td>
                </tr>
              </table>
              <button class="btn btn-primary" type="button" id="kembali">Kembali</button>
              <button class="btn btn-primary" type="button" id="continue2">Continue</button>

            </div>
             <div class="divinput2">
              <label for="pusat_perkhidmatan">Pusat Perkhimatan:</label>
              <select name="pusat_perkhidmatan" id="pusat_perkhidmatan" >
                <option value=""> Sila pilih:</option>
               @foreach  ($permohonan_sebutharga_luaran as $mo)
                   <option value="{{ $mo-> id }}">{{ $mo -> kumpulan  }} - {{ $mo -> nama  }}</option>
               @endforeach
             </select>
             <br>
             <label for="jenis_perkhidmatan">Jenis Perkhimatan:</label>
             <select name="jenis_perkhidmatan" id="jenis_perkhidmatan">
             </select>
             <br>
             <label for="harga_perkhidmatan"> Perkhimatan:</label>
             <select name="harga_perkhidmatan" id="harga_perkhidmatan">
             </select>
             <table>
               
              <tr>
                <td>
                  <select id="bedrooms">
                    <option>Choose unsur</option>
                    <option value="200">NAA: 1 unsur</option>
                    <option value="300">NAA: 2 hingga 5 unsur</option>
                    <option value="400">NAA: 6 hingga 10 unsur</option>
                    <option value="500">NAA: 11 hingga 15 unsur</option>
                    <option value="600">NAA: Lebih 15 unsur</option>
                  </select>
                </td>
                  <td><label id="price"></label><br></td>
              </tr>
            </table>
            <label for="">Analisis Unsur-unsur : Al,As,Au,Ba,Br,Cl,Eu,Fe,Ce,Co,Cr,Cs,Ga,I,Hf,K,La,Mn,Na,Nd,Sb,Sc,Ta,Tb,V,Yb,Zn</label>
            <br>
            <button class="btn btn-primary" type="button" id="continue3">Continue</button>
             </div>
             <div class="divinput3">
              <table>
                <tr>
                  <td><label for="tajuk">Tajuk:</label></td>
                  <td><input type="tel" id="tajuk" name="tajuk" ></td>
                </tr>
                <tr>
                  <td><label for="catatanT">CATATAN:</label></td>
                  <td><textarea style=" width: 100%; height: 100px; word-break: break-all" type="text" id="catatanT" name="catatanT" ></textarea></td>
                </tr>
                <tr>
                  <td>  <input type="file" id="fail_permohonan" name="filename"></td>
                </tr>
              </table>
              <button class="btn btn-primary" type="button" id="continue4">Continue</button>
             </div>
             <div class="divinput4">
             <input type="submit" value="Submit">
             </div>
           </form> 
        </div>
      </div>
    </div>
  </div>

  <script>
    $("#bedrooms").change(function() {
      if ($.isNumeric($(this).val())) {
        $("#price").html("price: RM " + $(this).val() + "/sampel"  );
        } else {
          $("#price").empty();
          };
          });
  </script>

<script>
  $(document).ready(function(){
    
  })
</script>

  <script type="text/javascript">

    //set global vars
    //TODO -> get option value using ajax and assign to global variable on document ready
    var option_a = <?php echo json_encode($permohonan_sebutharga_luaran2); ?>;
    // var option_a = [{'id':1, 'value':"A1"}, {'id':2, 'value':"A2"}, {'id':3, 'value':"A3"}]
    var option_b = [{'id':1, 'value':"B1"}, {'id':2, 'value':"B2"}, {'id':3, 'value':"B3"}]
    // var option_c = [{'id':1, 'value':"c1"}, {'id':2, 'value':"c2"}, {'id':3, 'value':"c3"}]
    var option_c = [
      {'id':1, 'value':"TESTING - TEKNIK NAA (NEUTRON ACTIVATION ANALYSIS)"}, 
      {'id':2, 'value':"TESTING - ANALISIS URANIUM (U) DAN THORIUM (Th)"}, 
      {'id':3, 'value':"TESTING - TEKNIK ICP-MS (INDUCTIVELY COUPLED PLASMA MASS SPECTROMETER)"},
      {'id':4, 'value':"TESTING - PROSES PENYEDIAAN SAMPEL"},
      {'id':5, 'value':"TESTING - TEKNIK FIMS (FLOW INJECTION MERCURY ANALYSIS SYSTEM)"},
      {'id':6, 'value':"TESTING - TEKNIK ION CHROM (ION CHROMATOGRAPHY)"},
      {'id':7, 'value':"TESTING - TEKNIK CHNS"}
      
      ];
    
    $(document).ready(function(){
      $(document).on('change','#pusat_perkhidmatan',function(){
        $("#jenis_perkhidmatan").empty();
        let selected = $(this).val();
        $.ajax({
            method: "POST",
            url: "{{ url('pusat_perkhidmatan') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                "id": selected,
            },
        }).done(function(response) {
            var data = jQuery.parseJSON(response);
            $('#jenis_perkhidmatan').html('');
            $('#jenis_perkhidmatan').append('<option value="">Pilih...</option>');
            $.each(data.aos, function(index,value) {
                $('#jenis_perkhidmatan').append('<option value="'+value.id+'" data-name="'+value.nama+'">'+value.nama+'</option>');
            });
        });
      });
            $(document).on('change','#jenis_perkhidmatan',function(){
        $("#harga_perkhidmatan").empty();
        let selected = $(this).val();
        $.ajax({
            method: "POST",
            url: "{{ url('jenis_perkhidmatan') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                "id": selected,
            },
        }).done(function(response) {
            var data = jQuery.parseJSON(response);
            $('#harga_perkhidmatan').html('');
            $('#harga_perkhidmatan').append('<option value="">Pilih...</option>');
            $.each(data.aos1, function(index,value) {
                $('#harga_perkhidmatan').append('<option value="'+value.id+'" data-name="'+value.nama+'">'+value.nama+'</option>');
            });
        });
      });
    });
      

  </script>


@endsection
