@extends('base')
@section('title')
  Skill - Index
@stop
@section('content')
<div class="content-header">
  <div class="title">
    <h1>List Of Skills</h1>
  </div>
  <a href="{{url('timefortalent/skill/create')}}">
    <button type="button" class="primary">Create</button>
  </a>
</div>
@if(count($skills) > 0)
<table class="table striped bordered datatable">
  <thead>
    <tr>
      <th>Name</th>
      <th>Description</th>
      <th class="no-sort">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($skills as $skill)
    <tr>
      <td>{{$skill->name}}</td>
      <td>{{$skill->description}}</td>
      <td class="actions no-sort">
        @if(Auth::user()->hasUrlAccess('timefortalent/skill/view/*'))
        <a href="/timefortalent/skill/view/{{$skill->id}}">
           <button type="button" class="dark tooltip" title="View">
            <i class="fa fa-eye"></i>
          </button>
        </a>
        @else
         <a href="#">
           <button type="button" disabled="disabled">
            <i class="fa fa-eye"></i>
          </button>
        </a>
        @endif

        @if(Auth::user()->hasUrlAccess('timefortalent/skill/edit/*'))
        <a href="/timefortalent/skill/edit/{{$skill->id}}">
          <button type="button" class="dull tooltip" title="Edit">
            <i class="fa fa-pencil"></i>
          </button>
        </a>
        @else
         <a href="#">
          <button type="button" disabled="disabled">
            <i class="fa fa-pencil"></i>
          </button>
        </a>
        @endif

        @if(Auth::user()->hasUrlAccess('timefortalent/skill/delete/*'))
        <a href="/timefortalent/skill/delete/{{$skill->id}}">
           <button type="button" class="dark tooltip" title="Delete">
            <i class="fa fa-trash"></i>
          </button>
        </a>
        @else
        <a href="#">
           <button type="button" disabled="disabled">
            <i class="fa fa-trash"></i>
          </button>
        </a>
        @endif
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@else
  <h4>No Files Found.</h4>
@endif
@stop

@section('customScripts')
<!-- Datatable Export Buttons -->
<script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>
<script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
<script src="/js/vendor/colResizable.min.js"></script>

<script type="text/javascript">
 $(function(){
    $('.datatable').dataTable({
    //  "paging":false,
    //  "info" : false
    dom: "<'top-row'<'length'l><'buttons'B><'filter'f>><'middle-row'<'col-sm-12'tr>><'bottom-row'<'info'i><'pagination'p>>",
    order: [[ 0 , "asc" ]],
    columnDefs: [
      { orderable: false, targets: ['no-sort']},
      // { visible:false,targets:[1]},
      // { orderData:[1],targets:[0]},
      // { orderData:[8],targets:[7]},
    ],
    buttons: [
              {
                extend : 'excelHtml5',
                exportOptions: {
                      columns: [0,1]
                }
              },
              {
                extend : 'csvHtml5',
                exportOptions: {
                      columns: [0,1]

                }
              }

          ]

    });
    $('.datatable').colResizable({liveDrag:true});

 });


 </script>
@stop
