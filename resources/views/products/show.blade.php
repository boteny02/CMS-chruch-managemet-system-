@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="btn btn-danger" width="20px" height="20px" style="bgcolor:#e83e8c"> {{$cnt}}</div>
                        <div class="btn btn-danger"><small>you have Created of Products</small></div>
                        <a href="{{route ('questionnaires.create') }}" class="btn btn-success">Create Questionnaire</a>
                        <a href="{{route ('products.create') }}" class="btn btn-success">Add products</a>
                </div>

                <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2> Show Product</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                            </div>
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                {{ $product->name }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Details:</strong>
                                {{ $product->description }}
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>
@endsection
