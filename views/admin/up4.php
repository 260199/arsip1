<div class="main-content">
   <section class="section">
       <div class="section-header">
           <h1>Update Data Berkas P4</h1>
          </div>

          <div class ="card">
          	  <div class="card-body">
                <?php foreach ($p4 as$sp ){ ?>
                  <form method="post" action ="<?php echo base_url('admin/berkas_p4/update_aksi')?>
                  "enctype="multipart/form-data">
                  <div class="row">
          			      <div class="col-md-6">
          			 	        <div class="form-group">
          					          <label>No Berkas</label>
                            <input type="hidden" name="id_p4" value="<?php echo $sp->id_p4 ?>"> 
          					        <input type="text" name="no_berkas" class="form-control" value="<?php echo $sp->no_berkas ?>">
          						            
          						           
            				          
                              <?php echo form_error('no_berkas','<div class="text-small text-danger">'
                              ,'</div>')?>
            			        </div>

            		              

            			        <div class="form-group">
            				          <label>Nama berkas</label>
            			 	          <input type="text" name="nama_berkas" class="form-control" value="<?php echo $sp->nama_berkas ?>">
            			        <?php echo form_error('nama_berkas','<div class="text-small text-danger">'
                              ,'</div>')?>
                          </div>

                          <div class="form-group">
                              <label>Jenis berkas</label>
                              <input type="text" name="jenis_berkas" class="form-control" value="<?php echo $sp->jenis_berkas ?>">
                          <?php echo form_error('jenis_berkas','<div class="text-small text-danger">'
                              ,'</div>')?>
                          </div>

            			        <div class="form-group">
            				          <label>Bidang</label>
            				          <input type="text" name="bidang" class="form-control"value="<?php echo $sp->bidang ?>">
            			         <?php echo form_error('bidang','<div class="text-small text-danger">'
                              ,'</div>')?>
                          </div>


            			        <div class="form-group">
            				          <label>Bulan</label>
            				          <input type="text" name="bulan" class="form-control"value="<?php echo $sp->bulan ?>">
            			         <?php echo form_error('bulan','<div class="text-small text-danger">'
                              ,'</div>')?>
                          </div>
            		      </div>
            		      <div class="col-md-6">
            	            <div class="form-group">
            				          <label>Tahun</label>
            				           <input type="text" name="tahun" class="form-control" value="<?php echo $sp->tahun ?>">
            			        <?php echo form_error('tahun','<div class="text-small text-danger">'
                              ,'</div>')?>
                          </div>

                           <div class="form-group">
                              <label>Rak</label>
                              <input type="text" name="Rak" class="form-control"value="<?php echo $sp->Rak ?>">
                            <?php echo form_error('Rak','<div class="text-small text-danger">'
                              ,'</div>')?>
                          </div>

            			        <div class="form-group">
            				          <label>Box</label>
            				          <input type="text" name="box" class="form-control"value="<?php echo $sp->box ?>">
            			       <?php echo form_error('bulan','<div class="text-small text-danger">'
                              ,'</div>')?>
                         </div>

            	           <div class="form-group">
            				         <label>Status</label>
            				         <select name="status" class="form-control">
            					           <option <?php if ($sp->status == "0"){echo "
                                        selected='selected'";}
                                   echo $sp ->status; ?> value ="0">Tidak  Tersedia </option>

                                <option <?php if ($sp->status== "1"){echo "
                                          selected='selected'";}
                                  echo $sp ->status;?>value ="1"> Tersedia </option>
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