@extends('layouts.app')
@section('content') 
<style>
    label,

select {
    font-size: 18px;
    padding: 1px 5px;
    width:616px;
}

</style>
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

<h1 style="margin-left:24px;">Edit User</h1>
<div class="container">
<div class="pull-right">
    <a class="btn btn-primary" href="{{ route('admin.users.index') }}"> Back</a>
</div>
&nbsp;

{{ Form::model($users, array('route' => array('admin.users.update', $users->id), 'method' => 'PUT','enctype'=> 'multipart/form-data')) }}

<div class="row" style="margin-left:-145px;">
  <div class="col-md-5">
    <div class="form-group">
        {{ Form::label('name', 'User Name:') }}
        {{ Form::text('name', null, array('class' => 'form-control','required')) }}
    </div>
    </div>
    &nbsp;
    <div class="col-md-6">
    <div class="form-group">
        {{ Form::label('email', 'Email:') }}
        {{ Form::text('email', null, array('class' => 'form-control','required')) }}
    
                                           
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
  



    <div class="row" style="margin-left:-142px;">
            <div class="col-md-5">
                <div class="form-group">
                    <strong>User Image:</strong>
                    <input type="file" id="hero_img" name="hero_img" class="form-control" placeholder="Portfolio image" >
                    <img src="{{ asset ('user/'.$users->user_img) }}" width="100px" height="100px">
                </div>
            </div>
            &nbsp;
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Password:</strong>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" >
                  
                </div>
            </div>
            &nbsp;
            <div class="col-md-5">
                    <div class="form-group">       
                    <!-- {{ Form::label('roles', 'Roles:') }}
                   {{ Form::select('roles', array('Select' => '--Select Role--', 'Admin' => 'Admin', 'Super Admin' => 'Super Admin', 'Writer' => 'Writer'), null, array('class' => 'form-control js-example-basic-multiple')) }} -->
                   <strong>Role:</strong>
                   <select name="roles" id="roles">
                        <option value=""> -- Select Role --</option>
                            @foreach ($roles as $rol)                      
                              <option value="{{ $rol->role }}" {{ (isset($rol->id) || old('id'))? "selected":"" }}>{{ $rol->role }}</option>
                            @endforeach 
                   </select>
                    </div>
                </div>
    </div>
   
    &nbsp;
   
           <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
{{ Form::close() }}

</div>
</body>
@endsection
