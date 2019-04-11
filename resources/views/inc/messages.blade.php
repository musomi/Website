@if(count($errors) > 0)
@foreach($errors->all() as $error)
<div class="alert alert-danger">
  {{$error}}
</div>
@endforeach
@endif

@if(session('success'))
<div style="width:70%;text-align:center;margin-left:10%" class="alert alert-success">
{{session('success')}}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger">
{{session('error ')}}
</div>
@endif
