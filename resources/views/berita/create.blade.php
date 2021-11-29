@extends('bases')
<style>
  
  textarea {
  width: 300px;
  height: 150px;
}
</style>
@section('content')

<section class="content" style="padding-left: 0px; padding-top: 20px">
  <form method="POST" action="/berita/">
    <div>
      <div class="form-group">
        @csrf
        <div>
          <label style=" padding-right: 20px" for="gambar">Link Atau Muatnaik Gambar</label> <br>
          <input class="form-control" placeholder="Link Gambar"  type="text" id="gambar" name="gambar" ><br>
          {{-- <input class="form-control" placeholder="gambar"  type="file" id="gambar" name="gambar" ><br> --}}
          <label style=" padding-right: 20px" for="tajuk">Tajuk</label> <br>
          <input class="form-control" placeholder="tajuk"  type="text" id="tajuk" name="tajuk" >
          <label style=" padding-right: 20px" for="kandungan">Kandungan</label>
          <textarea class="form-control" placeholder="kandungan"  type="text" id="kandungan" name="kandungan" ></textarea> <br>
        </div>
        <input type="submit" value="Submit">
        
      </div>
    </div>
  </form>
</section>
@endsection