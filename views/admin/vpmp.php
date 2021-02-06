<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Berkas PMP</h1>
          </div>
          <a href ="<?php echo base_url('admin/berkas_pmp/tambah_berkas') ?>"class="btn btn-sm btn-primary mb-3">Tambah Data</a>
               <?php echo $this->session->flashdata('pesan') ?> 
                 <a class="btn btn-danger btn-sm mb-3" href="<?php echo base_url('admin/berkas_pmp/print') ?>"><i class="fa fa-print">PRINT</i></a>    

          <table class="table table-striped  table-bordered table-hover  " >
            <thead>
              <tr>
                <th>no</th>
              
               
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
                <th>Aksi</th>

          </tr>

             </thead>
             <tbody>
              <?php
              $no=1;
              foreach($pmp as $bk):?>
                <tr>
                  <td><?php echo $no++ ?></td>
                 
                    
                    <td><?php echo $bk->no_berkas ?></td>
                    <td><?php echo $bk->nama_berkas ?></td>
                    <td><?php echo $bk->jenis_berkas ?></td>
                    <td><?php echo $bk->bidang ?></td>
                    <td><?php echo $bk->bulan ?></td>
                    <td><?php echo $bk->tahun ?></td>
                    <td><?php echo $bk->Rak ?></td>
                    <td><?php echo $bk->box ?></td>
                    <td><?php echo $bk->file ?>
                      
                    </td>
                    
                    <td><?php 
                    if($bk->status == "0"){
                      echo "<span class='badge badge-danger'>tidak tersedia
                      </span>";
                    }else{
                      echo "<span class='badge badge-primary'> tersedia
                      </span>";
                    }

                      ?></td>

                      <td>
                     
                        <a href ="<?php echo base_url('admin/berkas_pmp/detail_pmp/').$bk->id_pmp ?>"class="btn btn-sm btn-success mb-1 "><i class=" 
                          fas fa-eye"></i></a>
                        <a href ="<?php echo base_url('admin/berkas_pmp/delete/').$bk->id_pmp ?>"class="btn btn-sm btn-danger mb-1" onclick="return confirm('yakin')"><i class=" 
                          fas fa-trash"></i></a>
                     
                        <a href ="<?php echo base_url('admin/berkas_pmp/edit_berkas/').$bk->id_pmp ?>"class="btn btn-sm btn-primary mb-1 "><i class="
                         fas fa-edit"></i></a>
                        <a href ="<?php echo base_url('admin/berkas_pmp/print_id/').$bk->id_pmp ?>"class="btn btn-sm btn-warning mb-1 "><i class="
                         fas fa-edit"></i></a>
                       

                      </td>
                    </tr>
              <?php endforeach;?>

              
             </tbody>
          </table>
      </section>
  </div>