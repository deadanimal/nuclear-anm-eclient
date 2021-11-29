@extends('base')

@section('content')     

<section class="content" style="padding-left: 200px; padding-top: 20px">
  <form method="POST" action="/berita/{{ $berita -> id }}">
  @method('PUT')
    <div>
      <div class="row">
        <div class="col-md-6 card">
          <div class="form-group">
            @csrf
            <div>
              <label style=" padding-right: 20px; padding-top: 20px" for="title">{{$berita->title}}</label><br>
              <input class="form-control" value="{{$berita->title}}"  type="text" id="title" name="title" >
              <label style=" padding-right: 20px; padding-top: 20px" for="description">{{$berita->description}}</label>
              <input class="form-control" value="{{$berita->description}}"  type="text" id="description" name="description" > <br>
            </div>
            <input type="submit" value="Submit">
          </div>
        </div>
      </div>
    </div>
  </form>
</section>

@endsection

