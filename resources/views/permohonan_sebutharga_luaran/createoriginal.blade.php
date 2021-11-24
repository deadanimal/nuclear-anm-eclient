{{-- @extends('base')
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
  }
  
  tr:nth-child(even) {
    background-color: #dddddd;
  }
  </style>
  <script>
    var Mydata = $('#pusat_perkhimatan').serialize();

// So it gets from all the selected values


$.ajax({
  type: "post",
      url: "http://URL" ,
      dataType: "text",
      data: Mydata,
      success: function(request) {
            result.innerHTML = request ;
  }
}); 
  </script>
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
             <label for="name">NAMA PELANGGAN:  {{Auth()->user()->name }}</label>
             <input type="text" id="name" name="name" value="{{Auth()->user()->name }}" hidden> <br><br>
             <label for="no_pelanggan">NO PELANGGAN:</label>
             <input type="number" id="no_pelanggan" name="no_pelanggan" ><br><br>
             <label for="note">NO PELANGGAN:</label>
             <input type="number" id="note" name="note" ><br><br>
             
             <label for="pusat_perkhidmatan">Pusat Perkhimatan:</label>
             <select name="pusat_perkhidmatan" id="pusat_perkhidmatan">
               <option value="ACA - MAKMAL APLIKASI KIMIA ANALISIS">ACA - MAKMAL APLIKASI KIMIA ANALISIS</option>
               <option value="ALURTRON - LOJI PENYINARAN ALURTRON">ALURTRON - LOJI PENYINARAN ALURTRON</option>
               <option value="BIODOSE - MAKMAL BIODOSE">BIODOSE - MAKMAL BIODOSE</option>
               <option value="BIOTEST - MAKMAL UJIAN BIOLOGI">BIOTEST - MAKMAL UJIAN BIOLOGI</option>
               <option value="BKT - BAHAGIAN PENGKOMERSILAN TEKNOLOGI">BKT - BAHAGIAN PENGKOMERSILAN TEKNOLOGI</option>
               <option value="BRI - PUSAT PEMPROSESAN RADIOISOTOP">BRI - PUSAT PEMPROSESAN RADIOISOTOP</option>
               <option value="E-TAG - KUMPULAN APLIKASI PENYURIH SEKITARAN">E-TAG - KUMPULAN APLIKASI PENYURIH SEKITARAN</option>
               <option value="IAEA - AGENSI TENAGA ATOM ANTARABANGSA">IAEA - AGENSI TENAGA ATOM ANTARABANGSA</option>
               <option value="KFK - KUMPULAN FIZIK KESIHATAN">KFK - KUMPULAN FIZIK KESIHATAN</option>
               <option value="LATIHAN - PUSAT LATIHAN">LATIHAN - PUSAT LATIHAN</option>
               <option value="MPL - MAKMAL FIZIK PERUBATAN"> MPL - MAKMAL FIZIK PERUBATAN</option>
               <option value="MTEC - MAKMAL TEKNOLOGI BAHAN"> MTEC - MAKMAL TEKNOLOGI BAHAN </option>
               <option value="MTS - MAKMAL TEKNOLOGI SINARAN">MTS - MAKMAL TEKNOLOGI SINARAN</option>
               <option value="NDT - PUSAT TEKNOLOGI UJIAN TANPA MUSNAH">NDT - PUSAT TEKNOLOGI UJIAN TANPA MUSNAH</option>
               <option value="NIR - MAKMAL RADIASI TIDAK MENGION">NIR - MAKMAL RADIASI TIDAK MENGION</option>
               <option value="PAT - PUSAT TEKNOLOGI PENILAIAN LOJI">PAT - PUSAT TEKNOLOGI PENILAIAN LOJI</option>
               <option value="PDC - PUSAT PEMBANGUNAN PROTOTAIP DAN LOJI ">PDC - PUSAT PEMBANGUNAN PROTOTAIP DAN LOJI </option>
               <option value="PIA - PUSAT INSTRUMENTASI & AUTOMASI">PIA - PUSAT INSTRUMENTASI & AUTOMASI</option>
               <option value="PTR - PUSAT TEKNOLOGI REAKTOR">PTR - PUSAT TEKNOLOGI REAKTOR</option>
               <option value="RAS - MAKMAL RADIOKIMIA & ALAM SEKITAR">RAS - MAKMAL RADIOKIMIA & ALAM SEKITAR</option>
               <option value="RAYMINTEX - RADIATION PREVULCANIZED NATURAL RUBBER LATEX">RAYMINTEX - RADIATION PREVULCANIZED NATURAL RUBBER LATEX </option>
               <option value="SINAGAMA - LOJI PENYINARAN SINAGAMA">SINAGAMA - LOJI PENYINARAN SINAGAMA</option>
               <option value="SSDL - MAKMAL STANDARD DOSIMETRI SEKUNDER">SSDL - MAKMAL STANDARD DOSIMETRI SEKUNDER</option>
               <option value="STERIFEED - LOJI STERIFEED / BIOPROSES ">STERIFEED - LOJI STERIFEED / BIOPROSES </option>
               <option value="TAB - MAKMAL TEKNOLOGI AGRO & BIO SAINS">TAB - MAKMAL TEKNOLOGI AGRO & BIO SAINS </option>
               <option value="WASTEC - PUSAT PEMBANGUNAN TEKNOLOGI SISA">WASTEC - PUSAT PEMBANGUNAN TEKNOLOGI SISA</option>
             </select>
             <br>
             <label for="pusat_perkhidmatan">Pusat Perkhimatan:</label>
             <select name="pusat_perkhidmatan" id="pusat_perkhidmatan">
               <option value="ACA - MAKMAL APLIKASI KIMIA ANALISIS">ACA - MAKMAL APLIKASI KIMIA ANALISIS</option>
               <option value="ALURTRON - LOJI PENYINARAN ALURTRON">ALURTRON - LOJI PENYINARAN ALURTRON</option>
               <option value="BIODOSE - MAKMAL BIODOSE">BIODOSE - MAKMAL BIODOSE</option>
               <option value="BIOTEST - MAKMAL UJIAN BIOLOGI">BIOTEST - MAKMAL UJIAN BIOLOGI</option>
               <option value="BKT - BAHAGIAN PENGKOMERSILAN TEKNOLOGI">BKT - BAHAGIAN PENGKOMERSILAN TEKNOLOGI</option>
               <option value="BRI - PUSAT PEMPROSESAN RADIOISOTOP">BRI - PUSAT PEMPROSESAN RADIOISOTOP</option>
               <option value="E-TAG - KUMPULAN APLIKASI PENYURIH SEKITARAN">E-TAG - KUMPULAN APLIKASI PENYURIH SEKITARAN</option>
               <option value="IAEA - AGENSI TENAGA ATOM ANTARABANGSA">IAEA - AGENSI TENAGA ATOM ANTARABANGSA</option>
               <option value="KFK - KUMPULAN FIZIK KESIHATAN">KFK - KUMPULAN FIZIK KESIHATAN</option>
               <option value="LATIHAN - PUSAT LATIHAN">LATIHAN - PUSAT LATIHAN</option>
               <option value="MPL - MAKMAL FIZIK PERUBATAN"> MPL - MAKMAL FIZIK PERUBATAN</option>
               <option value="MTEC - MAKMAL TEKNOLOGI BAHAN"> MTEC - MAKMAL TEKNOLOGI BAHAN </option>
               <option value="MTS - MAKMAL TEKNOLOGI SINARAN">MTS - MAKMAL TEKNOLOGI SINARAN</option>
               <option value="NDT - PUSAT TEKNOLOGI UJIAN TANPA MUSNAH">NDT - PUSAT TEKNOLOGI UJIAN TANPA MUSNAH</option>
               <option value="NIR - MAKMAL RADIASI TIDAK MENGION">NIR - MAKMAL RADIASI TIDAK MENGION</option>
               <option value="PAT - PUSAT TEKNOLOGI PENILAIAN LOJI">PAT - PUSAT TEKNOLOGI PENILAIAN LOJI</option>
               <option value="PDC - PUSAT PEMBANGUNAN PROTOTAIP DAN LOJI ">PDC - PUSAT PEMBANGUNAN PROTOTAIP DAN LOJI </option>
               <option value="PIA - PUSAT INSTRUMENTASI & AUTOMASI">PIA - PUSAT INSTRUMENTASI & AUTOMASI</option>
               <option value="PTR - PUSAT TEKNOLOGI REAKTOR">PTR - PUSAT TEKNOLOGI REAKTOR</option>
               <option value="RAS - MAKMAL RADIOKIMIA & ALAM SEKITAR">RAS - MAKMAL RADIOKIMIA & ALAM SEKITAR</option>
               <option value="RAYMINTEX - RADIATION PREVULCANIZED NATURAL RUBBER LATEX">RAYMINTEX - RADIATION PREVULCANIZED NATURAL RUBBER LATEX </option>
               <option value="SINAGAMA - LOJI PENYINARAN SINAGAMA">SINAGAMA - LOJI PENYINARAN SINAGAMA</option>
               <option value="SSDL - MAKMAL STANDARD DOSIMETRI SEKUNDER">SSDL - MAKMAL STANDARD DOSIMETRI SEKUNDER</option>
               <option value="STERIFEED - LOJI STERIFEED / BIOPROSES ">STERIFEED - LOJI STERIFEED / BIOPROSES </option>
               <option value="TAB - MAKMAL TEKNOLOGI AGRO & BIO SAINS">TAB - MAKMAL TEKNOLOGI AGRO & BIO SAINS </option>
               <option value="WASTEC - PUSAT PEMBANGUNAN TEKNOLOGI SISA">WASTEC - PUSAT PEMBANGUNAN TEKNOLOGI SISA</option>
             </select>
             <br><br>
             <label for="jenis_perkhidmatan">Choose a car:</label>
             <select name="jenis_perkhidmatan" id="jenis_perkhidmatan">
               <option value="volvo">Volvo</option>
               <option value="saab">Saab</option>
               <option value="opel">Opel</option>
               <option value="audi">Audi</option>
             </select>

             <input type="submit" value="Submit">
           </form> 
          <table>
            <tr>
              <th>Name</th>
              <th>permohonan_sebutharga_luaran</th>
              <th>Update</th>
            </tr>
            <tr>
              <td>Name</td>
              <td>permohonan_sebutdarga_luaran</td>
              <td>Update</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>

  
{{-- 

<a href="/permohonan_sebutharga_luaran/create">Tambah permohonan_sebutharga_luaran</a>

<form method="POST" action="/permohonan_sebutharga_luaran/">
   @csrf
    <label for="fname">NAMA PELANGGAN:</label><br>
    <input type="text" id="fname" name="name" ><br>
    <label for="nopelanggan">NO PELANGGAN:</label><br>
    <input type="number" id="nopelanggan" name="nopelanggan" ><br><br>
    <label for="cars">Choose a car:</label>
    <select name="cars" id="cars">
      <option value="volvo">Volvo</option>
      <option value="saab">Saab</option>
      <option value="opel">Opel</option>
      <option value="audi">Audi</option>
    </select>

    <input type="submit" value="Submit">
  </form> 
 --}}
{{-- 
<table>
  <tr>
    <th>Name</th>
    <th>permohonan_sebutharga_luaran</th>
    <th>Update</th>
  </tr>
  <tr>
    <td><ul> nama</ul></td>
    <td><ul> harga</ul></td>
    <td><ul> <a href="/permohonan_sebutharga_luaran/edit">Kemaskini</a></ul></td>
    </tr>
  @foreach ($permohonan_sebutharga_luaran as $permohonan_sebutharga_luaran)
  <tr>
    <td><ul> {{ $permohonan_sebutharga_luaran -> name  }}</ul></td>
    <td><ul> {{ $permohonan_sebutharga_luaran -> rate  }}</ul></td>
    <td><ul> <a href="/permohonan_sebutharga_luaran/{{$permohonan_sebutharga_luaran->id}}/edit">Kemaskini</a></ul></td>
    </tr>
@endforeach
</table>


@endsection --}}
