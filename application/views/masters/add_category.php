


                

                    <div class="app-main__inner">

                        

                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-display1 icon-gradient bg-love-kiss">
                                        </i>
                                    </div>
                                    <div>Add Category
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                   
                                </div>   
                             </div>
                        </div>          

                      



                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">

<?php echo form_open('add-edit-category',['id' => 'cat-form', 'autocomplete' => 'off']); ?>
        <input type="hidden" name="cat_id" id="cat_id" value="<?php echo !empty($cat_id)?$cat_id:""; ?>">
            <label for="Category"><h5 class="card-title">Add Category </h5></label>
<input type="text" class="form-control" id="cate_name" name="cate_name" placeholder="Enter Category" 
value="<?php echo !empty($cat_name)?$cat_name:""; ?>">
                                            
                                                    <br>
                                                    
<button class="btn btn-success waves-effect w-md waves-light m-b-5" type="submit">Save</button>
<a href="<?php echo base_url('add-category'); ?>"> <button type="button" class="btn btn-danger waves-effect w-md waves-light m-b-5">Cancel</button> </a>
                                     

                                      <?php echo form_close(); ?>
                                                
                                            </div>
                                        </div>
                                    </div>


                                     

                                    <div class="col-lg-8">
                                <div class="main-card mb-3 card">
                                     <div class="card-body"><h5 class="card-title">Category List</h5>
                                    <hr>
                                    
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="mb-0 table" id="category-table">
                                                <thead>
                                                <tr>
                                                    <th>Sr.No</th>
                                                    <th width="60%">Category</th>
                                                    <th width="20%">Action</th>
                                                   
                                                </tr>
                                                </thead>
                                                <tbody>

                                                    <?php 
                                                    if(!empty($Add_category_list))
                                                    {
                                                        $sr = 1;
                                                    foreach ($Add_category_list as $key => $value) {
                                                        
                                                    ?>

                                                <tr>
                <!-- <td scope="row"><?php echo !empty($value->mc_id)?$value->mc_id:""; ?></td> -->
                <td scope="row"><?php echo $sr++; ?></td>
                <td><?php echo !empty($value->mc_cate_name)?$value->mc_cate_name:""; ?></td>
                                                   
                <td>
                    <a href="<?php echo base_url('category'); ?>?cat_id=<?= $value->mc_id; ?>" class="btn btn-success btn-xs"> <i class="fa fa-pencil"></i> </a>
                    <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#del-cat" onclick="delCat(<?php echo $value->mc_id; ?>);"> <i class="fa fa-trash"></i> </button>
                </td>
                                            </tr>
                                                
                                        <?php } } ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>


                                 
                                </div>
                            </div>




                           
                        </div>



                    </div>




                </div>
                    <!-- End Page -->


                    <!-- Delete Category Modal start. -->

<!-- Modal -->
<div class="modal fade mt-5" id="del-cat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <form action="<?php echo base_url('delete-category'); ?>" method="POST">
                    <input type="hidden" name="cat_id" id="del_cat_id">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary">Yes</button>    
                </form>            
                
            
        </div>
    </div>
</div>

<!-- <div class="modal fade" id="del-cat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->





                  