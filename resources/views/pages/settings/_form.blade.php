<div class="tab-content card-box">
    <div class="tab-pane active" id="settings-v">
        <div class="form-group{{ $errors->has('remun_percent') ? ' has-error' : '' }}">
            {!! Form::label('remun_percent', 'Persentasi Remun') !!}
            {!! Form::text('remun_percent', null, ['class' => 'form-control', 'required' => 'required']) !!}
            <small class="text-danger">{{ $errors->first('remun_percent') }}</small>
        </div>
    </div>
</div>
