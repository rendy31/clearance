@extends('layout.index')
@section('content')

<div class="container py-5">
	<h4 class="fw-bold mb-3">Tahun Akademik</h4>
	
	<div class="row">
		<div class="col-md-6 mb-5">
			<form>
				<div class="row mb-3">
					<label for="inputProdi" class=" col-form-label">Tahun Akademik</label>
					<div class="col-sm-10">
						<select class="form-select" aria-label="Default select example">
							<option selected>Tahun Akademik</option>
							<option value="1">2022/2023</option>
							<option value="2">2023/2024</option>
							<option value="3">2024/2025</option>
						</select>
					</div>
				</div>
				<div class="row mb-3">
					<label for="inputProdi" class="col-form-label">Tanggal Aktif</label>
					<div class="col-sm-10 d-inline-flex">
						<input type="date" class="form-control" name="tglMulai" value=""> 
						s.d 
						<input type="date" class="form-control" name="tglAkhir" value="">
					</div>
				</div>
				
				<button type="submit" class="btn btn-sm btn-success">simpan</button>
			</form>
		</div>
		<div class="col-md-6">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<th>Tahun Akademik</th>
						<th>Tgl Mulai Clearance</th>
						<th>Tgl Akhir Clearance</th>
						<th></th>
					</thead>
					<tbody>
						<tr>
							<td>2022/2023</td>
							<td>17/5/2023</td>
							<td>25/5/2023</td>
							<td>
								<span class="badge" style="color:darkorange;"><i class="bi bi-pencil-square"></i> Edit </span>
							</td>
						</tr>

					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>

@endsection