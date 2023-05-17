@extends('layout.index')
@section('content')

<div class="container py-5">
	<h4 class="fw-bold mb-3">List Mahasiswa</h4>
	
	<div class="row">
		<div class="col">
			<form>
				<div class="row mb-3">
					<label for="inputProdi" class="col-sm-2 col-form-label">NIM</label>
					<div class="col-sm-6">
						<input type="text" name="prodi" class="form-control" id="inputProdi">
					</div>
					<label for="inputProdi" class="col-sm-2 col-form-label">Nama</label>
					<div class="col-sm-6">
						<input type="text" name="prodi" class="form-control" id="inputProdi">
					</div>
				</div>

				<button type="submit" class="btn btn-sm btn-success">simpan</button>
			</form>
		</div>
	</div>

</div>

@endsection