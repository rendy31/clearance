@extends('layout.index')
@section('content')

<div class="container py-5">
	<h4 class="fw-bold mb-3">List Mahasiswa</h4>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">NIM</th>
							<th scope="col">Nama</th>
							<th scope="col">Prodi</th>
							<th scope="col">Dosen PA</th>
							<th scope="col"><span class="badge" style="color:royalblue;">
								<a href="mahasiswa/create" style="text-decoration: none;">
									<i class="bi bi-plus-square"></i> Tambah Data</span>
								</a>
							</th>
						</tr>
					</thead>
					<tbody class="table-group-divider">
						<tr>
							<td>113063C2122007</td>
							<td>Rendy Dwi PRadana</td>
							<td>Keperawatan</td>
							<td>Aulia Rachman</td>
							<td>
								<span class="badge" style="color:darkorange;"><i class="bi bi-pencil-square"></i> Edit </span>
								<span class="badge" style="color:red;"><i class="bi bi-x-square"></i> Hapus </span>
							</td>
						</tr>
						
						
					</tbody>
				</table>
			</div>
</div>

@endsection