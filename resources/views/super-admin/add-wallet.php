
<?php include('header.php') ?>
<style>
    span.select2-selection.select2-selection--single {
        border: 1px solid #dfe2e1 !important;
        height: 41px !important;
        padding: 4px;
    }
    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 40px !important;
        right: 4px;
    }
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

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
                                 <li class="breadcrumb-item"><a href="wallet.php" class="text-inherit">Wallet</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">Add Wallet</li>
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
                        
                           <h4 class="mb-4 h5 mt-5">Wallet Detail</h4>

                           <div class="row">
                              <!-- input -->
                              <div class="mb-3 col-lg-6">
                                 <label class="form-label">User Email</label>
                                    <select id="single"  class="js-states form-control">
                                        <option value="">Select Email</option>
                                        <option>Java@gmail.com</option>
                                        <option>Javascript@gmail.com</option>
                                        <option>PHP@gmail.com</option>
                                        <option>Visual@gmail.com</option>
                                    </select>
                                </div>
                              <!-- input -->
                              <div class="mb-3 col-lg-6">
                                 <label class="form-label">User Name</label>
                                 <select id="single"  class="js-states form-control">
                                        <option value="">Select Name</option>
                                        <option>Ram</option>
                                        <option>Shyam</option>
                                    </select>
                              </div>
                              <!-- input -->

                              <div class="mb-3 col-lg-6">
                                 <label class="form-label">Payment method</label>
                                 <select id="single"  class="js-states form-control">
                                        <option value="">Select Payment Method</option>
                                        <option>Online</option>
                                        <option>Offline</option>
                                    </select>
                              </div>
                              <!-- input -->

                              <div class="mb-3 col-lg-6">
                                 <label class="form-label">Amount</label>
                                 <input type="number" class="form-control" placeholder="account (e.g.  100)" required />
                              </div>
                              <!-- input -->
                              <div class="mb-3 col-lg-12">
                                 <label class="form-label">Payment Details</label>
                                 <textarea name="" class="form-control" cols="30" rows="3"></textarea>
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
		
