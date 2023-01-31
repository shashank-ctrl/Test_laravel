@extends('layouts.app')
@section('content') 
   <h1 style="margin-left:12px;">
    Manage User
  </h1>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right" style="margin-right:40px;">
                <a class="btn btn-sm fw-bold btn-primary" href="{{ route('admin.users.create') }}"> Create User</a>
                <a class="btn btn-sm fw-bold btn-primary" href="{{ route('export-users') }}">Export</a>

                <button type="button" class="btn btn-sm fw-bold btn-primary" data-toggle="modal" data-target="#myModal">Import</button>
            </div>
        </div>
    </div>

      

          <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Import CSV</h4>
                    </div>
                    <div class="modal-body">
                            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="file" name="file" class="form-control"><br><br>
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
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
            <th class="sorting text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0"><strong>User Image</strong></th>
            <th class="sorting text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0"><strong> Name</strong></th>
            <th class="sorting text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0"><strong>Email</strong></th>
            <th class="sorting text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0"><strong>Roles</strong></th>
            <th class="sorting text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0"width="280px" ><strong style="margin-left:75px;">Action</strong></th>
        </tr>
        @foreach ($users as $user)
       
        <tr>
            <td>{{ $user->id }}</td>
            <td><img src="/user/{{ $user->user_img }}" width="100px" height="100px"></td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td style="color:rgb(8,150,0);">
               {{ $user->roles }}
            </td>
            <td>
                <form action="{{ route('admin.users.destroy',$user->id) }}" method="POST" style="margin-left:44px;">
            
                <a class="btn btn-primary" href="{{ route('admin.users.edit',$user->id) }}">Edit</a>
                
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
   

@endsection