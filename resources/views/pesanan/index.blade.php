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
  }
  
  tr:nth-child(even) {
    background-color: #dddddd;
  }
  </style>
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
        <div class="echart-bar-top-products h-100" data-echart-responsive="true">
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


<h2></h2>

@endsection
