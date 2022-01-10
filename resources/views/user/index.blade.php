<!doctype html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Booking-DTOA</title>
</head>
<body>
    <div class="container-fluid" style="background-image:url(https://dudhsagarjeeps.com/wp-content/uploads/2021/10/Ca_BwaEUEAEUO2z.jpg);">
        <div class="row">
            <diV class="col-md-12" style="color:#fff; padding:30px;">
                <h1 class="text-center">
                    <img width="154" src="https://dudhsagarjeeps.com/wp-content/uploads/2019/07/LOGO1-2-300x236.png" class="attachment-medium size-medium" alt="" loading="lazy" srcset="https://dudhsagarjeeps.com/wp-content/uploads/2019/07/LOGO1-2-300x236.png 300w, https://dudhsagarjeeps.com/wp-content/uploads/2019/07/LOGO1-2-600x472.png 600w, https://dudhsagarjeeps.com/wp-content/uploads/2019/07/LOGO1-2-768x605.png 768w, https://dudhsagarjeeps.com/wp-content/uploads/2019/07/LOGO1-2-700x551.png 700w, https://dudhsagarjeeps.com/wp-content/uploads/2019/07/LOGO1-2.png 935w" sizes="(max-width: 300px) 100vw, 300px"></h1>
                <h1 class="text-center" style="padding-top:60px;">Dudhsagar Waterfall Jeep Tour
                </h1>
            </div>
        </div>
    </div><br><br>



        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <label>Select Time slot</label>
                    <select name="time_slot" class="form-control" id="time_slot">
                        <option value="">Choose an option</option>
                        <option value="08:00 AM - 09:00 AM">08:00 AM - 09:00 AM</option>
                        <option value="09:00 AM - 10:00 AM">09:00 AM - 10:00 AM</option>
                        <option value="10:00 AM - 11:00 AM">10:00 AM - 11:00 AM</option>
                        <option value="11:00 AM - 12:00 NOON">11:00 AM - 12:00 NOON</option>

                    </select>
                </div>
                <div class="col-md-4">
                    <label>Select Date</label>

                    <input type="text" name="book_date" id="datepicker" class="form-control" >
                </div>

                <div class="col-md-4">
                    <label>&nbsp;</label><br>

                    <button class="btn btn-success" type="button" id="checkavil">Check Availability</button>
                </div>
            </div><br>
            <div id="seat">

            </div>
            <div>

                <div id="booking">

                    <div class="row">
                        <div class="col-md-4">
                            <label class="control-label " for="category">Category</label>
                            <select name="category" class="form-control" id="category">
                        <option value="">Choose an option</option>
                        <option value="10">Seat</option>
                        <option value="70">Jeep</option>

                    </select>
                        </div>

                    <div class="col-md-4">
                        <label class="control-label " for="qty">Number Person</label>

                        <input type="number" name="qty" id="value2" class="form-control" min="0" placeholder="Enter second value" required />
                    </div>

                <div class="col-md-4">
                    <label class="control-label col-sm-2" for="sum">Total</label>

                    <span id="rupee"></span> <p id="sums"></p>
                    <input type="hidden" name="total" id="sum" class="form-control" readonly />
                </div>
            </div><br>


        <h3 class="text-center">User Details</h3>

        <div class="row">
            <div class="col-md-4">
                <label>First Name</label>
                <input type="text" name="name" class="form-control" id="name">

            </div>
            <!-- <div class="col-md-4">
        <label>Last Name</label>

        <input type="text" name="last_name" class="form-control">
        </div> -->
            <div class="col-md-4">
                <label>Email</label>

                <input type="email" name="email" class="form-control" id="email">

            </div>
        </div><br>
        <div class="row">
            <div class="col-md-3">
                <label>Address</label>
                <input type="text" name="address" class="form-control" id="address">

            </div>
            <div class="col-md-3">
                <label>Phone No.</label>

                <input type="text" name="mobile" class="form-control" id="mobile">
            </div>

            <div class="col-md-3">
                <label>Identity Proof</label>

                <select name="id_proof" class="form-control" id="id_proof">
                    <option value="">Choose an option</option>
                    <option value="Aadhar Card">Aadhar Card</option>
                    <option value="Voting Card">Voting Card</option>
                    <option value="Diving License">Diving License</option>
                    <option value="Other Identity Proof">Other Identity Proof</option>

                </select>

            </div>
            <div class="col-md-3">
                <label>Identity No.</label>

                <input type="text" name="id_number" id="id_proof" class="form-control">
            </div>
        </div><br>
        <div class="row">
            <div class="col-md-4">
                {{--  @if($slot->seats >= $request->qty)  --}}
                    <button class="btn btn-success " id="pay" >Proceed to payment</button>
                {{--  @else
                    <h6>No seat available</h6>
                @endif  --}}
            </div>
        </div>
        </div>
        </div><br><br>


    <div class="summary entry-summary" style="width:100% !important;">
        <h1 class="product_title entry-title">RULES &amp; REGULTIONS</h1>
        <div class="woocommerce-product-details__short-description">
            <div class="elementor-text-editor elementor-clearfix">
                <p>
                    <b>Fees and Charges:</b></p>
                <ol>
                    <li>Jeep Tour fee per person is Rs.500/- Children of age 4 and above will be charged as full ticket.</li>
                    <li>An Advance Online Booking is mandatory to make seat or jeep reservation. Rs.10/- will be charged per Person as an online reservation Fee. The Trip Fee is to be paid in Cash at DTOA Counter at the venue.</li>
                    <li>A rental fee of Rs.40/- is charged for each life jacket. Life jacket is compulsory for every person, as per the order of the District Magistrate.</li>
                    <li>A Forest entry fee of Rs.100/- for adult and Rs.30/- for children is charged per person by the forest department.</li>
                    <li>Additional fees are charged for cameras by the forest department.</li>
                </ol>
                <p><b>Rules:</b></p>
                <ol>
                    <li>Ensure to report at the DTOA counter 15 minutes before the time slot you have chosen while booking online.</li>
                    <li>Only the original sms and/or email confirmation received from www.dudhsagarjeeps.com will be accepted at the DTOA counter. Forwarded sms will not be accepted.</li>
                    <li>Guests with online bookings will be allotted jeeps at the DTOA counter on the day of tour. The queue is cleared in a sequential manner for every time slot. Hence, a booking for a particular time slot may be delayed slightly. There is no absolute guarantee that you will be assigned a jeep exactly on time.</li>
                    <li>Please be patient if there are delays in jeep allotment due to unforeseen circumstances. Request you to accept the decision of the DTOA personnel as final and abiding.</li>
                </ol>
                <p><b>General Rules:</b></p>
                <ol>
                    <li>Each jeep accommodates 7 guests.</li>
                    <li>One can book independent jeep by paying Rs.3500/- and also sharing is available at DTOA office Collem.</li>
                    <li>Identity Proof: Please carry any one of the below original government approved photo identity and address proof documents for verification purpose. Present it at the DTOA counter when requested. Photo Identity accepted by DTOA: Aadhaar card, PAN, Driving License, Passport.</li>
                    <li>Once the jeep is assigned, guests are requested to immediately rent life-jackets and board the jeep.</li>
                    <li>On arrival at the Dudhsagar Falls, guests are permitted 1 hour 30 minutes to spend time at the falls.</li>
                    <li>Please note the vehicle number of the jeep assigned to you. The same jeep will take you back to the start point of the tour.</li>
                </ol>
                <p><b>Rules and regulations of the Forest Department:</b></p>
                <ol>
                    <li> You are going to the waterfalls which is inside the National park/Wild Life Sanctuary.</li>
                    <li> Please follow the guidelines of the forest Dept.</li>
                    <li>Please carry life jackets which is mandatory as per the order.</li>
                    <li>You have to pay entry fee at the forest gate and also pay if you have a Camera.</li>
                    <li>Dudhsagar Falls is located in ‘Bhagwan Mahavir National Park / Wildlife Sanctuary’.</li>
                    <li>Do not litter the forest.</li>
                    <li>Co-ordinator and receptionist at the DTOA counter will help the tourists in need. </li>
                </ol>
            </div>
        </div>
    </div>
    <!-- <footer>
<div class="container-fluid" style="background:black;">
    <div class="row">
        <diV class="col-md-4" style="color:#fff; padding:30px;"><h1 class="text-center">
            <img width="154" src="https://dudhsagarjeeps.com/wp-content/uploads/2019/07/LOGO1-2-300x236.png"
            class="attachment-medium size-medium" alt="" loading="lazy" srcset="https://dudhsagarjeeps.com/wp-content/uploads/2019/07/LOGO1-2-300x236.png 300w, https://dudhsagarjeeps.com/wp-content/uploads/2019/07/LOGO1-2-600x472.png 600w, https://dudhsagarjeeps.com/wp-content/uploads/2019/07/LOGO1-2-768x605.png 768w, https://dudhsagarjeeps.com/wp-content/uploads/2019/07/LOGO1-2-700x551.png 700w, https://dudhsagarjeeps.com/wp-content/uploads/2019/07/LOGO1-2.png 935w" sizes="(max-width: 300px) 100vw, 300px"></h1>

        </div>
        <p class="text-center" style="padding-top:60px;color:#fff; ">Powered by <a href="http://coderix.io/" target="_blank" style="color:green;text-decoration: none;"> Coderix</a></p>
</div>
</div>
</footer> -->
</body>
</html>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        $('body').on('click','#pay',function(e){
            e.preventDefault();
            var name = $('#name').val();
            var time_slot = $('#time_slot').val();
            var book_date = $('#datepicker').val();
            var category = $('#category').val();
            var qty = $('#value2').val();
            var email = $('#email').val();
            var address = $('#address').val();
            var mobile = $('#mobile').val();
            var id_proof = $('#id_proof').val();
            var id_number = $('#id_number').val();
            var amount = $('#sum').val();
            var total = $('#sum').val();
            var total_amount = amount * 100;
            var options = {
                "key": "{{ env('RAZOR_KEY') }}", // Enter the Key ID generated from the Dashboard
                "amount": total_amount, // Amount is in currency subunits. Default currency is INR. Hence, 10 refers to 1000 paise
                "currency": "INR",
                "name": "DTOA",
                "description": "Tour Payment",
                "image": "https://dudhsagarjeeps.com/wp-content/uploads/2019/07/LOGO1-2-300x236.png",
                "order_id": "", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                "handler": function (response){
                    // $.ajaxSetup({
                    //     headers: {
                    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    //     }
                    // });
                    $.ajax({

                        type:'POST',
                        url:'payment/',

                        data:{ "_token": "{{ csrf_token() }}",
                            razorpay_payment_id:response.razorpay_payment_id,
                            amount:amount,
                            name:name,
                            time_slot:time_slot,
                            category:category,
                            qty:qty,
                            email:email,
                            address:address,
                            mobile:mobile,
                            id_number:id_number,
                            id_proof:id_proof,
                            total:total,
                            book_date:book_date,

                        },
                        success:function(data){
                            $('.success-message').text(data.success);
                            $('.success-alert').fadeIn('slow', function(){
                               $('.success-alert').delay(5000).fadeOut();
                            });
                            $('.amount').val('');
                        }
                    });
                },
                "prefill": {
                    "name": name,
                    "email": email,
                    "contact": mobile
                },
                "notes": {
                    "address": address
                },
                "theme": {
                    "color": "#19B05B"
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();
        });
    </script>
<script>
    $(function() {
        $("#datepicker").datepicker({
            dateFormat: 'yy-mm-dd'
            , minDate: 0
            , maxDate: 6
        });
    });

    $('#checkavil').click(function() {
        //alert('hi');

        var id = $("#time_slot").val();
        var book_date = $("#datepicker").val();
        //alert(id);
        if (id) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                , type: "get"
                , dataType: "json"
                , url: 'checkavail/' + id + '/' + book_date + ''
                , data: {
                    time_slot: id
                    , book_date: book_date
                }
                , success: function(data) {
                    if (data) {
                        $("#seat").empty();

                        //$("#seat").append('<option>Select District</option>');
                        $.each(data, function(index, item) {
                            $("#seat").append('<p style="color:red;"> Available Seats: ' + item.seats + '</p>');
                            $("#booking").show()
                        });
                    } else {

                    }
                }
            });
        }
    });
    $("#booking").hide();

    $(function() {
        $('#value1, #value2').keyup(function() {
            var value1 = parseFloat($('#category').val()) || 0;
            var value2 = parseFloat($('#value2').val()) || 0;
            var val3 = value1 * value2;
            $('#sum').val(val3);
            $('#sums').text('₹'+val3+'');

        });
    });

</script>
