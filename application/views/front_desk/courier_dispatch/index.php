<!-- Start Page -->
                   <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-repeat icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Courier Dispatch 
                                        <!-- <div class="page-title-subheading">Inline validation is very easy to implement using the Architect Framework.
                                        </div> -->
                                    </div>
                                </div>





                                <div class="page-title-actions">
                                    <!-- <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                        <i class="fa fa-star"></i>
                                    </button> -->
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
                        </div>           

                         <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Add Courier Dispatch </h5>
                               <!--  <form class="needs-validation" novalidate> -->
                                <?php echo form_open('', ['class' => 'needs-validation', 
                                'autocomplete' => 'off']); ?>
                                    <div class="form-row">
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom01">To Title</label>
                                            <input type="text" class="form-control" id="totitle" 
                                            name="totitle" placeholder="To Title" value="" required>
                                          <div class="invalid-feedback">
                                                    Please Enter To Title.
                                                </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom02">Reference No.</label>
                                            <input type="text" class="form-control" id="reference" 
                                            name="reference" placeholder="Reference No." value="" required>
                                            <!-- <div class="invalid-feedback">
                                                    Please Enter Last Name.
                                                </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div> -->
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustomUsername">Address</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                                                </div>
                                                <input type="text" class="form-control" id="address"
                                                name="address" placeholder="Address" aria-describedby="inputGroupPrepend" required>
                                               <!--  <div class="invalid-feedback">
                                                    Please Enter Valid Contact.
                                                </div> -->
                                            </div>
                                        </div>

                                         <div class="col-md-4 mb-3">
                                            <label for="validationCustomUsername">Note</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                                                </div>
                                                <input type="text" class="form-control" id="note" 
                                                name="note" placeholder="Note" aria-describedby="inputGroupPrepend" required>
                                               <!--  <div class="invalid-feedback">
                                                    Please Enter Valid Saubject.
                                                </div> -->
                                            </div>
                                        </div>

                                         <div class="col-md-4 mb-3">
                                            <label for="validationCustomUsername">Form Title</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                                                </div>
                                                <input type="text" class="form-control" id="fromtitle" 
                                                name="fromtitle" placeholder="Form Title" aria-describedby="inputGroupPrepend" required>
                                                <!-- <div class="invalid-feedback">
                                                    Please Enter Correct Salary.
                                                </div> -->
                                            </div>
                                        </div>
                                                    <div class="col-md-3">
                                            <label for="exampleSelect" class="">Date</label> 
                                <div class="col-md-4"> <input type="date" name="start-date" value="yyyy-mm-dd" required> 
                                </div>    
                                 </div>

                                    </div>
                             <!--        <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom03">City</label>
                                            <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid city.
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom04">State</label>
                                            <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid state.
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom05">Zip</label>
                                            <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid zip.
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="form-group">

                                         <div class="position-relative form-group"><label for="exampleFile" class="">Attach Docs</label><input name="file" id="attach" type="file" class="form-control-file">
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
                                    <?php echo form_close(); ?>
                                </form>
            
                               <!--  <script>
                                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                                    (function() {
                                        'use strict';
                                        window.addEventListener('load', function() {
                                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                            var forms = document.getElementsByClassName('needs-validation');
                                            // Loop over them and prevent submission
                                            var validation = Array.prototype.filter.call(forms, function(form) {
                                                form.addEventListener('submit', function(event) {
                                                    if (form.checkValidity() === false) {
                                                        event.preventDefault();
                                                        event.stopPropagation();
                                                    }
                                                    form.classList.add('was-validated');
                                                }, false);
                                            });
                                        }, false);
                                    })();
                                </script> -->
                            </div>
                        </div>
                        <br><br><br>





                        
                            <div class="main-card mb-3 card">
                                    <div class="card-header">
                                        <i class="header-icon lnr-laptop-phone icon-gradient bg-plum-plate"> </i>
                                       List Of Courier Dispatch 




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
                                                    <th>To Title</th>
                                                    <th>Reference No.</th>
                                                    <th>Address</th>
                                                    <th>Note</th>
                                                    <th>Form Title</th>
                                                    <th>Date</th>
                                                    <th>Attach Docs</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                    <?php 

                                                    if(!empty($courier_dispatch_list)) 
                                                    {    

                                                    foreach ($courier_dispatch_list as $key => $value) 
                                                        {
                                                      
                                                        ?>


                                                                    <tr>
                <td scope="row"><?php echo !empty($value->cd_id)?$value->cd_id:""; ?></td>
                <td><?php echo !empty($value->cd_totitle)?$value->cd_totitle:""; ?> </td>
                <td><?php echo !empty($value->cd_reference)?$value->cd_reference:""; ?> </td>
                <td><?php echo !empty($value->cd_address)?$value->cd_address:""; ?> </td>
                <td><?php echo !empty($value->cd_note)?$value->cd_note:""; ?> </td>
                <td><?php echo !empty($value->cd_fromtitle)?$value->cd_fromtitle:""; ?> </td>
                <td><?php echo !empty($value->cd_date)?$value->cd_date:""; ?> </td>
                <td><?php echo !empty($value->cd_attach)?$value->cd_attach:""; ?> </td>
                
             
               

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
