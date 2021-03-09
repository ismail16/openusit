@extends('admin.layouts.master')
@section('title','All category')

@push('css')

@endpush

@section('content')
<!-- <div class="content-wrapper"> -->
    <section class="content">
        <div class="row">
            @if(session()->has('message'))
            <div class="col-lg-12 col-xl-12 d-flex justify-content-center">
                <div class="alert alert-success text-center pr-3 pl-3 p-1 mb-1">
                    {{session('message')}}
                    <button type="button" class="close ml-4 text-danger" data-dismiss="alert">&times;</button>
                </div>
            </div>
            @endif
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <a href="{{ route('admin.category.create') }}" class="pull-right btn btn-sm btn-primary float-right ml-2"> <i
                                class="fa fa-plus"></i> Add New</a>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#SL</th>
                                            <th>Category Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($categories as $category)
                                        <tr>
                                            <td>{{ $loop->index+1 }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>
                                                @if($category->status == 0)
                                                <span class="badge bg-yellow">Inactive</span>
                                                @else
                                                <span class="badge bg-green">Actived</span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <a href="{{route('admin.category.edit', $category->id)}}"
                                                    class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>

                                                    <a href="#" class="btn btn-xs btn-danger table-action-btn on_delete"
                                                    data-content="{{$loop->index+1}}"><i
                                                    class="fa fa-trash"></i></a>

                                                    <form id="on_delete{{$loop->index+1}}"
                                                        action="{{route('admin.category.destroy', $category->id)}}"
                                                        method="post" class="delete hidden"
                                                        data-content="{{$category->id}}">
                                                        {{csrf_field()}}
                                                        {{method_field('DELETE')}}
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<!-- </div> -->
@endsection

@push('scripts')

@endpush
