@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <h4 class="m-t-0 header-title">
                    <b>Remunerasi</b>
                </h4>

                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th width="30">ID</th>
                        <th>No Anggota</th>
                        <th>Nama</th>
                        <th>Pangkat</th>
                        <th>Jabatan</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                            <tr>
                                <td>{{ $row['no'] }}</td>
                                <td>{{ $row['no_anggota'] }}</td>
                                <td>{{ $row['nama'] }}</td>
                                <td>{{ $row['pangkat'] }}</td>
                                <td>{{ $row['jabatan'] }}</td>
                                <td>{{ $row['tanggal'] }}</td>
                                <td>{!! $row['remun'] !!}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- End row Datatable -->
@endsection

@section('scripts')
    <script type="text/javascript">
        var table = $('#datatable').DataTable();
    </script>
@endsection
