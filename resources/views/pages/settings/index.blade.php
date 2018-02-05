@extends('layouts.app')

@section('content')
    {!! Form::model($setting, ['route' => 'setting.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}

    <div class="row">
        <div class="col-md-12">
          {!! Form::submit('Save All', ['class' => 'btn btn-primary pull-right']) !!}
        </div>
    </div>
    <br>
    
    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <div class="col-xs-2"> <!-- required for floating -->
              <!-- Nav tabs -->
              <ul class="nav nav-tabs tabs-left sideways">
                <li class="active"><a href="#settings-v" data-toggle="tab">Settings</a></li>
              </ul>
            </div>

            <div class="col-xs-10">
              <!-- Tab panes -->
              @include('pages.settings._form')
            </div>

            <div class="clearfix"></div> 
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
          {!! Form::submit('Save All', ['class' => 'btn btn-primary pull-right']) !!}
        </div>
    </div>
    <!-- end row -->
    {!! Form::close() !!}
    <!-- End row Datatable -->
@endsection
