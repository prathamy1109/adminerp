<!-- Start Page -->
                   <div class="app-main__outer">
                   <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-shopbag icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Stationary 
                                </div>
                                </div>

                                 </div>
                        </div>   

                          <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Add Stationary Detail : </h5>
                               <!--  <form class="needs-validation" novalidate> -->
                                <?php echo form_open('',['class' => 'needs-validation',
                                    'autocomplete' => 'off' ]); ?>
                                     <div class="form-row">


                                        <div class="col-md-2 mb-3">
                                            <label for="validationCustom01">Item Qyt:</label>
                                            <input type="number" class="form-control" id="iqty"
                                            name="iqty" placeholder="Add Supplier " value="" >
                                          <!--  <div class="valid-feedback">
                                                Looks good!
                                            </div>-->
                                        </div>


                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom01">Add Supplier  :</label>
                                            <input type="text" class="form-control" id="addsup"
                                            name="addsup" placeholder="Add Supplier " value="" >
                                          <!--  <div class="valid-feedback">
                                                Looks good!
                                            </div>-->
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom02">Item Store  :</label>
                                            <input type="text" class="form-control" id="itemstore" 
                                           name="itemstore" placeholder="Item Store " value="" >
                                           <!-- <div class="valid-feedback">
                                                Looks good!
                                            </div>-->
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustomUsername">Item Category  :</label>
                                            <div class="input-group">
                                             <!--   <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                </div>-->
                                                <input type="text" class="form-control" id="itemcat"
                                                name="itemcat" placeholder="Item Category " aria-describedby="inputGroupPrepend" >
                                               <!-- <div class="invalid-feedback">
                                                    Please choose a username.--
                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
                                       <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">Add Item Name  :</label>
                                            <input type="text" class="form-control" id="addiname" name="addiname" placeholder="Add Item Name  " value="" >
                                          <!--  <div class="valid-feedback">
                                                Looks good!
                                            </div>-->
                                        </div>
                                                   <div class="col-md-4">
                                            <label for="validationCustom02" class="">Recive Date</label> 
                                <div class="col-md-4"> <input type="date" name="recdate" value="yyyy-mm-dd" required> </div>
                                </div>
                                               <div class="col-md-4">
                                            <label for="validationCustom02" class="">Return Date</label> 
                                <div class="col-md-4"> <input type="date" name="retdate" value="yyyy-mm-dd" required> </div>
                                </div>
                                    </div>


                                  
                              
                                        <div class="form-group">
                                        <div class="form-check">
                                         <!--    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                            <label class="form-check-label" for="invalidCheck">
                                                Agree to terms and conditions
                                            </label>
                                             <div class="invalid-feedback">
                                                You must agree before submitting.
                                            </div>-->
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit Detail</button>
                             <!--    </form> -->
                             <?php echo form_close(); ?>
            
                                
                            </div>
                        </div>

                        <div class="main-card mb-3 card">
                                    <div class="card-header">
                                        <i class="header-icon lnr-laptop-phone icon-gradient bg-plum-plate"> </i>
                                       List Of Inventorys


                <div class="btn-actions-pane-right">
                             <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                </div>





                                        <div class="btn-actions-pane-right actions-icon-btn">
                                            <button class="btn-icon btn-icon-only btn btn-link"><i class="pe-7s-file btn-icon-wrapper"></i></button>
                                            <button class="btn-icon btn-icon-only btn btn-link"><i class="pe-7s-news-paper btn-icon-wrapper"></i></button>
                                            <button class="btn-icon btn-icon-only btn btn-link"><i class="pe-7s-print btn-icon-wrapper"></i></button>
                                            
                                            </div>
                                        </div>
                                    </div>



                    <div class="form-row">
                    <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><!-- <h5 class="card-title">List Of Students</h5>

 -->

                                        <!-- <h5 class="text-right">Search</h5> -->
                                        <div class="table-responsive">
                                            <table class="mb-0 table">
                                                <thead>
                                                <tr>
                                                    <th>Sr.No.</th>
                                                      <th>Item Qyt</th>
                                                    <th>Add Supplier</th>
                                                    <th>Item Store</th>
                                                    <th>Item Category</th>
                                                    <th>Add Item name</th>
                                                    <th>Recive Date</th>
                                                    <th>Return Date</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    if (!empty($Add_stationary_list))
                                                    {
                                                     foreach ($Add_stationary_list as $key => $value) 
                                                     {
                                                    ?>   
                                                <tr>
            <td scope="row"><?php echo !empty($value->s_id)?$value->s_id:""; ?></td>
            <td scope="row"><?php echo !empty($value->s_iqty)?$value->s_iqty:""; ?></td>
            <td scope="row"><?php echo !empty($value->s_addsup)?$value->s_addsup:""; ?></td>
            <td scope="row"><?php echo !empty($value->s_addistore)?$value->s_addistore:""; ?></td>
            <td scope="row"><?php echo !empty($value->s_addicat)?$value->s_addicat:""; ?></td>
            <td scope="row"><?php echo !empty($value->s_addiname)?$value->s_addiname:""; ?></td>
            <td scope="row"><?php echo !empty($value->s_recdate)?$value->s_recdate:""; ?></td>
            <td scope="row"><?php echo !empty($value->s_retdate)?$value->s_retdate:""; ?></td>
                                                    
                                                </tr>
                                                <?php }} ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- End Page -->