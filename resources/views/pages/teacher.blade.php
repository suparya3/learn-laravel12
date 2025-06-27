@extends('layouts.master')
@section('content')
 <div class="alert alert-primary" role="alert">
  Welcome To Page Teacher</div>
<br>
<a href="/teacher/addteacher" type="button" class="btn btn-primary">Insert Data</a>
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Code Teacher</th>
      <th scope="col">Gender</th>
      <th scope="col">Address</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">1</td>
      <td>Rna Watiyulyanti</td>
      <td>G003</td>
      <td>Female</td>
      <td>Jakarta</td>
      <td>
        <button type="button" class="btn btn-warning">Edit</button>
        <button type="button" class="btn btn-danger">Delete</button>
      </td>
    </tr>
    <tr>
      <td scope="row">1</td>
      <td>Rna Watiyulyanti</td>
      <td>G003</td>
      <td>Female</td>
      <td>Jakarta</td>
      <td>
        <button type="button" class="btn btn-warning">Edit</button>
        <button type="button" class="btn btn-danger">Delete</button>
      </td>
    </tr>
    <tr>
      <td scope="row">1</td>
      <td>Rna Watiyulyanti</td>
      <td>G003</td>
      <td>Female</td>
      <td>Jakarta</td>
      <td>
        <button type="button" class="btn btn-warning">Edit</button>
        <button type="button" class="btn btn-danger">Delete</button>
      </td>
    </tr>
    <tr>
      <td scope="row">1</td>
      <td>Rna Watiyulyanti</td>
      <td>G003</td>
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
