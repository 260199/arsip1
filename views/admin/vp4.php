<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Berkas P4</h1>
          </div>
          <a href ="<?php echo base_url('admin/berkas_p4/tambah_berkas') ?>"class="btn btn-sm btn-primary mb-3">Tambah Data</a>
               <?php echo $this->session->flashdata('pesan') ?>     

            <a class="btn btn-danger btn-sm mb-3" href="<?php echo base_url('admin/berkas_p4/print') ?>"><i class="fa fa-print">PRINT</i></a>      

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
              foreach($p4 as $sp):?>
                <tr>
                  <td><?php echo $no++ ?></td>
                 
                    
                    <td><?php echo $sp->no_berkas ?></td>
                    <td><?php echo $sp->nama_berkas ?></td>
                    <td><?php echo $sp->jenis_berkas ?></td>
                    <td><?php echo $sp->bidang ?></td>
                    <td><?php echo $sp->bulan ?></td>
                    <td><?php echo $sp->tahun ?></td>
                    <td><?php echo $sp->Rak ?></td>
                    <td><?php echo $sp->box ?></td>
                    <td><?php echo $sp->file ?>
                      
                    </td>
                    
                    <td><?php 
                    if($sp->status == "0"){
                      echo "<span class='badge badge-danger'>tidak tersedia
                      </span>";
                    }else{
                      echo "<span class='badge badge-primary'> tersedia
                      </span>";
                    }

                      ?></td>

                      <td>
                     
                       <a href ="<?php echo base_url('admin/berkas_p4/detail_p4/').$sp->id_p4 ?>"class="btn btn-sm btn-success mb-1 "><i class=" 
                          fas fa-eye"></i></a>
                         <a href ="<?php echo base_url('admin/berkas_p4/delete/').$sp->id_p4 ?>"class="btn btn-sm btn-danger mb-1" onclick="return confirm('yakin')"><i class=" 
                          fas fa-trash"></i></a>
                     
                        <a href ="<?php echo base_url('admin/berkas_p4/edit_berkas/').$sp->id_p4 ?>"class="btn btn-sm btn-primary mb-1 "><i class="
                         fas fa-edit"></i></a>

                         <a href ="<?php echo base_url('admin/berkas_p4/print_id/').$sp->id_p4 ?>"class="btn btn-sm btn-warning mb-1 "><i class="
                         fas fa-edit"></i></a>
                       
                       
                       

                      </td>
                    </tr>
              <?php endforeach;?>
             </tbody>
          </table>
      </section>
  </div>