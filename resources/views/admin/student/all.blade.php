@extends('admin.layouts.master')

@section('title', 'All Student')

@push('css')
<link rel="stylesheet" href="{{asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
<style>
  .pad{
    padding-right: 0px;
  }
</style>
@endpush

@section('content')
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
            <div class="row">
                @php($total= 0)
                @foreach($students as $student)
                  @php($total += $student->given_amount)
                @endforeach
                <div class="col-md-4">
                  <form action="{{route('admin.certificate')}}" method="post">
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <input type="number" name="batch_id" class="form-control form-control-sm" placeholder="Batch ID" required/>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <button type="submit" class="btn btn-sm bg-green"> <i class="fa fa-refresh" aria-hidden="false"></i> Certify</button>
                          </div>
                      </div>
                    </div>
                  </form>
                </div>

                <div class="col-md-4">
                <form action="{{route('admin.payment')}}" method="post">
                  @csrf
                  <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="number" name="id" class="form-control form-control-sm" placeholder="ID" required/>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="number" name="given_amount" class="form-control form-control-sm" placeholder="Due Amount" required/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm bg-green"> <i class="fa fa-refresh" aria-hidden="false"></i> Pay</button>
                        </div>
                    </div>
                  </div>
                </form>
                </div>

                <div class="col-md-4">
                <form action="{{route('admin.result')}}" method="post">
                  @csrf
                  <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="number" name="id" class="form-control form-control-sm" placeholder="ID" required/>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="result" class="form-control form-control-sm" placeholder="Result" required/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <button type="submit" class="pull-left btn btn-sm bg-green"> <i class="fa fa-refresh" aria-hidden="false"></i> Result</button>
                            <span class="badge bg-green" style="margin-left:15px">1000000{{$total}}</span>
                        </div>
                    </div>                    
                  </div>
                </form>
                </div>
            </div>
            <a href="{{route('admin.student.create')}}" class="pull-right btn btn-sm btn-primary float-right ml-2"> <i
              class="fa fa-plus"></i> Add New</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>SL</th>
                    <th>St. ID</th>
                    <th>Name</th>
                    <th>Batch</th>
                    <th>Course Name</th>
                    <th>Duration</th>
                    <th>Total Amount</th>
                    <th>Given Amount</th>
                    <th>Payment Status</th>
                    <th>Certify Date</th>
                    <th>Certification</th>
                    <th>Result</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach($students as $student)
                 <tr>
                  <td>{{$loop->index + 1}}</td>
                  <td class="text-center">{{$student->id}}</td>
                  <td>{{$student->user->name}}</td>
                  <td>{{$student->batch_id}} Batch</td>
                  <td>
                    @if($student->c_name == 1)
                    Microsoft Office Application
                    @elseif($student->c_name == 2)
                    Graphics Design (Photoshop)
                    @elseif($student->c_name == 3)
                    Graphics Design (Illustrator)
                    @else
                    Web Design & Development
                    @endif
                  </td>
                  <td>{{$student->duration}}
                    @if($student->duration > 1 )
                    Month
                    @else
                    Year
                    @endif
                  </td>
                  <td>{{$student->fees}}</td>
                  <td>{{$student->given_amount}}</td>
                  <td class="text-center">
                    @php($amount = $student->fees - $student->given_amount)
                    @if($amount > $student->p_status)
                    <span class="badge bg-red">{{$amount}}</span>
                    @else
                    <span class="badge bg-green">Paid</span>
                    @endif
                  </td>
                  <td>
                    @if($student->is_certified == 1)
                    {{date('d M y', strtotime($student->updated_at))}}
                    @endif
                  </td>
                  <td class="text-center">
                    @if($student->is_certified == 0)
                    <span class="badge bg-red">No</span>
                    @else
                    <span class="badge bg-green">Yes</span>
                    @endif
                  </td>
                  <td class="text-center">
                    @if($student->result == null)
                    <span class="badge bg-red">No</span>
                    @else
                    <span class="badge {{$student->result == 'A+' || $student->result == 'A' || $student->result == 'A-' || $student->result == 'B'?'bg-green':'bg-yellow'}}">{{$student->result}}</span>
                    @endif
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

@endsection
