@extends('layouts.app')

@section('content')
    <h1>Top up account</h1>
    <p>My online shop test from Hybrid Holdings (Pty) Ltd</p>
    @if (count($top_ups)>0)
        @foreach($top_ups as $top_up)
        {!! Form::open(['action'=>['PurchasesController@update',$top_up->id],'method'=>'POST']) !!}
            <div class="form-group">
                Your credit is: <input type="text" id="credit" name="credit" value=" {{$top_up->credit}}">
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Save',['class'=>'btn btn-primary'])}}
            </div>
        {!! Form::close()!!}
        @endforeach
    @endif    
@endsection