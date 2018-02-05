<div class="form-group{{ $errors->has('kode') ? ' has-error' : '' }}">
    {!! Form::label('kode', 'Kode') !!}
    {!! Form::text('kode', null, ['class' => 'form-control', 'id' => 'kode', 'required' => 'required', 'autofocus']) !!}
    <small class="text-danger">{{ $errors->first('kode') }}</small>
</div>

<div class="form-group{{ $errors->has('pangkat') ? ' has-error' : '' }}">
    {!! Form::label('pangkat', 'Pangkat') !!}
    {!! Form::text('pangkat', null, ['class' => 'form-control', 'id' => 'pangkat', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('pangkat') }}</small>
</div>

<div class="form-group{{ $errors->has('remunerasi') ? ' has-error' : '' }}">
    {!! Form::label('remunerasi', 'Remunerasi') !!}
    {!! Form::number('remunerasi', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('remunerasi') }}</small>
</div>

<div class="form-group text-right m-b-0">
    <a href="{{ empty($bread['0']) ? url()->previous() : $bread['0']  }}" class="btn btn-white waves-effect waves-light m-l-5">
        Cancel
    </a>
    <button class="btn btn-primary waves-effect waves-light" type="submit">
        Submit
    </button>
</div>
