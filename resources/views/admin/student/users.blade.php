@extends('admin.layouts.master')

@section('title', 'Users')

@push('css')
<link rel="stylesheet" href="{{asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endpush

@section('content')
<div class="box">

    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <!-- <th>#SL</th> -->
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Registration Date</th>
            <th>Last Update</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->email}}</td>
            <td>{{date('d M Y', strtotime($user->created_at))}}</td>
            <td>{{date('d M Y', strtotime($user->updated_at))}}</td>
            <td class="text-center">
                <a href="" class=""> <i class="fa fa-edit"></i> </a>
                <a href="" class=""> <i class="fa fa-trash"></i> </a>
            </td>
        </tr>
        @endforeach
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
