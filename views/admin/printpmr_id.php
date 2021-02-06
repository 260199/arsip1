<title>Data Arsip Bidang PMR</title>


 <h1 align="center">Arsip</h1> <h2 align="center">BPJS KC PAYAKUMBUH</h2>
 
<hr>	
<table border="1.5" rules="all" width="50%" height="15%" align="center">
<h2 align="center">Cetak Laporan Berkas Masuk <br></h2>

	<tr>
		<td>
			NO Berkas
		</td>
		<td >
			<?=$data->no_berkas?>
		</td>
	</tr>
	<tr>
		<td>
			Nama Berkas
		</td>
		<td>
			<?=$data->nama_berkas?>
		</td>
	</tr>
	<tr>
		<td>
			Jenis Berkas
		</td>
		<td>
			<?=$data->jenis_berkas?>
		</td>
	</tr>
	<tr>
		<td>
			Bidang
		</td>
		<td>
			<?=$data->bidang?>
		</td>
	</tr>
	<tr>
		<td>
			Bulan 
		</td>
		<td>
			<?=$data->bulan?>
		</td>
	</tr>
	<tr>
		<td>
			 Tahun
		</td>
		<td>
			<?=$data->tahun?>
		</td>
	</tr>
	<tr>
		<td>
			 Rak
		</td>
		<td>
			<?=$data->Rak?>
		</td>
	</tr>
	<tr>
		<td>
			 Box
		</td>
		<td>
			<?=$data->box?>
		</td>
	</tr>
</table>
<br><br><br><br>
<div class="text-rigth" align="right">
<h3> Payakumbuh, <?= date('d F Y');?>&emsp;&emsp;&emsp;&emsp;</h3>
<br><br><br><br><br><br>
<h3> (..................................................)&emsp;&emsp;&emsp;&emsp;</h3>

<script type="text/javascript">
	window.print();
</script>