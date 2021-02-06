<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>detail data berkas pmp</h1>
          </div>
      </section>

      <?php foreach  ($detail as $dt):?>
      	<div class="card">
      		<div class="card-body">
      			<div class="row">
              <div col-md-6>
                <table class="table table-bordered">
                  
                  

                  <tr>

                    <td><h5>No Berkas</h5></td>
                    <td><?php echo $dt ->no_berkas ?></td>
                  </tr>

                  <tr>
                    <td><h5>Nama Berkas</td></h5>
                    <td><?php echo $dt ->nama_berkas ?></td>
                  </tr>

                  <tr>
                    <td><h5>Jenis Berkas</td></h5>
                    <td><?php echo $dt ->jenis_berkas ?></td>
                  </tr>

                  <tr>
                    <td><h5>Bidang</td></h5>
                    <td><?php echo $dt ->bidang ?></td>
                  </tr>

                  <tr>
                    <td><h5>Bulan</td></h5>
                    <td><?php echo $dt ->bulan ?></td>
                  </tr>
                   
                </table>
              </div>



                    <div col-md-6>
                <table class="table table-bordered">
               
                 
                  <tr>
                    <td><h5>Tahun</td></h5>
                    <td><?php echo $dt ->tahun ?></td>
                  </tr>

                  <tr>
                    <td><h5>Rak</td></h5>
                    <td><?php echo $dt ->Rak ?></td>
                  </tr>

                  <tr>
                    <td><h5>Box</td></h5>
                    <td><?php echo $dt ->box ?></td>
                  </tr>

                  <tr>
                    <td><h5>File</td></h5>
                    <td><?php echo $dt ->file ?></td>
                  </tr>

                  <tr>
                    <td><h5>Status</td></h5>
                    <td>
                      <?php if ($dt ->status=="0"){
                          echo "<span class='badge badge-danger'>tidak tersedia
                      </span>";
                    }else{
                      echo "<span class='badge badge-primary'> tersedia
                      </span>";
                    }?></td>
                  </tr>

                </table>

                <a class="btn btn-lg btn-danger ml-2" href="<?php echo base_url ('admin/berkas_pmr')?>">KEMBALI</a>
               <a class="btn btn-lg btn-primary ml-2" href="<?php echo base_url ('admin/berkas_pmr/edit_berkas/'.
                $dt->id_pmr)?>">UPDATE</a>

          
              </div>
              
            </div>

      		</div>
      	</div>

      <?php endforeach; ?>
  </div>