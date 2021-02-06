<div class="main-content">
   <section class="section">
       <div class="section-header">
           <h1>Update Data Berkas PMP</h1>
          </div>

          <div class ="card">
          	  <div class="card-body">
                <?php foreach ($pmp as$bk ){ ?>
                  <form method="post" action ="<?php echo base_url('admin/berkas_pmp/update_aksi')?>
                  "enctype="multipart/form-data">
                  <div class="row">
          			      <div class="col-md-6">
          			 	        <div class="form-group">
          					          <label>No Berkas</label>
                            <input type="hidden" name="id_pmp" value="<?php echo $bk->id_pmp ?>"> 
          					        <input type="text" name="no_berkas" class="form-control" value="<?php echo $bk->no_berkas ?>">
          						            
          						           
            				          
                              <?php echo form_error('no_berkas','<div class="text-small text-danger">'
                              ,'</div>')?>
            			        </div>

            		                 

            			        <div class="form-group">
            				          <label>Nama berkas</label>
            			 	          <input type="text" name="nama_berkas" class="form-control" value="<?php echo $bk->nama_berkas ?>">
            			        <?php echo form_error('nama_berkas','<div class="text-small text-danger">'
                              ,'</div>')?>
                          </div>

                          <div class="form-group">
                              <label>jenis berkas</label>
                              <input type="text" name="jenis_berkas" class="form-control" value="<?php echo $bk->jenis_berkas ?>">
                          <?php echo form_error('jenis_berkas','<div class="text-small text-danger">'
                              ,'</div>')?>
                          </div>

            			        <div class="form-group">
            				          <label>Bidang</label>
            				          <input type="text" name="bidang" class="form-control"value="<?php echo $bk->bidang ?>">
            			         <?php echo form_error('bidang','<div class="text-small text-danger">'
                              ,'</div>')?>
                          </div>


            			        <div class="form-group">
            				          <label>Bulan</label>
            				          <input type="text" name="bulan" class="form-control"value="<?php echo $bk->bulan ?>">
            			         <?php echo form_error('bulan','<div class="text-small text-danger">'
                              ,'</div>')?>
                          </div>
            		      </div>
            		      <div class="col-md-6">
            	            <div class="form-group">
            				          <label>Tahun</label>
            				           <input type="text" name="tahun" class="form-control" value="<?php echo $bk->tahun ?>">
            			        <?php echo form_error('tahun','<div class="text-small text-danger">'
                              ,'</div>')?>
                          </div>

                           <div class="form-group">
                              <label>Rak</label>
                              <input type="text" name="Rak" class="form-control"value="<?php echo $bk->Rak ?>">
                            <?php echo form_error('Rak','<div class="text-small text-danger">'
                              ,'</div>')?>
                          </div>

            			        <div class="form-group">
            				          <label>Box</label>
            				          <input type="text" name="box" class="form-control"value="<?php echo $bk->box ?>">
            			       <?php echo form_error('bulan','<div class="text-small text-danger">'
                              ,'</div>')?>
                         </div>

            	           <div class="form-group">
            				         <label>Status</label>
            				         <select name="status" class="form-control">
            					            <option <?php if ($bk->status == "0"){echo "
                                        selected='selected'";}
                                   echo $bk ->status; ?> value ="0">Tidak  Tersedia </option>

                                <option <?php if ($bk->status== "1"){echo "
                                          selected='selected'";}
                                  echo $bk ->status;?>value ="1"> Tersedia </option>
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
                 <?php  } ?>
               </div>
           </div>
  </section>
</div>  