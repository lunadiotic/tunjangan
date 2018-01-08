<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'required' => 'required', 'autofocus']) !!}
    <small class="text-danger">{{ $errors->first('name') }}</small>
</div>

<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
    {!! Form::label('username', 'Username') !!}
    {!! Form::text('username', null, ['class' => 'form-control', 'id' => 'username', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('username') }}</small>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Email') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'id' => 'email', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('email') }}</small>
</div>

<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    {!! Form::label('password', 'Password') !!}
    <input id="password" type="password" class="form-control" placeholder="Password" name="password">

    @if ($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
    {!! Form::label('role', 'Role Permission ?') !!}
    {!! Form::select('role', $role, null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('role') }}</small>
</div>

<div class="form-group text-right m-b-0">
    <a href="{{ empty($bread['0']) ? url()->previous() : $bread['0']  }}" class="btn btn-white waves-effect waves-light m-l-5">
        Cancel
    </a>
    <button class="btn btn-primary waves-effect waves-light" type="submit">
        Submit
    </button>
</div>
