<div class="form-group{{ $errors->has('no_anggota') ? ' has-error' : '' }}">
    {!! Form::label('no_anggota', 'NRP') !!}
    {!! Form::text('no_anggota', null, ['class' => 'form-control', 'id' => 'no_anggota', 'required' => 'required', 'autofocus']) !!}
    <small class="text-danger">{{ $errors->first('no_anggota') }}</small>
</div>

<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
    {!! Form::label('nama', 'Nama') !!}
    {!! Form::text('nama', null, ['class' => 'form-control', 'id' => 'nama', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('nama') }}</small>
</div>

<div class="form-group{{ $errors->has('tempat_lahir') ? ' has-error' : '' }}">
    {!! Form::label('tempat_lahir', 'Tempat Lahir') !!}
    {!! Form::text('tempat_lahir', null, ['class' => 'form-control', 'id' => 'tempat_lahir', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('tempat_lahir') }}</small>
</div>

<div class="form-group{{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
    {!! Form::label('tanggal_lahir', 'Tanggal Lahir') !!}
    {!! Form::text('tanggal_lahir', null, ['class' => 'form-control datepicker', 'id' => 'tanggal_lahir', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('tanggal_lahir') }}</small>
</div>

<div class="form-group{{ $errors->has('status_kawin') ? ' has-error' : '' }}">
    {!! Form::label('status_kawin', 'Status Perkawinan') !!}
    {!! Form::select('status_kawin', $status_kawin, null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('status_kawin') }}</small>
</div>

<div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
    {!! Form::label('alamat', 'Alamat Lengkap') !!}
    {!! Form::textarea('alamat', null, ['class' => 'form-control', 'id' => 'alamat', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('alamat') }}</small>
</div>

<div class="form-group{{ $errors->has('kontak') ? ' has-error' : '' }}">
    {!! Form::label('kontak', 'Kontak') !!}
    {!! Form::text('kontak', null, ['class' => 'form-control', 'id' => 'kontak', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('kontak') }}</small>
</div>

<div class="form-group{{ $errors->has('pangkat_id') ? ' has-error' : '' }}">
    {!! Form::label('pangkat_id', 'Pangkat') !!}
    {!! Form::select('pangkat_id', $pangkat, null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('pangkat_id') }}</small>
</div>

<div class="form-group{{ $errors->has('jabatan_id') ? ' has-error' : '' }}">
    {!! Form::label('jabatan_id', 'Jabatan') !!}
    {!! Form::select('jabatan_id', $jabatan, null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('jabatan_id') }}</small>
</div>

<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
    {!! Form::label('status', 'Status') !!}
    {!! Form::select('status', ['aktif' => 'Aktif', 'nonaktif' => 'Non-Aktif'], null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('status') }}</small>
</div>

<div class="form-group text-right m-b-0">
    <a href="{{ empty($bread['0']) ? url()->previous() : $bread['0']  }}" class="btn btn-white waves-effect waves-light m-l-5">
        Cancel
    </a>
    <button class="btn btn-primary waves-effect waves-light" type="submit">
        Submit
    </button>
</div>
