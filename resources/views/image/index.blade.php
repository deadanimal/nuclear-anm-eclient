@extends('base')
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
<h2>Image Table</h2>


<table style="text-align: center">
  <tr>
    {{-- <th>Admin Id</th> --}}
    <th>Image </th>
    <th>Image Title</th>
    <th>Image Description</th>
    <th>Date</th>
    <th>Time</th>
    <th>Update</th>
  </tr>
  @foreach ($image as $image)
  <tr style="text-align: center">
    {{-- <td><ul> {{ $image -> AdminId}}</ul></td> --}}
    <td><ul> <img style="width: 100px" src="{{ $image -> image}}" alt=""> </ul></td>
    <td><ul> {{ $image -> imagetitle}}</ul></td>
    <td><ul> {{ $image -> imagedesc}}</ul></td>
    <td><ul> {{ $image -> date}}</ul></td>
    <td><ul> {{ $image -> time}}</ul></td>
    <td><ul> <a href="/image/{{$image->id}}/edit">Kemaskini</a></ul></td>
    </tr>
@endforeach
</table>
<br>
<a href="/image/create">Add Image</a>



@endsection
