<h1 align="center"><b>Bidang PMP</h1>
	<hr>
	<h3 align="center">Laporan Berkas PMP</h3>
	<h3 align="center"><?= date('d M Y'); ?></h3>
<!DOCTYPE >
<html>
<head>
	<title></title>
</head>
<body>

<table border="1.5" rules="all" width="100%" height="10%" align="center">
	<tr>
				<th>No Berkas</th>
                <th>Nama Berkas</th>
                <th>Jenis Berkas</th>
                <th>Bidang</th>
                <th>Bulan</th>
                <th>Tahun</th>
                <th>Rak</th>
                <th>Box</th>
                
	</tr>
	
		<?php
		$no=1;
		foreach ($pmp as $bk ):?>
			<tr align="center">
					<td><?php echo $bk->no_berkas ?></td>
                    <td><?php echo $bk->nama_berkas ?></td>
                    <td><?php echo $bk->jenis_berkas ?></td>
                    <td><?php echo $bk->bidang ?></td>
                    <td><?php echo $bk->bulan ?></td>
                    <td><?php echo $bk->tahun ?></td>
                    <td><?php echo $bk->Rak ?></td>
                    <td><?php echo $bk->box ?></td>
                    
			</tr>
		<?php endforeach ; ?>
</table border="1.5" rules="all" width="100%" height="10%" align="center">
</body>
</html><br><br><br>
<h3 align="right">Payakumbuh,<?= date('d M Y'); ?>&emsp;&emsp;&emsp;</h3>
<br><br><br><br><br><br>
<h3 align="right">(..............................................)&emsp;&emsp;&emsp;</h3>
	<script type="text/javascript">
		window.print();
	</script>