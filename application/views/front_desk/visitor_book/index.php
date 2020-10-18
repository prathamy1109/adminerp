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
                                    <div>Visitor Book
                                       
                                    </div>
                                </div>





                                <div class="page-title-actions">
                                    
                                </div>    
                            </div>
                        </div>           

                         <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Add Visitor</h5>
                                <!-- <form class="needs-validation" novalidate> -->
                                    <?php echo form_open('', ['class' => 'needs-validation', 'autocomplete' => 'off']); ?>
                                    <div class="form-row">
                                       <!-- <div class="col-md-4 mb-3">
                                        <div class="position-relative form-group">
                                            <label for="exampleSelect" class="">Subject</label>
                                            <select name="purpose" id="purpose" class="form-control">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                        </div>
                                                </div>  -->

                                                <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">Subject</label>
                                            <input type="text" class="form-control" id="purpose" name="purpose" placeholder="Subject/Purpose" value="" required>
                                            <div class="invalid-feedback">
                                                    Please Enter First Name.
                                                </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

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
                                                <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact" aria-describedby="inputGroupPrepend" required>
                                                <div class="invalid-feedback">
                                                    Please Enter Valid Contact.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                        <div class="position-relative form-group"><label for="exampleSelect" class="">No.of Persons</label><select name="no_person" id="no_person" class="form-control">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                            <label for="exampleSelect" class="">Date</label> 
                                <div class="col-md-4"> 
                                    <input type="date" name="date" id="date" value="yyyy-mm-dd"> 
                                </div>    
                                 </div>
                                    </div>
                                    <br>
                                    <div class="form-row">
                                        <div class="col-xm-4 md-4">
                                            <label for="validationCustom03">In-Time</label>
                                            <input type="time" id="in_time" name="in_time">
                                           <!--  <div class="invalid-feedback">
                                                Please provide a valid city.
                                            </div> -->
                                        </div>
                                        <div class="col-xm-4 md-4">
                                            <label for="validationCustom04">Out-Time</label>
                                            <input type="time" id="out_time" name="out_time">
                                            <!-- <div class="invalid-feedback">
                                                Please provide a valid state.
                                            </div> -->
                                        </div>
                                        <br><br>
                                        <div class="col-md-12">
                                        <div class="position-relative form-group">
                                            <label for="exampleText" class="">Notes</label>
                        <textarea id="notes" name="notes" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                <!-- </form> -->
                                <?php echo form_close(); ?>
            
                                
                                    
                            </div>
                        </div>
                        <br><br>
                        <!-- <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">List Of Students</h5>
                                <form class="needs-validation" novalidate>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationTooltip01">First name</label>
                                            <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required>
                                            <div class="valid-tooltip">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationTooltip02">Last name</label>
                                            <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
                                            <div class="valid-tooltip">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationTooltipUsername">Username</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                                                </div>
                                                <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
                                                <div class="invalid-tooltip">
                                                    Please choose a unique and valid username.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationTooltip03">City</label>
                                            <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
                                            <div class="invalid-tooltip">
                                                Please provide a valid city.
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationTooltip04">State</label>
                                            <input type="text" class="form-control" id="validationTooltip04" placeholder="State" required>
                                            <div class="invalid-tooltip">
                                                Please provide a valid state.
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationTooltip05">Zip</label>
                                            <input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required>
                                            <div class="invalid-tooltip">
                                                Please provide a valid zip.
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </form>
                            </div>
                        </div>
                    </div> -->                  



                                                <div class="container">
                                                <div class="page-title-actions">
                                                <div class="d-inline-block dropdown">
                                               <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                    </div>
                </div>
            </div>
     




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
                                                    <th>Purpose</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Contact</th>
                                                    <th>No.of Persons</th>
                                                    <th width="15%">Date</th>
                                                    <th>In-Time</th>
                                                    <th width="10%">Out-Time</th>
                                                    <th width="15%">Notes</th>
                                                    <th width="40%">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 

                                                    if(!empty($visitor_book_list)) 
                                                    {    

                                                    foreach ($visitor_book_list as $key => $value) 
                                                        {
                                                      
                                                        ?>
                                                <tr>
                <td scope="row"><?php echo !empty($value->vb_id)?$value->vb_id:""; ?></td>
                <td><?php echo !empty($value->vb_purpose)?$value->vb_purpose:""; ?> </td>
                <td><?php echo !empty($value->vb_fname)?$value->vb_fname:""; ?> </td>
                <td><?php echo !empty($value->vb_lname)?$value->vb_lname:""; ?> </td>
                <td><?php echo !empty($value->vb_contact)?$value->vb_contact:""; ?> </td>
                <td><?php echo !empty($value->vb_no_person)?$value->vb_no_person:""; ?> </td>
                <td><?php echo !empty($value->vb_date)?$value->vb_date:""; ?> </td>
                <td><?php echo !empty($value->vb_in_time)?$value->vb_in_time:""; ?> </td>
                <td><?php echo !empty($value->vb_out_time)?$value->vb_out_time:""; ?> </td>
                <td><?php echo !empty($value->vb_note)?$value->vb_note:""; ?> </td>
                
               

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