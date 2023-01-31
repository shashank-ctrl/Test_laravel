@extends('layouts.app')
@section('content') 
   <h2 style="margin-left:12px;">
    Manage Product
  </h2>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right" style="margin-right:40px;">
        <a class="btn btn-sm fw-bold btn-primary" href="{{ route('admin.proprice.create') }}"> Create Product</a>
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
            <th class="sorting text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0"><strong>Part Type</strong></th>
            <th class="sorting text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0"><strong> Product Info</strong></th>
            <th class="sorting text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0"><strong>Color</strong></th>
            <th class="sorting text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0"><strong>Quantity</strong></th>
            <th class="sorting text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0"width="280px" ><strong style="margin-left:75px;">Action</strong></th>
        </tr>
        @foreach ($proprice as $proprices)
       
        <tr>
            <td>{{ $proprices->id }}</td>
            <td>{{ $proprices->part_type }}</td>
            <td>{{ $proprices->product_info }}</td>
            <td>{{ $proprices->color }}</td>
            <td>{{ $proprices->quantity }}</td>
            <td>
                <form action="{{ route('admin.proprice.destroy',$proprices->id) }}" method="POST" style="margin-left:44px;">
            
                <a class="btn btn-primary" href="{{ route('admin.proprice.edit',$proprices->id) }}">Edit</a>
                
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
   

@endsection