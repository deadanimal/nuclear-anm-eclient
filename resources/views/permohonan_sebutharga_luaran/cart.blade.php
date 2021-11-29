@extends('base')

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
             <div class="divinput2">
             </select>
             <table>
               <tr>
                 <th>BIL</th>
                 <th>KHIDMAT/PRODUK</th>
                 <th>HARGA</th>
                 <th>CATATAN</th>
               </tr>
               @foreach  ($sebutharga as $sh)
               <tbody id="harga_perkhidmatan">
                <td>{{ $sh -> id  }}</td>
                <td>{{ $sh -> nama  }}</td>
                <td>{{ $sh -> harga_perkhidmatan  }} </td>
               </tbody>
               @endforeach
             
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
              {{-- <button class="btn btn-primary" type="button" id="continue4">Continue</button> --}}
             </div>
             {{-- <div class="divinput4">
             <input type="submit" value="Submit">
             </div> --}}
           </form> 
        </div>
      </div>
    </div>
  </div>

  {{-- <script type="text/javascript">
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
            //alert(data)
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
        alert(selected);
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
            $('#harga_perkhidmatan').append('<td value=""></td>');
            $.each(data.aos1, function(index,value) {
                $('#harga_perkhidmatan').append(
                  `<tr><td value="${value.id}"data-name="${value.nama}"><a href="/permohonan_sebutharga_luaran/${value.id}" >${value.idPKhidmat}</td><td value="${value.id}" data-name="${value.nama}">${value.nama}</td><td value="${value.id}" data-name="${value.nama}">${value.hargaY}</td><td value="${value.id}" data-name="${value.nama}">${value.unitHarga}</a></td></tr>`
                  );
            });
        });
      });
    });
      

  </script> --}}

@endsection
