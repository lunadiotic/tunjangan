@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="card-box">
                {!! Form::open(['method' => 'POST', 'route' => 'remun.laporan.print.month', 'class' => 'form-horizontal']) !!}
                    <div class="form-group{{ $errors->has('bulan') ? ' has-error' : '' }}">
                        {!! Form::label('bulan', 'Bulan') !!}
                        {!! Form::text('bulan', null, ['class' => 'form-control', 'id' => 'monthpicker', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('bulan') }}</small>
                    </div>

                    <div class="form-group{{ $errors->has('tahun') ? ' has-error' : '' }}">
                        {!! Form::label('tahun', 'Tahun') !!}
                        {!! Form::text('tahun', null, ['class' => 'form-control', 'id' => 'yearpicker', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('tahun') }}</small>
                    </div>

                    <div class="form-group text-right m-b-0">
                        <a href="{{ empty($bread['0']) ? url()->previous() : $bread['0']  }}" class="btn btn-white waves-effect waves-light m-l-5">
                            Cancel
                        </a>
                        <button class="btn btn-primary waves-effect waves-light" type="submit">
                            Submit
                        </button>
                    </div>                    
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
