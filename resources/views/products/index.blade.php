@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Products</div>

                <div class="card-body">
                  @foreach ($products as $product)
                  <p>{{$product->name}}</p>
                  @endforeach

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
