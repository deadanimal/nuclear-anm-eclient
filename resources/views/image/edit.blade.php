@extends('base')

@section('content')     

<section class="content" style="padding-left: 200px; padding-top: 20px">
  <form method="POST" action="/image/{{$image->id}}">
  @method('PUT')
    <div>
      <div class="row">
        <div class="col-md-6 card">
          <div class="form-group">
            @csrf
            <div>
              <label style=" padding-right: 20px; padding-top: 20px" for="image"><img width="200px" src="{{$image->image}}" alt=""></label>
              <input class="form-control" placeholder=""  type="text" id="image" name="image" value="{{$image->image}}"> <br>
              <label style=" padding-right: 20px; padding-top: 20px" for="imagetitle"></label><br>
              <input class="form-control" placeholder="{{$image->imagetitle}}"  type="text" id="imagetitle" name="imagetitle" value="{{$image->imagetitle}}" >
              <label style=" padding-right: 20px; padding-top: 20px" for="imagedesc"></label><br>
              <input class="form-control" placeholder="{{$image->imagedesc}}"  type="text" id="imagedesc" name="imagedesc" value="{{$image->imagedesc}}" >
              <label style=" padding-right: 20px; padding-top: 20px" for="date">{{$image->date}}</label>
              <input class="form-control" placeholder="{{$image->date}}"  type="date" id="date" name="date" value="{{ $image -> date }}"> <br>
              <label style=" padding-right: 20px; padding-top: 20px" for="time">{{$image->time}}</label>
              <input class="form-control" placeholder="{{$image->time}}"  type="time" id="time" name="time" value="{{ $image -> time }}"> <br>
            </div>
            <input type="submit" value="Submit">
          </div>
        </div>
      </div>
    </div>
  </form>
</section>

@endsection

