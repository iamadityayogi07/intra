
<?php include('header.php') ?>

            <!-- container -->
            <div class="container">
               <!-- row -->
               <div class="row mb-8">
                  <div class="col-md-12">
                     <div class="d-md-flex justify-content-between align-items-center">
                        <!-- page header -->
                        <div>
                           <h2>Add New Category</h2>
                           <!-- breacrumb -->
                           <nav aria-label="breadcrumb">
                              <ol class="breadcrumb mb-0">
                                 <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                                 <li class="breadcrumb-item"><a href="#" class="text-inherit">Shop List</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">Add New Shop</li>
                              </ol>
                           </nav>
                        </div>
                      </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12 col-12">
                     <!-- card -->
                     <div class="card mb-6 shadow border-0">
                        <!-- card body -->
                        <div class="card-body p-6">
                           <h4 class="mb-4 h5 mt-5">Shop Detail</h4>

                           <div class="row">
                              <!-- input -->
                              <div class="mb-3 col-lg-6">
                                 <label class="form-label">Shop Name</label>
                                 <input type="text" class="form-control" placeholder="Shop Name" required />
                              </div>
                              <!-- input -->
                              <div class="mb-3 col-lg-6">
                                 <label class="form-label">Owner Name</label>
                                 <input type="text" class="form-control" placeholder="Owner Name" required />
                              </div>
                              <!-- input -->

                              <div class="mb-3 col-lg-6">
                                 <label class="form-label">Owner Mobile Number</label>
                                 <input type="text" class="form-control" placeholder="Owner Mobile Number" required />
                              </div>
                              <!-- input -->

                              <div class="mb-3 col-lg-6">
                                 <label class="form-label">Address*</label>
                                 <input type="text" class="form-control" placeholder="address" required />
                              </div>
                              <!-- input -->
                            
                              <!-- input -->
                              <div class="mb-3 col-lg-12">
                                 <label class="form-label" id="productSKU">Shop Status</label>
                                 <br />
                                 <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked />
                                    <label class="form-check-label" for="inlineRadio1">Active</label>
                                 </div>
                                 <!-- input -->
                                 <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                                    <label class="form-check-label" for="inlineRadio2">Disabled</label>
                                 </div>
                                 <!-- input -->
                              </div>
                            
                              <div class="col-lg-12 mt-5">
                                 <a href="#" class="btn btn-primary px-5">Submit</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
        

<?php include('footer.php') ?>			
