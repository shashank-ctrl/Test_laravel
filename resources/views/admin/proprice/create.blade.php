@extends('layouts.app')
@section('content') 
<style>
    label,

select {
    font-size: 20px;
    padding: 1px 5px;
}

</style>
<body>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="margin-left:12px;">Add Product</h2>
        </div>
        <div class="pull-right" style="margin-right:70px;">
            <a class="btn btn-primary" href="{{ route('admin.proprice.index') }}"> Back</a>
        </div>
    </div>
</div>
     &nbsp;
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
     
<form action="{{ route('admin.proprice.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
   
     <div class="row" style="margin-left:15px;">
            <div class="col-md-5">
                <div class="form-group">
                    <strong>Part Type:</strong>
                    <input type="text" name="part_type" class="form-control" placeholder="Part Type" required>
                </div>
            </div>
        &nbsp;
                <div class="col-md-6">
                        <div class="form-group">
                            <strong>Part Description:</strong>
                            <input type="text" name="part_description" class="form-control" placeholder="Part Description" required>
                        </div>
                </div>
     </div>
    

        <div class="row" style="margin-left:15px;">
                <div class="col-md-5">
                    <div class="form-group">
                        <strong>Product Info:</strong>
                        <input type="text" name="product_info" class="form-control" placeholder="Product Info" >
                    </div>
                </div>
                &nbsp;
                <div class="col-md-6">
                        <div class="form-group">
                            <strong>Color:</strong>
                            <input type="text" name="color" class="form-control" placeholder="Color" required>
                        </div>
                </div>
        
        </div> 



        <div class="row" style="margin-left:15px;">
                <div class="col-md-5">
                    <div class="form-group">
                        <strong>Quantity:</strong>
                        <input type="text" name="quantity" class="form-control" placeholder="Quantity" >
                    </div>
                </div>
                &nbsp;
                <div class="col-md-6">
                        <div class="form-group">
                            <strong>Part Number:</strong>
                            <input type="text" name="part_number" class="form-control" placeholder="Part Number" required>
                        </div>
                </div>
        
        </div> 


        <div class="row" style="margin-left:15px;">
                <div class="col-md-5">
                    <div class="form-group">
                        <strong>Single Product:</strong>
                        <input type="text" name="single_product" class="form-control" placeholder="Sngle Product" >
                    </div>
                </div>
                &nbsp;
                <div class="col-md-6">
                        <div class="form-group">
                            <strong>Bulk Product:</strong>
                            <input type="text" name="bulk_product" class="form-control" placeholder="Bulk Product:" required>
                        </div>
                </div>
        
        </div> 

       
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
     
</form>
</body>
@endsection