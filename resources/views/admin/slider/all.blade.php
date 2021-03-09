@extends('layouts.admin.app')

@section('title', 'All Slider')

@push('css')
<link rel="stylesheet" href="{{asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endpush

@section('content')
<div class="box box-success">
    <div class="box-header">
        <a href="{{route('admin.slider.create')}}" class="pull-right btn btn-sm btn-primary"> <i class="fa fa-plus"></i> Add New</a>

    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Status</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <tbody> 
            @foreach($sliders as $slider)
            <tr>
                <td>{{$slider->id}}</td>
                <td><img src="{{asset('images/slider/'.$slider->image)}}" height="50" alt=""></td>
                <td class="text-center">
                @if($slider->status == 0)
                  <span class="badge bg-red">Deactive</span>
                  @else
                  <span class="badge bg-green">Active</span>
                  @endif
                </td>
                <td class="text-center">
                  <a href="{{route('admin.slider.edit',$slider->id)}}" class="btn btn-sm btn-info"> <i class="fa fa-edit"></i> </a>
                  <form action="{{route('admin.slider.destroy', $slider->id)}}" method="post"
									style="display: inline;"
									onsubmit="return confirm('Are you Sure? Want to delete')">
									@csrf
									@method('DELETE')
									<button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i>
									</button>
								</form>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    <!-- /.box-body -->
</div>
@endsection

@push('scripts')
<script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endpush