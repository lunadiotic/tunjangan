@extends('layouts.app')

@section('content')

<script type="text/javascript">
	function calcRemun(){
		var num0 = eval(form.remun_percent.value);
		var num1 = eval(form.remun.value);
		var num2 = eval(form.tidak_hadir.value);
		var num3 = eval(form.tunjangan.value);
		
		
		var hit1 = ((num2 * num0)/100)*num1;
		var hit2 =  num1 - hit1;
		var hit3 = 0;
		if (hit2 <= 0){
			hit3 = 0;
		}else{
			hit3 = hit2;
		}
		
		document.getElementById('pinalti').value = hit1;
		document.getElementById('total_remun').value = hit3 + num3;
	}
</script>

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
                        <form id="form"  method="POST" action="{{ route('remun.set.post') }}">
                                {{ csrf_field() }}
                                <input type="hidden" name="anggota_id" id="anggota_id" value="{{ $anggota->id }}">
                                <input type="hidden" name="remun_percent" id="remun_percent" value="{{ $setting->remun_percent }}">
                                <input type="hidden" name="tanggal_remun" id="tanggal" value="{{ $tanggal }}">
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
                                        <th>Status Kawin</th>
                                        <td>{{ $anggota->tunjangan->status }}</td>
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
                                        <th>Tidak Hadir</th>
                                        <td>
                                            <input type="text" name="tidak_hadir" id="tidak_hadir" class="form-control input-sm" onchange="calcRemun()" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Pinalti</th>
                                        <td>
                                            <input type="text" name="pinalti" id="pinalti" class="form-control input-sm" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Tunjangan</th>
                                        <td>
                                            <input type="text" name="tunjangan" id="tunjangan" class="form-control input-sm" value="{{ $anggota->tunjangan->tunjangan }}" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Remun</th>
                                        <td>
                                            <input type="text" name="remun" id="remun" class="form-control input-sm" value="{{ $anggota->pangkat->remunerasi }}" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Total Remun</th>
                                        <td>
                                            <input type="text" name="total_remun" id="total_remun" class="form-control input-sm" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                                        </td>
                                    </tr>
                                </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End row -->
@endsection
