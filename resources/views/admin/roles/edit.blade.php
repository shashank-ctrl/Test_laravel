@extends('layouts.app')
@section('content') 
<body>  
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!DOCTYPE html>
<html>

<body>

<h1 style="margin-left:6px;">Edit Role</h1>
<div class="container">
<div class="pull-right">
    <a class="btn btn-primary" href="{{ route('admin.roles.index') }}"> Back</a>
</div>
&nbsp;

{{ Form::model($roles, array('route' => array('admin.roles.update', $roles->id), 'method' => 'PUT','enctype'=> 'multipart/form-data')) }}
<div class="row" style="margin-left:-145px;">
  <div class="col-md-5">
    <div class="form-group">
        {{ Form::label('role', 'User Name:') }}
        {{ Form::text('role', null, array('class' => 'form-control','required')) }}
    </div>
    </div>

</div> 

    <!-- <div class="row">
     <div class="col-md-5">
        <div class="form-group">
            {{ Form::label('platform_selection', 'Platform Selection:') }}
            {{ Form::select('platform_selection[]', array('Select' => '--Select--', 'Android' => 'Android', 'IOS' => 'IOS', 'Website' => 'Website', 'Admin Dashboard' => 'Admin Dashboard'), null, array('class' => 'form-control js-example-basic-multiple', 'multiple'=>'multiple')) }}
        </div>
   </div> -->


   
           <div class="col-xs-12 col-sm-12 col-md-12 text-center" >
                <button type="submit" class="btn btn-primary" style="margin-left:-1331px;">Submit</button>
        </div>
{{ Form::close() }}

</div>
</body>
@endsection
