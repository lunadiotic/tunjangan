@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Anggota Detail : {{ $anggota->nama }}
                        </h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <tr>
                                <th>NRP</th>
                                <td>{{ $anggota->no_anggota }}</td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>{{ $anggota->nama }}</td>
                            </tr>
                            <tr>
                                <th>Tempat, Tanggal Lahir</th>
                                <td>{{ $anggota->tempat_lahir }}, {{ $anggota->tanggal_lahir }}</td>
                            </tr>
                            <tr>
                                <th>Status Kawin</th>
                                <td>{{ $anggota->tunjangan->status }}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{ $anggota->alamat }}</td>
                            </tr>
                            <tr>
                                <th>Pangkat</th>
                                <td>{{ $anggota->pangkat->pangkat }}</td>
                            </tr>
                            <tr>
                                <th>Jabatan</th>
                                <td>{{ $anggota->jabatan->jabatan }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{ $anggota->status }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End row -->
@endsection
