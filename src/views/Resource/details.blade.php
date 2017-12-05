@extends('base')
@section('title')
Resource - Details
@stop
@section('styleSheets')
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
@endsection

@section('content')
  <div class="content-header">
    <div class="title">
      <h1>Resource {{$resource->name}} Details</h1>
    </div>
    <a href="{{url('timefortalent/resource')}}"><button type="button" class="primary">Back</button></a>
  </div>
  <table class="striped bordered">
    <tbody>
      <tr>
        <td>Name</td>
        <td>{{$resource->name}}</td>
      </tr>
      <tr>
        <td>Description</td>
        <td>{{$resource->description}}</td>
      </tr>
    </tbody>
  </table>
@stop
