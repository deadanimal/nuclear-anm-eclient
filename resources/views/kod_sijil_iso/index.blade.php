
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
<form action="/kod_sijil_iso/" method="POST" id="new_servis_pusat_khidmat">
  @csrf
<br>
<table style="text-align: center">
<h2>KOD ISO</h2>

<table  style="text-align: center">
  <tr align="center">
    <th>KOD</th>
    <th>ISO</th>
    <th>TINDAKAN</th>
  </tr>
  <tr>
    <form action="/kod_sijil_iso/" method="POST" id="new_servis_pusat_khidmat">
      @csrf
    <td> <input  name="idJC" type="text" ></td>
    <td> <input name="keterangan" type="file" id="fileToUpload"></td>
    <td><button type="submit" value="fileToUpload">TAMBAH</button></td>
  </form>
  </tr>
  @foreach ($kod_sijil_iso as $spk)
  <tr>
    <td><ul> {{ $spk -> kod}}</ul></td>
    <td><ul> {{ $spk -> nama}}</ul></td>
    <td>
      <form action="/spp_pusat_khidmat/{{ $spk -> id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit"><span class="fas fa-trash"></span></button>
        </form>
      <a href="/kod_sijil_iso/{{ $spk -> id }}/edit">Kemaskini</a></td>
    </tr>
@endforeach
</table>
<script>
$target_dir = "kod_sijil_iso/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}
</script>
@endsection
