@extends('layouts.master')
@section('content')
 <div class="alert alert-primary" role="alert">
  Welcome To Page Student</div>
<br>
<div class="alert alert-primary">
  <b>Nama : </b> {{ $data['nama']}} <br>
  <b>Nama : </b> {{ $data['nisn']}} <br>
  <b>Nama : </b> {{ $data['kelas']}} <br>
  <b>Nama : </b> {{ $data['jenis_kelamin']}} <br>
  <b>Nama : </b> {{ $data['alamat']}} <br>

</div>
<br>
<a href="/student/addstudent" type="button" class="btn btn-primary">Insert Data</a>
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">NISN</th>
      <th scope="col">Class</th>
      <th scope="col">Gender</th>
      <th scope="col">Address</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">1</td>
      <td>Rna Watiyulyanti</td>
      <td>24110101</td>
      <td>XI-B</td>
      <td>Female</td>
      <td>Jakarta</td>
      <td>
        <button type="button" class="btn btn-warning">Edit</button>
        <button type="button" class="btn btn-danger">Delete</button>
      </td>
    </tr>
  </tbody>
</table>
@endsection
