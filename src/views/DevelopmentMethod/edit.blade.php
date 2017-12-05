@extends('base')
@section('content')
<div class="content-header">
  <div class="title">
    <h1>Edit Development Method</h1>
  </div>
</div>

<form class="reset-form" action="{{Request::url()}}" method="post">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <div>
    <span class="error">
      <?php echo $errors->first('name', '* :message'); ?>
     </span>
     <label>Name</label>
     <input type="text" name="name" value="{{ $development_method->name }}">
  </div>

  <br/>
  <div>
    <span class="error">
      <?php echo $errors->first('description', '* :message'); ?>
     </span>
     <label>Description :</label>
     <textarea name="description" rows="8" cols="80">{{$development_method->description}}</textarea>
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
