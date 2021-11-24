@extends('base')

@section('content')     

<section class="content" style="padding-left: 200px; padding-top: 20px">
  <form method="POST" action="/image/">
    <div>
      <div class="row">
        <div class="col-md-6 card">
          <div class="form-group">
            @csrf
            <div>
              <label style=" padding-right: 20px" for="image"></label> <br>
              <input class="form-control" placeholder="Image URL"  type="text" id="image" name="image" >
              <label style=" padding-right: 20px" for="imagetitle"></label> <br>
              <input class="form-control" placeholder="Tittle"  type="text" id="imagetitle" name="imagetitle" >
              <label style=" padding-right: 20px" for="imagedesc"></label> <br>
              <input class="form-control" placeholder="Description"  type="text" id="imagedesc" name="imagedesc" >
              <label style=" padding-right: 20px" for="date"></label>
              <input class="form-control" placeholder="Date"  type="date" id="date" name="date" > <br>
              <label style=" padding-right: 20px" for="time"></label>
              <input class="form-control" placeholder="Time" type="time" id="time" name="time" > <br>
            </div>
            <input type="submit" value="Submit">
          </div>
        </div>
      </div>
    </div>
  </form>
</section>

@endsection

