<!-- Start Page -->
                   <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-way icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Admission Enquiry
                                        <!-- <div class="page-title-subheading">Inline validation is very easy to implement using the Architect Framework.
                                        </div> -->
                                    </div>
                                </div>





                                <div class="page-title-actions">
                                    <!-- <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                        <i class="fa fa-star"></i>
                                    </button> -->


               <!--                      <div class="container">
                    <div class="text-left"><a href="frnt_listenquiry.html"><button class="btn btn-success pe-7s-left-arrow" type="submit"> Back </button></a></div><br>
                    </div> -->
                                    <div class="d-inline-block dropdown">

                  <!--                       <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div> -->
                                       <!--  <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                                            Buttons
                                        </button> -->
                                        <!-- <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span>
                                                            Inbox
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-book"></i>
                                                        <span>
                                                            Book
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-picture"></i>
                                                        <span>
                                                            Picture
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a disabled href="javascript:void(0);" class="nav-link disabled">
                                                        <i class="nav-link-icon lnr-file-empty"></i>
                                                        <span>
                                                            File Disabled
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div> -->
                                    </div>
                                </div>    
                            </div>
                        </div>           

                         <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Add Admission Enquiry</h5>
                                <!-- <form class="needs-validation" novalidate> -->
                                <?php echo form_open('',['class' => 'needs-validation',
                                'autocomplete' => 'off']); ?>
                                    <div class="form-row">
                                       <!--  <div class="col-md-4 mb-3">
                                        <div class="position-relative form-group"><label for="exampleSelect" class="">Purpose</label><select name="select" id="exampleSelect" class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select></div>
                                                </div> -->
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
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom02">E-Mail</label>
                                            <input type="text" class="form-control" id="email"
                                            name="email" placeholder="E-Mail" value="" required>
                                            <div class="invalid-feedback">
                                                    Please Enter Valid email address.
                                                </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Address</label>
                                            <input type="text" class="form-control" id="address"
                                            name="address" placeholder="Address" value="" required>
                                            <div class="invalid-feedback">
                                                    Please Enter Address.
                                                </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        
                                        <!-- <div class="col-md-3">
                                        <div class="position-relative form-group"><label for="exampleSelect" class="">No.of Persons</label><select name="select" id="exampleSelect" class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div> -->
                                            <div class="col-md-3">
                                            <label for="exampleSelect" class="">Current Date</label> 
                                <div class="col-md-4"> <input type="date" name="cdate" value="yyyy-mm-dd" required> 
                                </div>    
                                 </div>

                                 <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">Reference</label>
                                            <input type="text" class="form-control" id="reference"
                                            name="reference" placeholder="Enter Reference" value="" required>
                                            
                                        </div>
                              

                                           <div class="col-md-4">
                                            <label for="exampleSelect" class="">Next Follow Up Date</label> 
                                <div class="col-md-4"> <input type="date" name="ndate" value="yyyy-mm-dd" required> 
                                </div>    
                                 </div>
                                    
                                            <div class="col-md-3">
                                        <div class="position-relative form-group">
                                <label for="exampleSelect" class="">Enquiry about which Class</label>
                                    <select name="abtclass" id="abtclass" class="form-control">
                                                        <option value="None">None</option>
                                                        <option value="1st">1st</option>
                                                        <option value="2nd">2nd</option>
                                                        <option value="3rd">3rd</option>
                                                        <option value="4th">4th</option>
                                                        <option value="5th">5th</option>        
                                                        <option value="6th">6th</option>
                                                        <option value="7th">7th</option>
                                                        <option value="8th">8th</option>
                                                        <option value="9th">9th</option>
                                                        <option value="10th">10th</option>
                                                        <option value="11th">11th</option>
                                                        <option value="12th">12th</option>
                                                     </select>
                                                </div>

                                            </div>

                                            <div class="col-md-3">
                                        <div class="position-relative form-group"><label for="exampleSelect" class="">Admission Status </label>
                                <select name="status" id="status" class="form-control">
                                                        <option value="None">None</option>
                                                        <option value="Active">Active</option>
                                                        <option value="Pending">Pending</option>
                                                    </select>
                                                </div>

                                            </div>


                                    </div>
                                    
                                   <div class="col-md-12">
                                        <div class="position-relative form-group"><label for="exampleText" class="">Notes</label>
                                <textarea name="notes" id="notes" class="form-control"></textarea>
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
                               <!--  </form> -->
                               <?php echo form_close(); ?>
            
                                
                            </div>
                        </div>
                        <br><br>



                 <!--         <div class="container">
                    <div class="text-left"><a href="frnt_addenquiry.html"><button class="btn btn-success pe-7s-plus" type="submit"> Add </button></a></div><br>
                    </div>
                 -->

                            <div class="main-card mb-3 card">
                                    <div class="card-header">
                                        <i class="header-icon lnr-laptop-phone icon-gradient bg-plum-plate"> </i>
                                       List of Visitors
    <!--                                    <div class="wrap">
        <div class="search">
      <input type="text" class="searchTerm" placeholder="Search Here !!">
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </div>
</div>
         -->                                <div class="btn-actions-pane-right actions-icon-btn">

                                            <button class="btn-icon btn-icon-only btn btn-link"><i class="pe-7s-file btn-icon-wrapper"></i></button>
                                            <button class="btn-icon btn-icon-only btn btn-link"><i class="pe-7s-news-paper btn-icon-wrapper"></i></button>
                                            <button class="btn-icon btn-icon-only btn btn-link"><i class="pe-7s-print btn-icon-wrapper"></i></button>

                                            <!-- <div class="btn-group"> -->
                                                <!-- <button type="button" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link"><i class="pe-7s-menu btn-icon-wrapper"></i></button> -->
                                             <!--    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu"><h6 tabindex="-1" class="dropdown-header">Header</h6>
                                                    <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-inbox"> </i><span>Menus</span></button>
                                                    <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-file-empty"> </i><span>Settings</span></button>
                                                    <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-book"> </i><span>Actions</span></button>
                                                    <div tabindex="-1" class="dropdown-divider"></div>
                                                    <div class="p-3 text-right">
                                                        <button class="mr-2 btn-shadow btn-sm btn btn-link">View Details</button>
                                                        <button class="mr-2 btn-shadow btn-sm btn btn-primary">Action</button>
                                                    </div> -->
                                               <!--  </div> -->
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
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Contact</th>
                                                    <th>E-Mail</th>
                                                    <th>Address</th>
                                                    <th>Current Date</th>
                                                    <th>Reference</th>
                                                    <th>Nxt Follow Up Date</th>
                                                    <th>abt ? class</th>
                                                    <th>Status</th>
                                                     <th width="10%">Notes</th>
                                                     <th width="20%">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    if(!empty($Admission_enquiry_list))
                                                    {
                                                    foreach ($Admission_enquiry_list as $key => $value) {
                                                        
                                                    ?>
                                                <tr>
                    <td scope="row"><?php echo !empty($value->admenq_id)?$value->admenq_id:""; ?></td>
                    <td><?php echo !empty($value->admenq_fname)?$value->admenq_fname:""; ?></td>
                    <td><?php echo !empty($value->admenq_lname)?$value->admenq_lname:""; ?></td>
                    <td><?php echo !empty($value->admenq_contact)?$value->admenq_contact:"";  ?></td>
                    <td><?php echo !empty($value->admenq_email)?$value->admenq_email:""; ?></td>
                    <td><?php echo !empty($value->admenq_address)?$value->admenq_address:""; ?></td>
                    <td><?php echo !empty($value->admenq_cdate)?$value->admenq_cdate:""; ?></td>
                <td><?php echo !empty($value->admenq_reference)?$value->admenq_reference:""; ?></td>
                    <td><?php echo !empty($value->admenq_ndate)?$value->admenq_ndate:""; ?></td>
                    <td><?php echo !empty($value->admenq_abtclass)?$value->admenq_abtclass:""; ?></td>
                    <td><?php echo !empty($value->admenq_status)?$value->admenq_status:""; ?></td>
                    <td><?php echo !empty($value->admenq_note)?$value->admenq_note:""; ?></td>

                    <td><button class="btn btn-warning">Edit</button><button class="btn btn-success">View</button><button class="btn btn-danger">Delete</button></td>
                                                </tr>

                                                 <?php } } ?>

                                               </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Page -->

                        <!-- End Page -->
