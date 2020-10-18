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
                                    <div>Phone Call Book 
                                       
                                    </div>
                                </div>





                                <div class="page-title-actions">
                                   
                                    <div class="d-inline-block dropdown">

                                
                                    </div>
                                </div>    
                            </div>
                        </div>           

                         <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Add Phone Call Book </h5>
                               <!--  <form class="needs-validation" novalidate> -->
                                <?php echo form_open('', ['class' => 'needs-validation', 
                                'autocomplete' => 'off']); ?>
                                    <div class="form-row">
                                        <!-- <div class="col-md-4 mb-3">
                                        <div class="position-relative form-group"><label for="exampleSelect" class="">Purpose</label><select name="select" id="exampleSelect" class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select></div>
                                                </div> -->
                                        <div class="col-md-4 mb-3">
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
                                        <div class="col-md-4 mb-3">
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
                                            </div>
                                        </div>
                                       

                                            <div class="col-md-4">
                                            <label for="exampleSelect" class="">Current Date</label> 
                                <div class="col-md-4"> <input type="date" name="cdate" value="yyyy-mm-dd" required> 
                                </div>    
                                 </div>
                                 <div class="col-md-4 md-2">
                                            <label for="exampleSelect" class="">Next Follow Up Date</label> 
                                <div class="col-md-4"> <input type="date" name="ndate" value="yyyy-mm-dd" required> 
                                </div>    
                                 </div>
                                 <div class="col-md-4">
                                    <label for="validationCustomUsername">Call Type ( Incoming / Outgoing )</label>
                                   <div class="form-check">
                                                        <input type="radio" name="calltype" class="form-check-input" value="Incoming" checked/>
                                                        <label class="form-check-label" for="exampleRadios1">
                                                        Incoming
                                                        </label>
                                                    </div>

                                                      <div class="form-check">
                                                        <input type="radio" name="calltype" class="form-check-input" value="Outgoing" checked/>
                                                        <label class="form-check-label" for="exampleRadios1">
                                                        Outgoing
                                                        </label>
                                                    </div>

                                    </div>
                                </div>
                                    <br>
                                    <div class="form-row">
                                      
                                        <br><br>
                                        <div class="col-md-12">
                                        <div class="position-relative form-group"><label for="exampleText" class="">Notes</label>
                                        <textarea id="notes" name="notes" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit</button>

                                     <?php echo form_close(); ?>

                              

            
                              
                            </div>
                        </div>
                        <br><br>




                        
                            <div class="main-card mb-3 card">
                                    <div class="card-header">
                                        <i class="header-icon lnr-laptop-phone icon-gradient bg-plum-plate"> </i>
                                       List of Visitors

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
                                            <button class="btn-icon btn-icon-only btn btn-link">
                                             <i class="pe-7s-file btn-icon-wrapper"></i></button>
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
                                                    <th>Current Date</th>
                                                    <th>Next Follow Up Date</th>
                                                    <th>Call Type</th>
                                                    <th width="10%">Notes</th>
                                                    <th width="20%">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <?php

                                                    if (!empty($phonecall_book_list)) 
                                                    {
                                                    foreach ($phonecall_book_list as $key => $value)
                                                        {
                                                           
                                                       ?>

                                                <tr>
                        <td scope="row"><?php echo !empty($value->pcb_id)?$value->pcb_id:""; ?></td>
                        <td><?php echo !empty($value->pcb_fname)?$value->pcb_fname:""; ?></td>
                        <td><?php echo !empty($value->pcb_lname)?$value->pcb_lname:""; ?></td>
                        <td><?php echo !empty($value->pcb_contact)?$value->pcb_contact:""; ?></td>
                        <td><?php echo !empty($value->pcb_cdate)?$value->pcb_cdate:""; ?></td>
                        <td><?php echo !empty($value->pcb_ndate)?$value->pcb_ndate:""; ?></td>
                        <td><?php echo !empty($value->pcb_calltype)?$value->pcb_calltype:""; ?></td>
                        <td><?php echo !empty($value->pcb_note)?$value->pcb_note:""; ?></td>

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

      