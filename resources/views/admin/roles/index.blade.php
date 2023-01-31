@extends('layouts.app')
@section('content') 
   <h1 style="margin-left:12px;">
    Manage Role
  </h1>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right" style="margin-right:40px;">
                <a class="btn btn-sm fw-bold btn-primary" href="{{ route('admin.roles.create') }}"> Create Role</a>
            </div>
        </div>
    </div>
    &nbsp;
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered" style="margin-left:19px;">
        <tr>
            <th class="sorting text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0"><strong>No</strong></th>
            <th class="sorting text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0"><strong> Role</strong></th>
            <th class="sorting text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0"width="280px" ><strong style="margin-left:75px;">Action</strong></th>
        </tr>
        @foreach ($roles as $role)
       
        <tr>
            <td>{{ $role->id }}</td>
            <td>{{ $role->role }}</td>
            <td>
                <form action="{{ route('admin.roles.destroy',$role->id) }}" method="POST" style="margin-left:44px;">
            
                <a class="btn btn-primary" href="{{ route('admin.roles.edit',$role->id) }}">Edit</a>
                
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $roles->links() !!}

@endsection