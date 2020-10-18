


                            
                    <!-- Start Page -->
                   <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-delete-user icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Leave
                                        <!-- <div class="page-title-subheading">Inline validation is very easy to implement using the Architect Framework.
                                        </div> -->
                                    </div>
                                </div>


                                


                                <div class="page-title-actions">
                                    <!-- <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                        <i class="fa fa-star"></i>
                                    </button> -->
                                    <div class="d-inline-block dropdown">

                   
                                       
                                    </div>
                                </div>    </div>
                        </div>            <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Add Staff/Member</h5>
                                <!-- <form class="needs-validation" novalidate> -->
                                    <?php echo form_open('',['class' => 'needs-validation',
                                'autocomplete' => 'off']); ?>


                                    <div class="form-row">

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">First name</label>
                                            <input type="text" class="form-control" id="fname" name="fname" placeholder="First name" value="" required>
                                            <div class="invalid-feedback">
                                                    Please Enter First Name.
                                                </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                          <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">Middel name</label>
                                            <input type="text" class="form-control" id="mname" name="mname" placeholder="First name" value="" required>
                                            <div class="invalid-feedback">
                                                    Please Enter Middel Name.
                                                </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                    <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Last name</label>
                                            <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name" value="" required>
                                            <div class="invalid-feedback">
                                                    Please Enter Last Name.
                                                </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustomUsername">Contact</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                                                </div>
                                                <input type="text" class="form-control" id="contact" 
                                                name="contact" placeholder="Contact" aria-describedby="inputGroupPrepend" required>
                                                <div class="invalid-feedback">
                                                    Please Enter Valid Contact.
                                                </div>
                                                 <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            </div>
                                        </div>
                                         <div class="col-md-3 mb-6">
                                            <label for="validationCustom02" class="">Date</label> 
                                <div class="col-md-4"> <input type="date" id="date" name="date" value="yyyy-mm-dd" required> 
                                </div>    
                                 </div>




                                    </div>
                                    




                                    <div class="position-relative form-group"><label for="exampleFile" class="">File</label><input name="attach" id="attach" type="file" class="form-control-file">
                                                        <small class="form-text text-muted">
                                                            Upload File Here!
                                                        </small>
                                                    </div>
                                                  <!--   <button class="mt-1 btn btn-primary">Submit</button> -->


                                    <div class="form-group">
                                        
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                <!-- </form> -->
                                <?php echo form_close(); ?>
            
                                
                            </div>
                        </div>

                        <br><br><br>
                        
                            <div class="main-card mb-3 card">
                                    <div class="card-header">
                                        <i class="header-icon lnr-laptop-phone icon-gradient bg-plum-plate"> </i>
                                       List Of Staff/Member

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
                                                    <th width="3%">Sr.No.</th>
                                                    <th>First Name</th>
                                                    <th>Middel Name</th>
                                                    <th>Last Name</th>
                                                    <th>Contact</th>
                                                    <th>Date</th>
                                                    <th>Attach</th>
                                                    <th width="25%">Download/View</th>
                                                  
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    if(!empty($Add_leave_list))
                                                    {
                                                    foreach ($Add_leave_list as $key => $value) 
                                                    {
                                                        
                                                    ?>
                                                <tr>
                        <td scope="row"><?php echo !empty($value->lev_id)?$value->lev_id:""; ?></td>
                        <td><?php echo !empty($value->lev_fname)?$value->lev_fname:""; ?></td>
                        <td><?php echo !empty($value->lev_mname)?$value->lev_mname:""; ?></td>
                        <td><?php echo !empty($value->lev_lname)?$value->lev_lname:""; ?></td>
                        <td><?php echo !empty($value->lev_contact)?$value->lev_contact:""; ?></td>
                        <td><?php echo !empty($value->lev_date)?$value->lev_date:""; ?></td>
                        <td><?php echo !empty($value->lev_attach)?$value->lev_attach:""; ?></td>
                                                     <td><button class="btn-icon btn-icon-only btn btn-link"><i class="pe-7s-download btn-icon-wrapper"></i></button>
                                                    <button class="btn-icon btn-icon-only btn btn-link"><i class="pe-7s-note2 btn-icon-wrapper"></i></button>
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
                        <!-- End Page -->



  