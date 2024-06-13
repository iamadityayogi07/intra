@extends('super-admin.layout.app')
@section('content')

<?php

use Illuminate\Support\Facades\Session;

if (!empty(Session::get('flash_status'))) {
?>
   <input type="hidden" id="msg_check" value="<?= Session::get('flash_status'); ?>" data-msg="<?= Session::get('flash_msg'); ?>">
<?php
   Session::pull('flash_status');
   Session::pull('flash_msg');
}
?>
<style>
@media(max-width:767px){
.card-body.p-6 {
    padding: 15px !important;
}


.d-flex.justify-content-end {
    margin-top: 10px;
    justify-content: center !IMPORTANT;
    text-align: center;
    width: 100%;
}
.icon-shape.icon-md.rounded-circle {
    min-width: 40px;
}
a.btn.btn-info {
    padding: 3px 14px !important;
}
.d-flex.justify-content-between.align-items-center.mb-6 {
    margin-bottom: 15px !important;
}
h4.mb-0.fs-5 {
    font-size: 15px !important;
}

.icon-shape.icon-md.bg-light-danger.text-dark-danger.rounded-circle {
    min-width: 40px;
}
}
</style>

<section class="container">
   <!-- table -->
   <div class="table-responsive-xl mb-6 mb-lg-0">

   <!-- row -->
   <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-12 mb-6">
         <div class="card h-100 card-lg">
            <!-- heading -->
            <div class="p-6">
               <h3 class="mb-0 fs-5">Agents</h3>
            </div>
            <div class="card-body p-0">
               <!-- table -->
               <div class="table-responsive">
                  <table class="table table-bordered">
                     <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th width="280px">Action</th>
                     </tr>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>


@endsection