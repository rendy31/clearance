@extends('layout.index')
@section('content')

<div class="container py-5">
	<h4 class="fw-bold mb-3">Ubah Program Studi </h4>
	
	<div class="row">
		<div class="col">
			<form action="/prodi/update" method="post">
				@csrf
				<div class="row mb-3">
					<input type="hidden" name="id" value="{{ $prodi->id }}">
					<label class="col-sm-2 col-form-label">Prodi</label>
					<div class="col-sm-6">
						<input type="text" name="prodi" class="form-control" value="{{ $prodi->namaProdi }}">
					</div>
				</div>

				<button type="submit" class="btn btn-sm btn-success">edit</button>
			</form>
		</div>
	</div>

</div>

@endsection