<h1 align="center"><b>Bidang KPP</h1>
	<hr>
	<h3 align="center">Laporan Berkas KPP</h3>
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
                <th>File</th>
	</tr>
	
		<?php
		$no=1;
		foreach ($kpp as $kp ):?>
			<tr align="center">
					<td><?php echo $kp->no_berkas ?></td>
                    <td><?php echo $kp->nama_berkas ?></td>
                    <td><?php echo $kp->jenis_berkas ?></td>
                    <td><?php echo $kp->bidang ?></td>
                    <td><?php echo $kp->bulan ?></td>
                    <td><?php echo $kp->tahun ?></td>
                    <td><?php echo $kp->Rak ?></td>
                    <td><?php echo $kp->box ?></td>
                    <td><?php echo $kp->file ?>
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