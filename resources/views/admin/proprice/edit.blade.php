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

<h2 style="margin-left:24px;">Edit Product</h2>
<div class="container">
<div class="pull-right">
    <a class="btn btn-primary" href="{{ route('admin.proprice.index') }}"> Back</a>
</div>
&nbsp;

{{ Form::model($proprice, array('route' => array('admin.proprice.update', $proprice->id), 'method' => 'PUT','enctype'=> 'multipart/form-data')) }}

<div class="row" style="margin-left:-63px;">
  <div class="col-md-5">
    <div class="form-group">
        {{ Form::label('part_type', 'Part Type:') }}
        {{ Form::text('part_type', null, array('class' => 'form-control','required')) }}
    </div>
    </div>
    &nbsp;
    <div class="col-md-6">
    <div class="form-group">
        {{ Form::label('part_description', 'Part Description:') }}
        {{ Form::text('part_description', null, array('class' => 'form-control','required')) }}
    
                                           
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
  
 <div class="row" style="margin-left:-63px;">
  <div class="col-md-5">
    <div class="form-group">
        {{ Form::label('product_info', 'Product Info:') }}
        {{ Form::text('product_info', null, array('class' => 'form-control','required')) }}
    </div>
    </div>
    &nbsp;
    <div class="col-md-6">
    <div class="form-group">
        {{ Form::label('color', 'Color:') }}
        {{ Form::text('color', null, array('class' => 'form-control','required')) }}
    
                                           
    </div>
    </div>
 
</div> 

&nbsp;

<div class="row" style="margin-left:-63px;">
  <div class="col-md-5">
    <div class="form-group">
        {{ Form::label('quantity', 'Quantity:') }}
        {{ Form::text('quantity', null, array('class' => 'form-control','required')) }}
    </div>
    </div>
    &nbsp;
    <div class="col-md-6">
    <div class="form-group">
        {{ Form::label('part_number', 'Part Number:') }}
        {{ Form::text('part_number', null, array('class' => 'form-control','required')) }}
    
                                           
    </div>
    </div>
 
</div> 

&nbsp;


<div class="row" style="margin-left:-63px;">
  <div class="col-md-5">
    <div class="form-group">
        {{ Form::label('single_product', 'Single Product:') }}
        {{ Form::text('single_product', null, array('class' => 'form-control','required')) }}
    </div>
    </div>
    &nbsp;
    <div class="col-md-6">
    <div class="form-group">
        {{ Form::label('bulk_product', 'Bulk Product:') }}
        {{ Form::text('bulk_product', null, array('class' => 'form-control','required')) }}
    
                                           
    </div>
    </div>
 
</div> 


 

   
           <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
{{ Form::close() }}

</div>
</body>
@endsection
