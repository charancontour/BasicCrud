@extends('base')
@section('title')
Development Method - Details
@stop
@section('styleSheets')
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
@endsection

@section('content')
  <div class="content-header">
    <div class="title">
      <h1>Development Method {{$development_method->role}} Details</h1>
    </div>
    <a href="{{url('timefortalent/development-method')}}"><button type="button" class="primary">Back</button></a>
  </div>
  <table class="striped bordered">
    <tbody>
      <tr>
        <td>Name</td>
        <td>{{$development_method->name}}</td>
      </tr>
      <tr>
        <td>Description</td>
        <td>{{$development_method->description}}</td>
      </tr>
    </tbody>
  </table>
@stop
