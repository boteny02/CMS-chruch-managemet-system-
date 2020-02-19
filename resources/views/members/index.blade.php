@extends('tables')

@section('content')

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">  
                </div>

                <div class="row">
                        <div class="col-lg-12 col-md-12">
                          <div class="card">
                            <div class="card-header card-header-success">
                              <h4 class="card-title">Members Stats</h4>
                              <p class="card-category">Recently Add Members</p>
                            </div>
                            <div class="card-body table-responsive">
                              <table class="table table-hover">
                                <thead class="text-success">
                                  <tr><th>ID</th>
                                  <th>Name</th>
                                  <th>Address and Zone</th>
                                  <th>Action</th>
                                </tr></thead>
                                <tbody>
                                        @foreach ($members as $member)
                                  <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{ $member->firstname }} {{ $member->middle }} {{ $member->lastname }}</td>
                                    <td>{{ $member->address }} {{ $member->zone_id }}</td>
                                    <td>
                                        
                                            <form action="{{ route('members.destroy',$member->id) }}" method="POST">
   
                                                    <a class="btn btn-info" href="{{ route('members.show',$member->id) }}">Show</a>
                                    
                                                    <a class="btn btn-primary" href="{{ route('members.edit',$member->id) }}">Edit</a>
                                   
                                                    @csrf
                                                    @method('DELETE')
                                      
                                                    <button type="submit" class="btn btn-danger">Delete</button>
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
                
@endsection
