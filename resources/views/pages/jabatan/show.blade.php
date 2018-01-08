@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Jabatan Detail : {{ $jabatan->jabatan }}
                        </h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Kode</th>
                                <td>{{ $jabatan->kode }}</td>
                            </tr>
                            <tr>
                                <th>Jabatan</th>
                                <td>{{ $jabatan->jabatan }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End row -->
@endsection
