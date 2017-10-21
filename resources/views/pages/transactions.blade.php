@extends('layouts.app')

@section('content')
    <h1>View Transactions</h1>
    <p>All my Transactions</p>
     <table class="table table-striped table-inverse">
     <tr>
        <th>Product name</th>
        <th>Price</th>
        <th>Discount</th>
        <th>Final Price</th>
        <th>Notes</th>
        <th>Purchased by</th>
        <th>Date purchased</th>
        <th>Action</th>
     <tr>
    @if (count($purchases)>0)
        @foreach($purchases as $purchase)
            @if ($purchase->price>=50 && $purchase->price<=100)
                {{$discount=0}}
                @elseif ($purchase->price>=112 && $purchase->price<=115)
                {{$discount=0.25}}
                @elseif ($purchase->price>=120)
                {{$discount=0.50}}
                @else
                {{$discount=0.0}}
            @endif
            <tr>
                <td>{{$purchase->product_name}}</td>
                <td>{{$purchase->price}}</td>
                <td>{{$discount}}</td>
                <td>{{$purchase->price-$discount}}</td>
                <td>{{$purchase->notes}}</td>
                <td>{{ Auth::user()->name}}</td>
                <td>{{$purchase->created_at}}</td>
                <td><a href="/update" class="btn btn-success">Confirm Order</a></td>
            </tr>
        @endforeach
    @else
        <p>No transactions found</p>
    @endif
    </table>     
@endsection
