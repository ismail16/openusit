@extends('admin.layouts.master')
@section('title','Edit Student Course')

@section('content')
<section class="content">
    <div class="row">
        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <div class="col-12">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{$error}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        @endforeach
        @endif
        <div class="col-md-12">
            <div class="card">
                <form method="POST" action="{{route('admin.student-course.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-md-4 pb-1">
                                <label class="control-label mb-0">User ID</label>
                                <div class="">
                                    <input type="text" name="user_id" class="form-control form-control-sm w-100" placeholder="User ID">
                                </div>
                            </div>
                            <div class="col-md-4 pb-1">
                                <label class="control-label mb-0">Course ID</label>
                                <div class="">
                                    <input type="text" name="course_id" class="form-control form-control-sm w-100" placeholder="Course ID">
                                </div>
                            </div>
                            <div class="col-md-4 pb-1">
                                <label class="control-label mb-0">Batch ID </label>
                                <div class="">
                                    <input type="text" name="batch_id" class="form-control form-control-sm w-100" placeholder="Batch ID">
                                </div>
                            </div>
                            <div class="col-md-4 pb-1">
                                <label class="control-label mb-0">Fees</label>
                                <div class="">
                                    <input type="number" name="fees" class="form-control form-control-sm w-100" placeholder="Fees">
                                </div>
                            </div>
                            <div class="col-md-4 pb-1">
                                <label class="control-label mb-0">Given Amount</label>
                                <div class="">
                                    <input type="number" name="given_amount" class="form-control form-control-sm w-100" placeholder="Given Amount">
                                </div>
                            </div>

                            <div class="col-md-4 pb-1">
                                <label class="control-label mb-0">Payment Status</label>
                                <div class="">
                                    <select name="p_status" class="form-control form-control-sm">
                                        <option value="0">Unpaid</option>
                                        <option value="1">Paid</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 pb-1">
                                <label class="control-label mb-0">Duration</label>
                                <div class="">
                                    <input type="number" name="duration" class="form-control form-control-sm w-100" placeholder="Duration">
                                </div>
                            </div>
                            <div class="col-md-4 pb-1">
                                <label class="control-label mb-0">Is certified</label>
                                <div class="">
                                    <select name="is_certified" class="form-control form-control-sm">
                                        <option value="0">NO</option>
                                        <option value="1">YES</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 pb-1">
                                <label class="control-label mb-0">Result</label>
                                <div class="">
                                    <input type="text" name="result" class="form-control form-control-sm w-100" placeholder="Result">
                                </div>
                            </div>
                            <div class="col-md-4 pb-1">
                                <label class="control-label mb-0">Status</label>
                                <div class="">
                                    <select name="status" class="form-control form-control-sm">
                                        <option value="0">Hide From Frontend</option>
                                        <option value="1">Show On Frontend</option>
                                    </select>
                                </div>    
                            </div>    
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('admin.student-course.index')}}" class="btn btn-sm btn-info"> <i class="fa fa-list"></i> student-course</a>
                        <div class="float-right">
                            <a href="{{route('admin.student-course.index')}}" class="btn btn-sm btn-secondary mr-2"> Cancel</a>
                            <button type="submit" class="btn btn-sm btn-info"><i class="fa fa-sync"></i> Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection


@push('scripts')
    <script src="{{asset('backend_assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script>
        $(function () {
            // Summernote
            $('.textarea').summernote()
        })
    </script>
@endpush

