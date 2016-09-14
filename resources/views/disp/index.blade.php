@extends('layout.dafault')
@section('content')
<div class ="container">
<h3>READ</h3>
<h2>Table Mahasiswa</h2>
  <p>Data Mahasiswa</p>
  <table class="table table-hover">
		<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>Kelas</th>
			<th>Email</th>
			<th>Action</th>	
		</tr>
	</thead>
	<tbody>
	@foreach($mahasiswas as $mahasiswa)
		<tr>
			<td>{{$mahasiswa->nim}}</td>
			<td>{{$mahasiswa->nama}}</td>
			<td>{{$mahasiswa->kelas}}</td>
			<td>{{$mahasiswa->email}}</td>
			<td>
				<form method="POST" action="{{ route('home.destroy', $mahasiswa->id) }}" accept-charset="UTF-8">
	                <input name="_method" type="hidden" value="DELETE">
	                <input name="_token" type="hidden" value="{{ csrf_token() }}">
	              	 <a href="{{ route('home.edit', $mahasiswa->id) }}" class="btn btn-warning">EDIT</a> <br/><br/> 
	                <input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" value="Hapus" class="btn btn-danger"/>
	            </form>
			</td>	
		</tr>
	@endforeach
	</tbody>
</table>
  <a href="{{ route('home.create') }}" class="btn btn-success">Add data</a> <br/><br/>
  </div>
@endsection