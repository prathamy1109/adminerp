<!-- Start Page -->
                   <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-home icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Hostel
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
                                </div>    
                            </div>
                        </div>           

                         <div class="main-card mb-3 card">
                            <div class="card-body">


                                <h5 class="card-title">Add Student</h5>
                                <!-- <form class="needs-validation" novalidate> -->
                                    <?php echo form_open('',['class' => 'needs-validation',
                                    'autocomplete' => 'off' ]); ?>

                                    <div class="form-row">

                                           <div class="col-md-3 mb-3">
                                            <label for="validationCustom01">Student Id</label>
                                            <input type="number" class="form-control" id="std_id" 
                                            name="std_id" placeholder="Student Id" value="" required>
                                            <div class="invalid-feedback">
                                                    Please Enter 
                                                    Student Id.
                                                </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom01">First name</label>
                                            <input type="text" class="form-control" id="fname" 
                                            name="fname" placeholder="First name" value="" required>
                                            <div class="invalid-feedback">
                                                    Please Enter First Name.
                                                </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom02">Last name</label>
                                            <input type="text" class="form-control" id="lname"
                                            name="lname" placeholder="Last name" value="" required>
                                            <div class="invalid-feedback">
                                                    Please Enter Last Name.
                                                </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom03">Address</label>
                                            <input type="text" class="form-control" id="address"
                                            name="address" placeholder="Address" required>
                                            <div class="invalid-feedback">
                                                Please provide Address 
                                            </div>
                                        </div>
                                                    <div class="col-md-3 mb-3">
                                            <label for="validationCustom02" class="">Join Date</label> 
                                <div class="col-md-2"> <input type="date" id="jdate" name="jdate" value="yyyy-mm-dd" required> </div>
                                </div>

                                                   <div class="col-md-3 mb-3">
                                            <label for="validationCustom02" class="">Leave Date</label> 
                                <div class="col-md-2"> <input type="date" id="ldate" name="ldate" value="yyyy-mm-dd" required> </div>
                                </div>
                                       
                                       
                                    </div>
                                    <div class="form-row">
                                        
                                        <br><br>
                                        <div class="col-md-12">
                                        <div class="position-relative form-group"><label for="exampleText" class="">Notes</label><textarea name="notes" id="notes" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <!-- <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                            <label class="form-check-label" for="invalidCheck">
                                                Agree to terms and conditions
                                            </label>
                                            <div class="invalid-feedback">
                                                You must agree before submitting.
                                            </div>
                                        </div> -->
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit</button>
                            <!--     </form> -->
                            <?php echo form_close(); ?>
            
                                
                            </div>
                        </div>
                        <br><br><br>
                                                    <div class="main-card mb-3 card">
                                    <div class="card-header">
                                        <i class="header-icon lnr-laptop-phone icon-gradient bg-plum-plate"> </i>
                                       List Of Students


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
                                                    <th>Student Id</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Contact</th>
                                                    <th>Address</th>
                                                    <th>Join Date</th>
                                                    <th>Leave Date</th>
                                                    <th>Notes</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    if (!empty($Add_hostel_list))
                                                    {
                                                     foreach ($Add_hostel_list as $key => $value) 
                                                     {
                                                    ?>                             
                                                <tr>
                <td scope="row"><?php echo !empty($value->h_id)?$value->h_id:""; ?></td>
                <td scope="row"><?php echo !empty($value->h_std_id)?$value->h_std_id:""; ?></td>
                <td scope="row"><?php echo !empty($value->h_fname)?$value->h_fname:""; ?></td>
                <td scope="row"><?php echo !empty($value->h_lname)?$value->h_lname:""; ?></td>
                <td scope="row"><?php echo !empty($value->h_contact)?$value->h_contact:""; ?></td>
                <td scope="row"><?php echo !empty($value->h_address)?$value->h_address:""; ?></td>
                <td scope="row"><?php echo !empty($value->h_jdate)?$value->h_jdate:""; ?></td>
                <td scope="row"><?php echo !empty($value->h_ldate)?$value->h_ldate:""; ?></td>
                <td scope="row"><?php echo !empty($value->h_note)?$value->h_note:""; ?></td>
                <td><button class="btn-icon btn-icon-only btn btn-link"><i class="pe-7s-download btn-icon-wrapper"></i></button>
                <button class="btn-icon btn-icon-only btn btn-link"><i class="pe-7s-note2 btn-icon-wrapper"></i></button>
                                                </td>
               
                                                    
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
                        <!-- End Page  -->

                    