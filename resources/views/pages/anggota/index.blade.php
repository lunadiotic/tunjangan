@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <h4 class="m-t-0 header-title">
                    <b>Anggota</b>
                    <a href="{{ route('anggota.create') }}" class="btn btn-primary waves-effect waves-light pull-right" style="margin-top: -8px;">Tambah Anggota</a>
                </h4>

                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th width="30">No</th>
                        <th>NRP</th>
                        <th>Nama</th>
                        <th>TTL</th>
                        <th>Pangkat</th>
                        <th>Jabatan</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                    </thead>


                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- End row Datatable -->
@endsection

@section('scripts')
    <script type="text/javascript">
        var table = $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('data.anggota') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'no_anggota', name: 'no_anggota'},
                {data: 'nama', name: 'nama'},
                {data: 'ttl', name: 'ttl'},
                {data: 'pangkat', name: 'pangkat'},
                {data: 'jabatan', name: 'jabatan'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
    </script>
@endsection
