@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Pangkat Detail : {{ $tunjangan->status }}
                        </h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Kode</th>
                                <td>{{ $tunjangan->kode }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{ $tunjangan->status }}</td>
                            </tr>
                            <tr>
                                <th>Tunjangan</th>
                                <td>{{ $tunjangan->tunjangan }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End row -->
@endsection
