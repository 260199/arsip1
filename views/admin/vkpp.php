<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Berkas KPP</h1>
          </div>
          <a href ="<?php echo base_url('admin/berkas_kpp/tambah_berkas') ?>"class="btn btn-sm btn-primary mb-3">Tambah Data</a>
               <?php echo $this->session->flashdata('pesan') ?>    

           <a class="btn btn-danger btn-sm mb-3" href="<?php echo base_url('admin/berkas_kpp/print') ?>"><i class="fa fa-print"></i>PRINT</a>     
           

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
              foreach($kpp as $kp):?>
                <tr>
                  <td><?php echo $no++ ?></td>
                 
                    
                    <td><?php echo $kp->no_berkas ?></td>
                    <td><?php echo $kp->nama_berkas ?></td>
                    <td><?php echo $kp->jenis_berkas ?></td>
                    <td><?php echo $kp->bidang ?></td>
                    <td><?php echo $kp->bulan ?></td>
                    <td><?php echo $kp->tahun ?></td>
                    <td><?php echo $kp->Rak ?></td>
                    <td><?php echo $kp->box ?></td>
                    <td><?php echo $kp->file ?>
                      
                    </td>
                    
                    <td><?php 
                    if($kp->status == "0"){
                      echo "<span class='badge badge-danger'>tidak tersedia
                      </span>";
                    }else{
                      echo "<span class='badge badge-primary'> tersedia
                      </span>";
                    }

                      ?></td>

                      <td>
                     
                       <a href ="<?php echo base_url('admin/berkas_kpp/detail_kpp/').$kp->id_kpp ?>"class="btn btn-sm btn-success mb-1 "><i class=" 
                          fas fa-eye"></i></a>
                         <a href ="<?php echo base_url('admin/berkas_kpp/delete/').$kp->id_kpp ?>"class="btn btn-sm btn-danger mb-1"onclick="return confirm('yakin')"><i class=" 
                          fas fa-trash"></i></a>
                     
                        <a href ="<?php echo base_url('admin/berkas_kpp/edit_berkas/').$kp->id_kpp ?>"class="btn btn-sm btn-primary mb-1 "><i class="
                         fas fa-edit"></i></a>
                        <a href="<?= base_url('admin/berkas_kpp/print_id/') .$kp->id_kpp ?>"class="btn btn-sm btn-warning mb-1"  role="button" target="_blank"><i class="fa fa-print"></i></a>
                       

                      </td>
                    </tr>
              <?php endforeach;?>
             </tbody>
          </table>
      </section>
  </div>