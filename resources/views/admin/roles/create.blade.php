@extends('layouts.app')
@section('content') 
<body>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="margin-left:12px;">Add Role</h2>
        </div>
        <div class="pull-right" style="margin-right:70px;">
            <a class="btn btn-primary" href="{{ route('admin.roles.index') }}"> Back</a>
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
     
<form action="{{ route('admin.roles.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
   
     <div class="row" style="margin-left:15px;">
            <div class="col-md-5">
                <div class="form-group">
                    <strong>Role:</strong>
                    <input type="text" name="role" class="form-control" placeholder=" Name" required>
                </div>
            </div>
     </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary" style="margin-left:-1320px;">Submit</button>
        </div>
    </div>
     
</form>
</body>
@endsection