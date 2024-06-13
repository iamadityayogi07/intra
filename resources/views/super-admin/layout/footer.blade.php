</main>
</div>
</div>


<!-- ///////////////////////modals///////////////////////// -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
   @csrf
</form>
<!-- ///////////////////////modals///////////////////////// -->

<script src="{{asset('resources/super-admin-assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('resources/super-admin-assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
<!-- Theme JS -->

<script src="{{asset('resources/super-admin-assets/js/theme.min.js')}}"></script>
<script src="{{asset('resources/super-admin-assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
<script src="{{asset('resources/super-admin-assets/js/vendors/chart.js')}}"></script>
<script src="{{asset('resources/super-admin-assets/libs/quill/dist/quill.min.js')}}"></script>
<script src="{{asset('resources/super-admin-assets/js/vendors/editor.js')}}"></script>
<script src="{{asset('resources/super-admin-assets/libs/dropzone/dist/min/dropzone.min.js')}}"></script>
<script src="{{asset('resources/super-admin-assets/js/vendors/dropzone.js')}}"></script>
<script src="{{asset('resources/super-admin-assets/js/toaster-init.js')}}"></script>
<script src="{{asset('resources/super-admin-assets/js/toaster.min.js')}}"></script>
<script src="{{asset('resources/super-admin-assets/js/daterange.js')}}"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<!-- Include CKEditor -->
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<!-- Include Date Range Picker CSS and JS -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script> -->
<script>
   $("#single").select2({
      placeholder: "Select Email",
      allowClear: true
   });
   $(document).ready(function() {
      $('#myTable').DataTable();
   })
</script>
<!-- Initialize CKEditor on the textarea -->
<script>
   ClassicEditor
      .create(document.querySelector('#detail'))
      .catch(error => {
         console.error(error);
      });
</script>
<script>
   var msg = $("#msg_check").val();
   var title = $("#msg_check").attr("data-msg");
   if (msg == 1) {
      toastr.success(title, "Message", {
         timeOut: 5e3,
         closeButton: !0,
         debug: !1,
         newestOnTop: !0,
         progressBar: !0,
         positionClass: "toast-top-right",
         preventDuplicates: !0,
         onclick: null,
         showDuration: "300",
         hideDuration: "1000",
         extendedTimeOut: "1000",
         showEasing: "swing",
         hideEasing: "linear",
         showMethod: "fadeIn",
         hideMethod: "fadeOut",
         tapToDismiss: !1
      });
   } else if (msg == 2) {
      toastr.error(title, "Message", {
         positionClass: "toast-top-right",
         timeOut: 5e3,
         closeButton: !0,
         debug: !1,
         newestOnTop: !0,
         progressBar: !0,
         preventDuplicates: !0,
         onclick: null,
         showDuration: "300",
         hideDuration: "1000",
         extendedTimeOut: "1000",
         showEasing: "swing",
         hideEasing: "linear",
         showMethod: "fadeIn",
         hideMethod: "fadeOut",
         tapToDismiss: !1
      });
   }
</script>
<script>
   function failed(val) {
      toastr.error(val, "Message", {
         positionClass: "toast-top-right",
         timeOut: 5e3,
         closeButton: !0,
         debug: !1,
         newestOnTop: !0,
         progressBar: !0,
         preventDuplicates: !0,
         onclick: null,
         showDuration: "300",
         hideDuration: "1000",
         extendedTimeOut: "1000",
         showEasing: "swing",
         hideEasing: "linear",
         showMethod: "fadeIn",
         hideMethod: "fadeOut",
         tapToDismiss: !1
      });
   }

   function success(val) {
      toastr.success(val, "Message", {
         timeOut: 5e3,
         closeButton: !0,
         debug: !1,
         newestOnTop: !0,
         progressBar: !0,
         positionClass: "toast-top-right",
         preventDuplicates: !0,
         onclick: null,
         showDuration: "300",
         hideDuration: "1000",
         extendedTimeOut: "1000",
         showEasing: "swing",
         hideEasing: "linear",
         showMethod: "fadeIn",
         hideMethod: "fadeOut",
         tapToDismiss: !1
      });
   }
</script>
<script>
   function get_sub_cat(id, value, value2) {
      $.ajax({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
         method: "POST",
         url: "{{url('get-data-by-id')}}",
         data: {
            id: id,
            table: value,
            column_name: value2,
         },
         success: function(response) {
            if (response == 0) {
               failed("something went wrong")
            } else {
               var dataHtml = '<option value="">Select...</option>';
               $.each(response.data, function(key, val) {
                  dataHtml += '<option value="' + val.id + '">' + val.name + '</option>';
               });
               $('.subcategory_id').html(dataHtml)
            }
         }
      });
   }
</script>
<script>
   $(function() {
      $("#btnAdd").bind("click", function() {
         var div = $("<div />");
         div.html(GetDynamicTextBox(""));
         $("#TextBoxContainer").append(div);
      });
      $("body").on("click", ".remove", function() {
         $(this).closest("div").remove();
      });
   });

   function GetDynamicTextBox(value) {
      return '<input type="text" name="unit[]" class="" value = "' + value + '" placeholder="Unit" required>' +
         '<input type="text" name="quantity[]" class="only_numeric" value = "' + value + '" placeholder="Pieces quantity in unit"  required>' +
         '<input type="text" name="min_quantity[]" class="only_numeric" value = "' + value + '" placeholder="Minimum order quantity"  required>' +
         '<input name="price[]" type="text" class="allow_decimal" value = "' + value + '" placeholder="price" required>' +
         '<input type="button" value="Remove" class="remove">'
   }
</script>
<script>
   function search_product() {
      var brandSelect = 0;
      if ($('#brandSelect').val() > 0) {
         var brandSelect = $('#brandSelect').val()
      }
      var categorySelect = 0;
      if ($('#categorySelect').val() > 0) {
         var categorySelect = $('#categorySelect').val()
      }
      var subCategorySelect = 0;
      if ($('#subCategorySelect').val() > 0) {
         var subCategorySelect = $('#subCategorySelect').val()
      }
      var productSearch = 0;
      if ($('#productSearch').val() != '') {
         var productSearch = $('#productSearch').val()
      }
      if (brandSelect != '' || categorySelect != '' || subCategorySelect != '' || productSearch != '') {
         $.ajax({
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "POST",
            url: "{{url('product-filter')}}",
            data: {
               brandSelect: brandSelect,
               categorySelect: categorySelect,
               subCategorySelect: subCategorySelect,
               productSearch: productSearch,
            },
            success: function(response) {
               if (response != 0) {
                  $('.product-list-html').html(response)
               } else {
                  failed('Product not found!')
               }
            }
         });
      } else {
         alert('Please choose at least one filter!')
      }
   }
</script>
<script>
   function cart_modal() {
      $('#addToCartModal').modal('show')
   }
   $('#variationSelect').change(function() {
      var variationId = $('#variationSelect').val()
      if (variationId > 0) {
         var min_quantity = $("#productvariation" + variationId).attr("data-min-quantity")
         $('#min-quant-msg').text('Minimum quantity : ' + min_quantity)
      } else {
         $('#min-quant-msg').text('')
      }
   })

   function last_order_check() {
      var tbody = document.getElementById('myTbody');
      var rows = tbody.getElementsByTagName('tr');
      return rows.length;
   }

   function removeFromCart(id, val) {
      if (val == 1) {
         var last_order = last_order_check()
         if (last_order < 3) {
            alert('Deleting this item will delete the complete Order ?');
         }
      }
      if (confirm("Are you sure!") == true) {
         $.ajax({
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{route('removeFromCart')}}",
            method: "POST",
            data: {
               id: id,
               val: val
            },
            success: function(response) {
               if (response.success == true) {
                  if (response.redirect == 1) {
                     window.location.href = "{{ route('order-list') }}";
                  } else {
                     alert(response.message)
                     location.reload();
                  }
               } else {
                  alert('Something went wrong!')
               }
            }
         })
      } else {
         return false;
      }
   }

   function addToCart() {
      var variationId = $('#variationSelect').val()
      var quantity = parseFloat($('#quantityInput').val())
      var min_quantity = $("#productvariation" + variationId).attr("data-min-quantity")
      if (variationId > 0 && quantity > 0 && min_quantity > 0) {
         if (quantity >= min_quantity) {
            $.ajax({
               headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               url: "{{route('addToCart')}}",
               method: "POST",
               data: {
                  variationId: variationId,
                  quantity: quantity
               },
               success: function(response) {
                  if (response.success == true) {
                     alert(response.message)
                     $('#quant-error-msg').text('');
                     location.reload();
                     // window.location.href = "{{ route('productOrders.index') }}";
                  } else {
                     alert(response.message)
                  }
               }
            })
         } else {
            $('#quant-error-msg').text('Minimum quantity is :' + min_quantity)
         }
      } else {
         return false;
      }
   }
</script>
<script>
   function increment(item_id, val) {
      var quantityElement = $('#quantity-' + item_id);
      var min_quantity = parseInt($('#min-quantity-' + item_id).val()) // assuming data-min-quantity is set
      var unitPrice = parseInt($('#unit-price-' + item_id).text())
      var quantity = parseInt(quantityElement.text());
      // alert(min_quantity)
      // Check if quantity is greater than or equal to min_quantity before incrementing
      if (quantity >= min_quantity) {
         quantity += 1;
         quantityElement.text(quantity);

         // Update total price
         if (quantity > 0 && unitPrice > 0) {
            var totP = (unitPrice * quantity).toFixed(2)
            $('#total-price-' + item_id).text(totP)
         }
         // Update cart
         calculateSubtotal()
         if (val == 0) {
            update_cart(item_id, quantity);
         } else {
            update_order(item_id, quantity);
         }
      } else {
         // Display an alert or handle the case where minimum quantity is not met
         alert("Minimum quantity reached");
      }
   }

   function decrement(item_id, val) {
      var quantityElement = $('#quantity-' + item_id);
      var min_quantity = parseInt($('#min-quantity-' + item_id).val()) // assuming data-min-quantity is set
      var unitPrice = parseInt($('#unit-price-' + item_id).text())
      var quantity = parseInt(quantityElement.text());

      // Check if quantity is greater than min_quantity before decrementing
      if (quantity > min_quantity) {
         quantity -= 1;
         quantityElement.text(quantity);

         // Update total price
         if (quantity > 0 && unitPrice > 0) {
            var totP = (unitPrice * quantity).toFixed(2)
            $('#total-price-' + item_id).text(totP)
         }

         // Update cart
         calculateSubtotal()
         if (val == 0) {
            update_cart(item_id, quantity);
         } else {
            update_order(item_id, quantity);
         }
      } else {
         // Display an alert or handle the case where minimum quantity is not met
         alert("Minimum quantity reached");
      }
   }

   function update_order(item_id, quantity) {
      if (item_id > 0 && quantity > 0) {
         $.ajax({
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{route('editOrder')}}",
            method: "POST",
            data: {
               item_id: item_id,
               quantity: quantity
            },
            success: function(response) {
               if (response.success == true) {
                  success(response.message)
               } else {
                  failed(response.message)
                  location.reload()
               }
            }
         })
      }
   }

   function editOrderr() {
      var order_id = $('#order_id').val();
      var sub_total = $('#sub_total').text();
      $.ajax({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
         url: "{{route('editOrderPrice')}}",
         method: "POST",
         data: {
            sub_total: sub_total,
            order_id: order_id
         },
         success: function(response) {
            if (response.success == true) {
               success(response.message)
            } else {
               failed('Something went wrong!')
            }
         }
      })
   }

   function update_cart(item_id, quantity) {
      if (item_id > 0 && quantity > 0) {
         $.ajax({
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{route('updateQuantity')}}",
            method: "POST",
            data: {
               item_id: item_id,
               quantity: quantity
            },
            success: function(response) {
               if (response.success == true) {
                  success(response.message)
               } else {
                  location.reload()
                  failed(response.message)
               }
            }
         })
      }
   }

   // Calculate and display subtotal
   function calculateSubtotal() {
      var subtotal = 0;
      $('.total_price').each(function() {
         subtotal += parseFloat($(this).text().replace(/[^\d.-]/g, ''));
      });
      $('#sub_total').text(subtotal.toFixed(2));
   }

   function placeOrder() {
      var sub_total = parseFloat($('#sub_total').text())
      if (sub_total > 0) {
         $.ajax({
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{route('placeOrder')}}",
            method: "POST",
            data: {
               sub_total: sub_total
            },
            success: function(response) {
               if (response.success == true) {
                  alert(response.message)
                  location.reload()
               } else {
                  alert(response.message)
               }
            }
         })
      }
   }

   function assign_driver(order_id, driver_id) {
      if (order_id > 0 && driver_id > 0) {
         $.ajax({
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{route('assign-driver')}}",
            method: "POST",
            data: {
               order_id: order_id,
               driver_id: driver_id
            },
            success: function(response) {
               if (response.success == true) {
                  alert(response.message)
               } else {
                  alert('Something went wrong!')
               }
            }
         })
      } else {
         failed('Sonething went wrong!')
      }
   }

   function change_order_status(order_id, status) {
      if (order_id > 0 && status >= 0) {
         $.ajax({
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{route('update-order-status')}}",
            method: "POST",
            data: {
               status: status,
               order_id: order_id
            },
            success: function(response) {
               success("Order status updated")
               location.reload()
            }
         })
      } else {
         failed('Something went wrong!')
         return false;
      }
   }

   function change_status(order_id) {
      var status = $('#order_status' + order_id).val();
      var order_id = $('#order_id' + order_id).val();
      if (order_id > 0 && status >= 0) {
         $.ajax({
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{route('update-order-status')}}",
            method: "POST",
            data: {
               status: status,
               order_id: order_id
            },
            success: function(response) {
               success("Order status updated")
            }
         })
      } else {
         failed('Something went wrong!')
         return false;
      }
   }

   $('#pay_now').keyup(function() {
      var total = $('#total_price').val()
      var rem = total - this.value
      $('#due_amount').val(rem)
   })

   function getPaymentType(val) {
      // Get the value of the checked radio button
      var paymentType = $("input[name='paymentType']:checked").val();
      var paymentMode = $("input[name='paymentMode']:checked").val();
      // alert(paymentType)
      // alert(paymentMode)
      if (val == 0) {
         if (paymentType == 'partial') {
            $('#pay_now').attr('required', true)
            $('#due_amount').attr('required', true)
            $('.payment-type-div').removeClass('d-none')
         } else {
            $('#pay_now').attr('required', false)
            $('#due_amount').attr('required', false)
            $('.payment-type-div').addClass('d-none')
         }
      } else if (val == 1) {
         if (paymentMode == 'online') {
            $('#ref_image').attr('required', true)
            $('.payment-mode-div').removeClass('d-none')
         } else {
            $('#ref_image').attr('required', false)
            $('.payment-mode-div').addClass('d-none')
         }
      }
   }
</script>
<script>
   $('#role_id').change(function() {
      $('#basic_pay').attr('required', false)
      $('#monthly_target').attr('required', false)
      $('#extra_per_order').attr('required', false)
      $('#incentive').attr('required', false)
      $('.agent-only').addClass('d-none')
      if (this.value == 'Agent') {
         $('#basic_pay').attr('required', true)
         $('#monthly_target').attr('required', true)
         $('#extra_per_order').attr('required', true)
         $('#incentive').attr('required', true)
         $('.agent-only').removeClass('d-none')
      }
   })
</script>
<script>
   function filter(mode) {
      // alert(mode)
      var driv_id = null;
      var shop_id = null;
      var date_range = $('#config-demo').val()
      // alert(date_range);die;
      if ($('#driver_select').val() != '') {
         driv_id = $('#driver_select').val()
      }
      if ($('#shops_select').val() != '') {
         shop_id = $('#shops_select').val()
      }
      if (date_range != '' || driv_id > 0 || shop_id > 0) {
         $.ajax({
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{route('order-filter')}}",
            method: "POST",
            data: {
               driv_id: driv_id,
               shop_id: shop_id,
               date_range: date_range,
               mode: mode,
            },
            success: function(response) {
               success("Order list filtered!")
               $('.order-html').html(response)
            }
         })
      } else {
         return false;
      }
   }

   function pay_shop_due(id, amount) {
      $('#shop_id').val(id)
      $('#due_amount_hidden').val(amount)
      $('#due_amount').val(amount)
      $('#payDueModal').modal('show')
   }
</script>
<script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>
<script>
   $('#example7').calendar({
      type: 'month',
      onChange: onChange
   });

   function onChange(date, text, mode) {
      var formattedDate = moment(date).format('YYYY-MM');
      var user_id = $('#user_id').val()
      if (formattedDate != '') {
         $.ajax({
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{route('report-filter')}}",
            method: "POST",
            data: {
               formattedDate: formattedDate,
               user_id: user_id
            },
            success: function(response) {
               console.log(response)
               $('#monthly_target').text(0)
               $('#remaining_month_target').text(0)
               $('#this_month_order').text(0)
               $('#todays_order').text(0)
               $('#agent_today_incentive').text(0)
               $('.agent_month_incentive').text(0)
               $('#over_achieved_target').text(0)
               $('#basic_pay').text(0)
               $('#monthly_incentive').text(0)
               $('#total_salary').text(0)
               if (response.success == true) {
                  $('#monthly_target').text(response.monthly_target)
                  $('#remaining_month_target').text(response.remaining_month_target)
                  $('#this_month_order').text(response.this_month_order)
                  $('#todays_order').text(response.todays_order)
                  $('#agent_today_incentive').text(response.agent_today_incentive)
                  $('.agent_month_incentive').text(response.agent_month_incentive)
                  $('#over_achieved_target').text(response.over_achieved_target)
                  $('#basic_pay').text(response.basic_pay)
                  $('#monthly_incentive').text(response.monthly_incentive)
                  var total = parseFloat(response.basic_pay) + parseFloat(response.agent_month_incentive) + parseFloat(response.monthly_incentive);
                  $('#total_salary').text(total.toFixed(2))
                  failed('Data filtered successfully!')
               } else {
                  failed('Data not available for selected Month-Year!')
               }
               // $('.order-html').html(response)
            }
         })
      } else {
         return false;
      }
   }
</script>
<script>
   $(".allow_numeric").keyup(function() {
      var $this = $(this);
      $this.val($this.val().replace(/[^\d.]/g, ''));
   });
   // Use event delegation to handle the input event for elements with the "only_numeric" class
   $(document).on("input", ".only_numeric", function() {
      // Remove non-numeric characters using a regular expression
      $(this).val($(this).val().replace(/\D/g, ""));
   });

   //decimal only
   $(document).on("input", ".allow_decimal", function(evt) {
      var self = $(this);
      var cleanedValue = self.val().replace(/[^0-9.]/g, '');

      // Split the value into parts before and after the decimal point
      var parts = cleanedValue.split('.');

      // If there are more than two parts, remove additional decimal points
      if (parts.length > 2) {
         cleanedValue = parts[0] + '.' + parts.slice(1).join('');
      }

      self.val(cleanedValue);
   });
</script>
<script>
   function change_active_status(table_name, id, status) {
      $.ajax({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
         url: "{{route('active-status')}}",
         method: "POST",
         data: {
            table_name: table_name,
            id: id,
            status: status
         },
         success: function(response) {
            if (response.success == true) {
               success(response.message)
            } else {
               alert(response.message)
               location.reload();
            }
         }
      })
   }
</script>
<script>
   $('#password,#confirm_password').keyup(function() {
      $('#submitBtn').prop('disabled', true)
      $('#pass-error-msg').text('Password and Confirm Password should be same!')

      var pass = $('#password').val()
      var confirm_password = $('#confirm_password').val()
      if (pass == confirm_password) {
         $('#pass-error-msg').text('')
         $('#submitBtn').prop('disabled', false)
      }
   })
</script>
</body>

</html>