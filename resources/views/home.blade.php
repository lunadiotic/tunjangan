@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
    
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
    
                        Selamat Datang, {{ Auth::user()->name }}
    
                        <div class="row">
                            <div class="col-md-6">
                                <div class="grid-container">
                                    <img src="{{ asset('assets/images/logo.png') }}" height="250" alt="Logo">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="grid-container">
                                    <img src="{{ asset('assets/images/prov-slide.png') }}" height="250" alt="Logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End row Datatable -->
@endsection
