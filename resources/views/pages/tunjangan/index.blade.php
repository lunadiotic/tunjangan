@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <h4 class="m-t-0 header-title">
                    <b>Tunjangan</b>
                    <a href="{{ route('tunjangan.create') }}" class="btn btn-primary waves-effect waves-light pull-right" style="margin-top: -8px;">Tambah Tunjangan</a>
                </h4>

                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th width="30">No</th>
                        <th>Kode</th>
                        <th>Status</th>
                        <th>Tunjangan</th>
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
            ajax: "{{ route('data.tunjangan') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'kode', name: 'kode'},
                {data: 'status', name: 'status'},
                {data: 'tunjangan', name: 'tunjangan'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
    </script>
@endsection
