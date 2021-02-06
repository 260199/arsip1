<div class="main-content">
   <section class="section">
       <div class="section-header">
           <h1>Update Data Berkas PMP</h1>
          </div>

          <div class ="card">
          	  <div class="card-body">
                <?php foreach ($sdm as $sd ): ?>
                  <form method="post" action ="<?php echo base_url('admin/berkas_sdm/update_aksi')?>
                  "enctype="multipart/form-data">
                  <div class="row">
          			      <div class="col-md-6">
          			 	        <div class="form-group">
          					          <label>No Berkas</label>
                            <input type="hidden" name="id_sdm" value="<?php echo $sd->id_sdm ?>"> 
          					        <input type="text" name="no_berkas" class="form-control" value="<?php echo $sd->no_berkas ?>">
          						            
          						           
            				          
                              <?php echo form_error('no_berkas','<div class="text-small text-danger">'
                              ,'</div>')?>
            			        </div>

            		              

            			        <div class="form-group">
            				          <label>Nama berkas</label>
            			 	          <input type="text" name="nama_berkas" class="form-control" value="<?php echo $sd->nama_berkas ?>">
            			        <?php echo form_error('nama_berkas','<div class="text-small text-danger">'
                              ,'</div>')?>
                          </div>

                          <div class="form-group">
                              <label>Jenis berkas</label>
                              <input type="text" name="jenis_berkas" class="form-control" value="<?php echo $sd->jenis_berkas ?>">
                          <?php echo form_error('jenis_berkas','<div class="text-small text-danger">'
                              ,'</div>')?>
                          </div>

            			        <div class="form-group">
            				          <label>Bidang</label>
            				          <input type="text" name="bidang" class="form-control"value="<?php echo $sd->bidang ?>">
            			         <?php echo form_error('bidang','<div class="text-small text-danger">'
                              ,'</div>')?>
                          </div>


            			        <div class="form-group">
            				          <label>Bulan</label>
            				          <input type="text" name="bulan" class="form-control"value="<?php echo $sd->bulan ?>">
            			         <?php echo form_error('bulan','<div class="text-small text-danger">'
                              ,'</div>')?>
                          </div>
            		      </div>
            		      <div class="col-md-6">
            	            <div class="form-group">
            				          <label>Tahun</label>
            				           <input type="text" name="tahun" class="form-control" value="<?php echo $sd->tahun ?>">
            			        <?php echo form_error('tahun','<div class="text-small text-danger">'
                              ,'</div>')?>
                          </div>

                           <div class="form-group">
                              <label>Rak</label>
                              <input type="text" name="Rak" class="form-control"value="<?php echo $sd->Rak ?>">
                            <?php echo form_error('Rak','<div class="text-small text-danger">'
                              ,'</div>')?>
                          </div>

            			        <div class="form-group">
            				          <label>Box</label>
            				          <input type="text" name="box" class="form-control"value="<?php echo $sd->box ?>">
            			       <?php echo form_error('bulan','<div class="text-small text-danger">'
                              ,'</div>')?>
                         </div>

            	           <div class="form-group">
            				         <label>Status</label>
            				         <select name="status" class="form-control" >
            					           <option <?php if ($sd->status == "0"){echo "
                                        selected='selected'";}
                                   echo $sd ->status; ?> value ="0">Tidak  Tersedia </option>

                                <option <?php if ($sd->status== "1"){echo "
                                          selected='selected'";}
                                  echo $sd ->status;?>value ="1"> Tersedia </option>
                                </select>
                                <?php echo form_error('status','<div class="text-small text-danger">'
                              ,'</div>')?>
                         </div>

            			       <div class="form-group">
            				         <label>File</label>
            				         <input type="file" name="file" class="form-control">
            			        </div>

                          <button type="submit" class="btn btn-primary mt-4" >simpan</button>

                          <button type="reset" class="btn btn-danger mt-4">reset</button>
                       </div>
                   </div>
                   </form>
                 <?php  endforeach; ?>
               </div>
           </div>
  </section>
</div>  