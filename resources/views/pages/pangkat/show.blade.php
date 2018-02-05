@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Pangkat Detail : {{ $pangkat->pangkat }}
                        </h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Kode</th>
                                <td>{{ $pangkat->kode }}</td>
                            </tr>
                            <tr>
                                <th>Pangkat</th>
                                <td>{{ $pangkat->pangkat }}</td>
                            </tr>
                            <tr>
                                <th>Remunerasi</th>
                                <td>{{ $pangkat->remunerasi }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End row -->
@endsection
