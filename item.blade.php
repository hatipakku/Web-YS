@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <p>{{$test_message}}</p>
            </div>
            <div>
                <a href="{{url('/')}}"> ホーム </a>
            </div>
        </div>
    </div>
</div>
@endsection
