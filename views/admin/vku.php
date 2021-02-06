<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Berkas KEUANGAN</h1>
          </div>
          <a href ="<?php echo base_url('admin/berkas_ku/tambah_berkas') ?>"class="btn btn-sm btn-primary mb-3">Tambah Data</a>
               <?php echo $this->session->flashdata('pesan') ?>   
               <a class="btn btn-danger btn-sm mb-3" href="<?php echo base_url('admin/berkas_ku/prins') ?>"><i class="fa fa-print">PRINT</i></a>  

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
              foreach($keuangan as $kg):?>
                <tr>
                  <td><?php echo $no++ ?></td>
                 
                    
                    <td><?php echo $kg->no_berkas ?></td>
                    <td><?php echo $kg->nama_berkas ?></td>
                    <td><?php echo $kg->jenis_berkas ?></td>
                    <td><?php echo $kg->bidang ?></td>
                    <td><?php echo $kg->bulan ?></td>
                    <td><?php echo $kg->tahun ?></td>
                    <td><?php echo $kg->Rak ?></td>
                    <td><?php echo $kg->box ?></td>
                    <td><?php echo $kg->file ?>
                      
                    </td>
                    
                    <td><?php 
                    if($kg->status == "0"){
                      echo "<span class='badge badge-danger'>tidak tersedia
                      </span>";
                    }else{
                      echo "<span class='badge badge-primary'> tersedia
                      </span>";
                    }

                      ?></td>

                      <td>
                     
                       <a href ="<?php echo base_url('admin/berkas_ku/detail_ku/').$kg->id_keuangan ?>"class="btn btn-sm btn-success mb-1 "><i class=" 
                          fas fa-eye"></i></a>
                         <a href ="<?php echo base_url('admin/berkas_ku/delete/').$kg->id_keuangan ?>"class="btn btn-sm btn-danger mb-1" onclick="return confirm('yakin')"><i class=" 
                          fas fa-trash"></i></a>
                     
                        <a href ="<?php echo base_url('admin/berkas_ku/edit_berkas/').$kg->id_keuangan ?>"class="btn btn-sm btn-primary mb-1 "><i class="
                         fas fa-edit"></i></a>
                        <a href ="<?php echo base_url('admin/berkas_ku/prins_id/').$kg->id_keuangan ?>"target="_blank " class="btn btn-sm btn-warning mb-1 "><i class="
                         fas fa-print"></i></a>
                       

                      </td>
                    </tr>
              <?php endforeach;?>
             </tbody>
          </table>
      </section>
  </div>