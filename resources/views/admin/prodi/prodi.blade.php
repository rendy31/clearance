@extends('layout.index')
@section('content')

<div class="container py-5">
	<h4 class="fw-bold mb-3">Program Studi </h4>
	
	@if (session('sukses'))
	<div class="alert alert-success" role="alert">
		<i class="bi bi-check2-square"></i> {{ session('sukses') }}
	</div>
	@endif
	<div class="row">
		<div class="col">
			<form action="/prodi" method="post">
				@csrf
				<div class="row mb-3">
					<label for="inputProdi" class="col-sm-2 col-form-label">Prodi</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputProdi" name="namaProdi" value="">
					</div>
				</div>
				
				<button type="submit" class="btn btn-sm btn-success">simpan</button>
			</form>
		</div>
		<div class="col">
			<table class="table">
				<tbody>
					@foreach ($prodis as $prodi)
					<tr>
						<td>{{$prodi->namaProdi}}</td>
						<td>
							<span class="badge" style="color:darkorange;"><i class="bi bi-pencil-square"></i> Edit </span>
							<span class="badge" style="color:red;"><i class="bi bi-x-square"></i> Hapus </span>
						</td>
					</tr>
					@endforeach()
				</tbody>
			</table>
		</div>
	</div>

</div>

@endsection