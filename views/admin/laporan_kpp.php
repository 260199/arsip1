<!DOCTYPE >
<html>
<head>
	<title></title>
</head>
<body>

<teble>
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
               <th>Status</th>
	</tr>
	
		<?php
		$no=1;
		foreach ($kpp as $kp ):?>
			<tr>
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
	
	</script>
</teble>
</body>
</html>