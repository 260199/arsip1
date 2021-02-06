<h1 align="center"><b>Bidang P4</h1>
	<hr>
	<h3 align="center">Laporan Berkas P4</h3>
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
		foreach ($p4 as $sp ):?>
			<tr align="center">
					<td><?php echo $sp->no_berkas ?></td>
                    <td><?php echo $sp->nama_berkas ?></td>
                    <td><?php echo $sp->jenis_berkas ?></td>
                    <td><?php echo $sp->bidang ?></td>
                    <td><?php echo $sp->bulan ?></td>
                    <td><?php echo $sp->tahun ?></td>
                    <td><?php echo $sp->Rak ?></td>
                    <td><?php echo $sp->box ?></td>
                    
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