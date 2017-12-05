@extends('base')
@section('content')
<div class="content-header">
  <div class="title">
    <h1>Edit Resource</h1>
  </div>
  <a href="{{url('timefortalent/resource')}}">
    <button type="button" class="primary">Back</button>
  </a>
</div>

<form action="{{Request::url()}}" method="post">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <div>
    <span class="error">
      <?php echo $errors->first('name', '* :message'); ?>
     </span>
     <label>Name</label>
     <input type="text" name="name" value="{{ $resource->name }}">
  </div>

  <br/>
  <div>
    <span class="error">
      <?php echo $errors->first('description', '* :message'); ?>
     </span>
     <label>Description :</label>
     <textarea name="description" rows="8" cols="80">{{$resource->description}}</textarea>
  </div>

  <button type="submit" class="primary">Save</button>
</form>
@endsection

@section('customScripts')
<script type="text/javascript">
  // Toggle Checkbox
  function toggleCheckBox(elem)
  {
    if($(elem).hasClass('active'))
    {
      $(elem).removeClass('active');
      $(elem).val(0)
    }
    else
    {
      $(elem).addClass('active');
      $(elem).val(1);
    }
  }
</script>
@endsection
