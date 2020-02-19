@extends('tables')

@section('content')


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form action="/products" method="POST">
                        @csrf
                            <div class="form-group">

                                
                                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                           
                            
                            @error('name')
                                <small class="warning" >Kindly Provide the Product name</small> <br>
                            @enderror
                        
                              <label for="name">Product Name</label>
                              <input type="text" name="name" class="form-control" id="name" placeholder="Product Name">
                            </div>
                            
                            <div class="form-group">
                                    @error('description')
                                    <small>Kindly Provide the Product Description</small> <br>
                                @enderror
                            <label for="description">Product description</label>
                              <input type="text" name="description" class="form-control" id="description" >
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                </div>
         
@endsection
