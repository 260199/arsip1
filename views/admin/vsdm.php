<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Berkas SDM</h1>
          </div>
          <a href ="<?php echo base_url('admin/berkas_sdm/tambah_berkas') ?>"class="btn btn-sm btn-primary mb-3">Tambah Data</a>
               <?php echo $this->session->flashdata('pesan') ?>     
 <a class="btn btn-danger btn-sm mb-3" href="<?php echo base_url('admin/berkas_sdm/print') ?>"><i class="fa fa-print">PRINT</i></a> 
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
              foreach($sdm as $sd):?>
                <tr>
                  <td><?php echo $no++ ?></td>
                 
                    
                    <td><?php echo $sd->no_berkas ?></td>
                    <td><?php echo $sd->nama_berkas ?></td>
                    <td><?php echo $sd->jenis_berkas ?></td>
                    <td><?php echo $sd->bidang ?></td>
                    <td><?php echo $sd->bulan ?></td>
                    <td><?php echo $sd->tahun ?></td>
                    <td><?php echo $sd->Rak ?></td>
                    <td><?php echo $sd->box ?></td>
                    <td><?php echo $sd->file ?>
                      
                    </td>
                    
                    <td><?php 
                    if($sd->status == "0"){
                      echo "<span class='badge badge-danger'>tidak tersedia
                      </span>";
                    }else{
                      echo "<span class='badge badge-primary'> tersedia
                      </span>";
                    }

                      ?></td>

                      <td>
                     
                       <a href ="<?php echo base_url('admin/berkas_sdm/detail_sdm/').$sd->id_sdm ?>"class="btn btn-sm btn-success mb-1 "><i class=" 
                          fas fa-eye"></i></a>
                         <a href ="<?php echo base_url('admin/berkas_sdm/delete/').$sd->id_sdm ?>"class="btn btn-sm btn-danger mb-1" onclick="return confirm('yakin')"><i class=" 
                          fas fa-trash"></i></a>
                     
                        <a href ="<?php echo base_url('admin/berkas_sdm/edit_berkas/').$sd->id_sdm ?>"class="btn btn-sm btn-primary mb-1 "><i class="
                         fas fa-edit"></i></a>
                          <a href ="<?php echo base_url('admin/berkas_sdm/print_id/').$sd->id_sdm ?>"class="btn btn-sm btn-warning mb-1 "><i class="
                         fas fa-print"></i></a>
                       
                       

                      </td>
                    </tr>
              <?php endforeach;?>
             </tbody>
          </table>
      </section>
  </div>