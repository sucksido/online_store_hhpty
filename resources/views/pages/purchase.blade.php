@extends('layouts.app')

@section('content')
    <h1>Welcome {{ Auth::user()->name}} - Make a purchase</h1>
    
    <p>Products in a stock</p>
    @if (count($products)>0)
        @foreach($products as $product)
            <div class="well">
                <h3>
                {!! Form::open(['action'=>'PurchasesController@store','method'=>'POST']) !!}
                    <div class="form-group">
                        {{$product->product_name}} - R {{$product->price}}
                        <input type="hidden" id="product_id" name="product_id" value="{{$product->id}}">
                        <input type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id}}">
                        <input type="text" id="notes" name="notes" placeholder="Notes/Comments">
                        {{Form::submit('Add to cart',['class'=>'btn btn-primary'])}}
                    </div>
                {!! Form::close()!!}
                </h3>
            </div>
        @endforeach
    @else
        <p>No products found</p>
    @endif
@endsection