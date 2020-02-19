@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                        
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @else
                        {{-- <div class="alert alert-warning" role="alert">
                              Member not Added
                            </div> --}}
                        @endif
                   

                   <div class="row">
          <div class="col-md-4">
            
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Recently Addedd Member Members</h4>
              </div>
              <div class="card-body">
                <ul class="list-unstyled team-members">
                  <li>
                    <div class="row">
                            @foreach ($cnt as $cnt)
                            <div class="col-md-5 col-2">
                              Name 
                            </div>
                    <div class="col-md-7 col-2">
                       <strong> {{ $cnt->firstname }} {{ $cnt->middle }}  {{ $cnt->lastname }} </strong> 
                       </div>
                       <hr>     
                             @endforeach
                      
                      <div class="col-md-7 col-7">
                        DJ Khaled
                        <br>
                        <span class="text-muted">
                          <small>Offline</small>
                        </span>
                      </div>
                      <div class="col-md-3 col-3 text-right">
                        <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="row">
                      <div class="col-md-2 col-2">
                        <div class="avatar">
                          <img src="../assets/img/faces/joe-gardner-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                        </div>
                      </div>
                      <div class="col-md-7 col-7">
                        Creative Tim
                        <br>
                        <span class="text-success">
                          <small>Available</small>
                        </span>
                      </div>
                      <div class="col-md-3 col-3 text-right">
                        <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="row">
                      <div class="col-md-2 col-2">
                        <div class="avatar">
                          <img src="../assets/img/faces/clem-onojeghuo-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                        </div>
                      </div>
                      <div class="col-ms-7 col-7">
                        Flume
                        <br>
                        <span class="text-danger">
                          <small>Busy</small>
                        </span>
                      </div>
                      <div class="col-md-3 col-3 text-right">
                        <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Add Member</h5>
              </div>
              <div class="card-body">

            <form action="/members" method="POST">
                        @csrf

              <input type="hidden"  name="user_id" value="{{Auth()->user()->id}}"  id="user_id">
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                            @error('firstname')
                            <small>Kindly Provide the First name</small> <br>
                        @enderror
                        <label>First Name</label>
                        <input type="text" name="firstname" class="form-control" id="name" placeholder="First Name">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                            @error('middle')
                            <small class="alert-warning" >Kindly Provide the Middle name</small> <br>
                        @enderror
                      <div class="form-group">
                        <label>Middle name</label>
                        <input type="text" class="form-control" name="middle" placeholder="Middle Name" >
                      </div>
                    </div>
                    <div class="col-md-3 pl-1">
                            @error('lastname')
                            <small>Kindly Provide the Last name</small> <br>
                        @enderror
                        <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name" name="lastname">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" placeholder="Home Address" name="address">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" placeholder="City" name="city">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="text"  class="datepicker form-control" name="dateofbirth" id="datepicker" placeholder="">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Zone</label>
                        <select class="form-control" name="zone_id">
                            <option value="">Kindly slection Zone </option>
                             @foreach ($zn as $zn)
                            <option value="{{ $zn->id }}">{{ $zn->zone_name }}</option> 
                             @endforeach
                        </select>
                    @if ($errors->has('zone_id'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('zone_id') }}</strong>
                        </span>
                        @endif
                     </div>

                    </div>
                  </div>
                  <div class="row">
                        <div class="col-md-6 pr-1">
                          <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" placeholder="Phone Number" name="phonenumber">
                          </div>
                        </div>
                        <div class="col-md-3 px-1">
                          <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Your email" >
                          </div>
                        </div>
                        <div class="col-md-3 pl-1">
                          <div class="form-group">
                            <label>Gender</label>
                            <select name="gender" class="form-control" id="gender">
                            <option value="">Select Gender</option>   
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                        </div>
                        </div>
                      </div>
                  <div class="row">
                        <div class="col-md-6 pr-1">
                          <div class="form-group">
                            <label>Marital Status</label>
                            <select name="maritalstatus" class="form-control" id="">
                                <option value="">Your Status Please</option>
                                <option value="Married">Married</option>
                                <option value="Youth">Youth</option>
                                <option value="widow">widow</option>
                                <option value="widowal">widowal</option>
                            </select>
                          </div>
                        </div>
                        
                        <div class="col-md-6 pl-1">
                          <div class="form-group">
                            <label>Department</label>
                            <select name="department_id" class="form-control" id="department_id">
                            <option value="">Select Department</option>   
                            @foreach ($dpt as $dpt)
                            <option value="{{ $dpt->id }}">{{ $dpt->department }}</option> 
                             @endforeach
                          </select>
                        </div>
                        </div>
                      </div>
                    <div class="row">
                    <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">Add Member</button>
                      <button type="submit" class="btn btn-primary btn-round">Add a Member</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#datepicker').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd'
     });
</script>
@endsection
