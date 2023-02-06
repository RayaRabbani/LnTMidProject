<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2>www.malasngoding.com</h2>
	<h3>Data Pegawai</h3>
 
	<a href="/datakaryawan/tambah"> + Tambah Pegawai Baru</a>
	
	<br/>
	<br/>
	@if (count($errors) > 0)
	<th>Nama</th>
                            @endif
 
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Umur</th>
			<th>Alamat</th>
            <th> No Hp</th>
			<th>Opsi</th>
		</tr>
		@foreach($karyawan as $p)
		<tr>
			<td>{{ $p->namakaryawan }}</td>
			<td>{{ $p->umur }}</td>
			<td>{{ $p->alamat }}</td>
			<td>{{ $p->nohp }}</td>
			<td>
				<a href="/datakaryawan/edit/{{ $p->idkaryawan }}">Edit</a>
				|
				<a href="/datakaryawan/hapus/{{ $p->idkaryawan }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>