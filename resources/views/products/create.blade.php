@extends('products.layout')
@section('content')

    <div class="section create">
 
        <h1>Create New Product</h1>
        <hr>
        {{-- <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                </div>
            </div>
        </div> --}}
        
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="form-group row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>MODEL</strong>
                        <input type="text" name="model" class="form-control" placeholder="Model Name" value="{{ old('model') }}" autofocus>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>STORAGE</strong>
                        <input type="text" name="storage" class="form-control" placeholder="Desired Storage" value="{{ old('storage') }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>IMAGE</strong>
                        <input type="text" name="image" class="form-control" placeholder="Image location" value="{{ old('image') }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>PRICE</strong>
                        <textarea  rows="1" type="text" name="price" class="form-control" placeholder="Product Price" value="{{ old('price') }}"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </form>
    </div>

@endsection