


                <!-- Start Page -->
                   
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-repeat icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Expenses
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
                                <h5 class="card-title">Add Expenses/Item </h5>
                               <!--  <form class="needs-validation" novalidate> -->

                                     <?php echo form_open('',['class' => 'needs-validation',
                                'autocomplete' => 'off']); ?>

                                    <div class="form-row">
                                        <div class="col-md-3 mb-3">
                                        <div class="position-relative form-group"><label for="exampleSelect" class="">Expenses Qty.</label><select name="qty" id="qty" class="form-control">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select></div>
                                                </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom01">Expenses/Item Name</label>
                                            <input type="text" class="form-control" id="iname" name="iname" placeholder="Enter Expenses/Item Name" value="" required>
                                             <div class="invalid-feedback">
                                                    Please Enter Expenses/Item Name
                                                </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div> 
                                        </div>

                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom02" class="">Date</label> 
                                 
                                    <input type="text" class="form-control" value="yyyy-mm-dd" id="datepicker"> 
                                   
                                 </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom02">Amount</label>
                                        <input type="number" class="form-control" id="amount" name="amount" 
                                            placeholder="Enter Amount" value="" required>
                                             <div class="invalid-feedback">
                                                    Please Enter Valid Amount
                                                </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div> 
                                        </div>

                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustomUsername">Vender 
                                            first Name</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                                                </div>
                                                <input type="text" class="form-control" id="vfname" 
                                               name="vfname" placeholder="Enter Vender First Name" aria-describedby="inputGroupPrepend" required>
                                                <div class="invalid-feedback">
                                                    Please Enter Vender First Name
                                                </div>
                                                 <div class="valid-feedback">
                                                Looks good!
                                            </div> 
                                            </div>
                                        </div>

                                         <div class="col-md-3 mb-3">
                                            <label for="validationCustomUsername">Vender Last Name</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                                                </div>
                                                <input type="text" class="form-control" 
                                                id="vlname" name="vlname" placeholder="Enter Vender Last Name" aria-describedby="inputGroupPrepend" required>
                                                <div class="invalid-feedback">
                                                    Please Enter Vender Last Name
                                                </div>
                                                 <div class="valid-feedback">
                                                Looks good!
                                            </div> 
                                            </div>
                                        </div>
                                        


                                         <div class="col-md-3 mb-3">
                                            <label for="validationCustomUsername">Payment Mode</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                                                </div>
                                                <input type="text" class="form-control" id="payment"
                                                name="payment" placeholder="Payment Mode" aria-describedby="inputGroupPrepend" required>
                                                 <div class="invalid-feedback">
                                                    Please Enter Payment Mode
                                                </div>
                                                 <div class="valid-feedback">
                                                Looks good!
                                            </div> 
                                            </div>
                                        </div>

                                     <div class="col-md-10">
                                        <div class="position-relative form-group"><label for="exampleText" class="">Notes (optional)</label><textarea name="notes" id="notes" class="form-control"></textarea>
                                        </div>
                                    </div>
                                                    

                                    </div>
                           
                                    <div class="form-group">

                                         <div class="position-relative form-group"><label for="exampleFile" class="">Attach Docs</label><input name="attach" id="attach" type="file" class="form-control-file">
                                                        <small class="form-text text-muted">
                                                            Attach Docs Here!
                                                        </small>
                                                    </div>
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
                           <!--      </form> -->
                                <?php echo form_close(); ?>
            
                               
                            </div>
                        </div>
                        <br><br><br>
                      
                            <div class="main-card mb-3 card">
                                    <div class="card-header">
                                        <i class="header-icon lnr-laptop-phone icon-gradient bg-plum-plate"> </i>
                                       List Of Expenses

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
                                                    <th>Expenses Qty.</th>
                                                    <th>Expenses Name</th>
                                                    <th>Date</th>
                                                    <th>Amount</th>
                                                    <th>Vender FName</th>
                                                    <th>Vender LName</th>
                                                    <th>Payment Mode</th>
                                                    <th>Notes</th>
                                                    <th>Attach Docs</th>
                                                    <th width="25%">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    if(!empty($Add_expenses_list))
                                                    {
                                                    foreach ($Add_expenses_list as $key => $value) {
                                                        
                                                    ?>
                                                <tr>
                    <td scope="row"><?php echo !empty($value->exp_id)?$value->exp_id:""; ?></td>
                    <td><?php echo !empty($value->exp_qty)?$value->exp_qty:""; ?></td>
                    <td><?php echo !empty($value->exp_iname)?$value->exp_iname:""; ?></td>
                    <td><?php echo !empty($value->exp_date)?$value->exp_date:""; ?></td>
                    <td><?php echo !empty($value->exp_amount)?$value->exp_amount:""; ?></td>
                    <td><?php echo !empty($value->exp_vfname)?$value->exp_vfname:""; ?></td>
                    <td><?php echo !empty($value->exp_vlname)?$value->exp_vlname:""; ?></td>
                    <td><?php echo !empty($value->exp_payment)?$value->exp_payment:""; ?></td>
                    <td><?php echo !empty($value->exp_note)?$value->exp_note:""; ?></td>
                    <td><?php echo !empty($value->exp_attach)?$value->exp_attach:""; ?></td>

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
                    </div>
                        <!-- End Page -->

                      