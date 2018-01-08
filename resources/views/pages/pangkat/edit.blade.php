@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="card-box">
                {!! Form::model($pangkat, ['route' => ['pangkat.update', $pangkat->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
                @include('pages.pangkat._form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
