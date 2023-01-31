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
            <h2 style="margin-left:12px;">Add User</h2>
        </div>
        <div class="pull-right" style="margin-right:70px;">
            <a class="btn btn-primary" href="{{ route('admin.users.index') }}"> Back</a>
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
     
<form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
   
     <div class="row" style="margin-left:15px;">
            <div class="col-md-5">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="User Name" required>
                </div>
            </div>
        &nbsp;
                <div class="col-md-6">
                        <div class="form-group">
                            <strong>Email:</strong>
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                </div>
     </div>
    

        <div class="row" style="margin-left:15px;">
                <div class="col-md-5">
                    <div class="form-group">
                        <strong>User Image:</strong>
                        <input type="file" name="user_img" class="form-control" placeholder="Portfolio image" >
                    </div>
                </div>
                &nbsp;
                <div class="col-md-6">
                        <div class="form-group">
                            <strong>Password:</strong>
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
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