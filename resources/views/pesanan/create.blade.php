@extends('bases')
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
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

  
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
          <form method="POST" action="/spp_profil_syarikat/">
            @csrf
            {{-- <form type="get" action="{{ url('/search') }}">
              <input id="cari_pelanggan_pesanan" name="cari_pelanggan_pesanan" type="search" placeholder="Pelanggan">Cari Pelanggan:</label>
              <button  class="btn btnoutline light" type="submit" >Search
              </button>
                <br>
                <br>
                <br>
                <button class="btn btn-primary" type="button" id="continue1">Continue</button>
            </form> --}}
            <div class="table-responsive">
              <table id="cari_pelanggan" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
            </table>
            </div>


            {{-- <div class="divinput0" >
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
               @foreach  ($pesanan as $mo)
                   <option value="{{ $mo-> id }}">{{ $mo -> kumpulan  }} - {{ $mo -> nama  }}</option>
               @endforeach
             </select>
             <br>
             <label for="jenis_perkhidmatan">Jenis Perkhimatan:</label>
             <select name="jenis_perkhidmatan" id="jenis_perkhidmatan"></select>
             <br>
             </select>
             <table>
               <tr>
                 <th>BIL</th>
                 <th>KHIDMAT/PRODUK</th>
                 <th>HARGA</th>
                 <th>CATATAN</th>
               </tr>
               <tbody id="harga_perkhidmatan">
               </tbody>
             
            </table>
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
                  <td type="file" id="fail_permohonan" name="filename"></td>
                </tr>
              </table>
              <button class="btn btn-primary" type="button" id="continue4">Continue</button>
             </div>
             <div class="divinput4">
             <input type="submit" value="Submit">
             </div> --}}
           </form> 
        </div>
      </div>
    </div>
  </div>
<script type="text/javascript" language="javascript">
$(document).ready( function () {
    $('#cari_pelanggan').DataTable();
} );
</script>

  <script type="text/javascript">
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
                $('#jenis_perkhidmatan').append('<option value="'+value.idPKhidmat+'" data-name="'+value.nama+'">'+value.namaE+value.nama+'</option>');
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
                "idP": selected,
            },
        }).done(function(response) {
            var data = jQuery.parseJSON(response);
            $('#harga_perkhidmatan').html('');
            $('#harga_perkhidmatan').append('<td value=""></td>');
            $.each(data.aos1, function(index,value) {
                $('#harga_perkhidmatan').append(
                  '<tr><td value="'+value.id+'" data-name="'+value.nama+'">'+value.id+'</td></a><td value="'+value.id+'" data-name="'+value.nama+'">'+value.nama+'</td><td value="'+value.id+'" data-name="'+value.nama+'">'+value.hargaY+'</td><td value="'+value.id+'" data-name="'+value.nama+'">'+value.unitHarga+'</td></tr>'
                  );
            });
        });
      });
    });
      

  </script>


@endsection
