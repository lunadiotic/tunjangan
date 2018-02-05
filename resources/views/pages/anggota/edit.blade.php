@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="card-box">
                {!! Form::model($anggota, ['route' => ['anggota.update', $anggota->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
                @include('pages.anggota._form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
