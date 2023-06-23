@extends('layouts.app')
@section('content')
<div class="container">
<h3>Tambah Data Mahasiswa</h3> 
	<form method="post" action="{{ url('/mahasiswa') }}">
	@csrf 
		<table>
		<tr>
			<td>NIM</td>
			<td><input type="text" name="mhsw_nim"></td> 
		</tr>
		<tr> 
			<td>NAMA</td>
			<td><input type="text" name="mhsw_nama"></td>
		</tr>
		<tr> 
			<td>JURUSAN</td>
			<!--<td><input type="text" name="mhsw_jurusan"></td>-->
			<td>
				<select name="mhsw_jurusan" id="mhsw_jurusan">			
					@foreach($jurusan_rows as $row)
					  <option value="{{ $row->nama_jurusan }}">{{ $row->nama_jurusan }}</option>
					@endforeach
				</select>
			</td>
		</tr>
		<tr> 
			<td>ALAMAT</td>
			<td><input type="text" name="mhsw_alamat"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="SIMPAN"></td>
		</tr>
		</table>
	</form>
</div>

@endsection