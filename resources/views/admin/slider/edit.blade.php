@extends('layouts.admin.app')

@section('title', 'Bornomala IT | Admin Dashboard')

@push('css')
<link rel="stylesheet" href="{{asset('bower_components/select2/dist/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/iCheck/all.css')}}">
@endpush

@section('content')
<div class="box box-default">
    <div class="box-header with-border">
        <a href="{{route('admin.slider.index')}}" class="btn btn-sm btn-primary"> <i class="fa fa-list"></i> All Slider</a>
    </div>
    <!-- /.box-header -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('admin.slider.update',$slider->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control form-control-sm"/>
                        <img src="{{asset('images/slider/'.$slider->image)}}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="1">Active</label>
                        <input type="radio" name="status" value="1" id="1" {{$slider->status == 1 ? 'checked':''}}/>
                        <label for="2">Deactive</label>
                        <input type="radio" name="status" value="0" id="2" {{$slider->status == 0 ? 'checked':''}}/>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <div class="box-footer">
          <input type="submit" class="btn btn-sm btn-primary pull-right" value="Save">
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script src="{{asset('bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script>
    $(function(){
        $('.select2').select2();
        // $('.select2').change(function(){
        //     alert($(this).val());
        // });
    });
</script>
@endpush