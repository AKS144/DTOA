<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">Book Ticket</div>

            <div class="panel-body">

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/new_ticket') }}">
                    {!! csrf_field() !!}


                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="title" class="col-md-4 control-label">Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="title" class="col-md-4 control-label">Email</label>

                        <div class="col-md-6">
                            <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                        <label for="mobile" class="col-md-4 control-label">Phone</label>

                        <div class="col-md-6">
                            <input id="mobile" type="text" class="form-control" name="mobile" value="{{ old('mobile') }}">

                            @if ($errors->has('mobile'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('mobile') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>


                    {{--  <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                        <label for="category" class="col-md-4 control-label">Category</label>

                        <div class="col-md-6">
                            <select id="" type="category" class="form-control" name="category">
                                <option value="">Select Category</option>
                                <option value="seats">1</option>
                                <option value="jeeps">1</option>
                            </select>

                            @if ($errors->has('category'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('category') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                        <label for="category" class="col-md-4 control-label">Total</label>

                        <div class="col-md-6">
                            <select id="" type="category" class="form-control" name="category">
                                <option value="">Select Category</option>
                                <option value="seats">1</option>
                                <option value="jeeps">1</option>
                            </select>

                            @if ($errors->has('category'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('category') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>  --}}


                    {{--  <div class="form-group col-md-2">
                        <label for="">Seats</label>
                        <input type="number"  pattern="[0-9]+([\.,][0-9]+)?" name="category" class="form-control">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="">Number</label>
                        <input type="number" name="qty" class="form-control">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="">Total</label>
                        <input type="number" name="total" class="form-control" value="total">
                    </div>  --}}

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="category">Category</label>
                        <div class="col-sm-10">
                           <input type="number" name="category" id="value1" class="form-control" min="0" placeholder="Enter first value" required />
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="control-label col-sm-2" for="qty">Qty</label>
                        <div class="col-sm-10">
                           <input type="number" name="qty" id="value2" class="form-control" min="0" placeholder="Enter second value" required />
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="control-label col-sm-2" for="sum">Total</label>
                        <div class="col-sm-10">
                           <input type="number" name="total" id="sum" class="form-control" readonly />
                        </div>
                     </div>
                     &nbsp;

                     <div class="col-md-4">
                        <label class="control-label col-sm-2" for="sum">Time</label>
                       <select name="time_slot" class="form-control" id="exampleFormControlSelect1">
                            <option value="">Choose an option</option>
                            <option value="08:00 AM - 09:00 AM" >08:00 AM - 09:00 AM</option>
                            <option value="09:00 AM - 10:00 AM" >09:00 AM - 10:00 AM</option>
                            <option value="10:00 AM - 11:00 AM" >10:00 AM - 11:00 AM</option>
                            <option value="11:00 AM - 12:00 NOON">11:00 AM - 12:00 PM</option>
                        </select>
                     </div>
&nbsp;
                    <div class="col-md-4">
                        <label class="control-label col-sm-2" for="sum">Date</label>
                        <input type="date" name="book_date" class="form-control">
                    </div>
                    &nbsp;
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-ticket"></i> Book
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(function(){
        $('#value1, #value2').keyup(function(){
           var value1 = parseFloat($('#value1').val()) || 0;
           var value2 = parseFloat($('#value2').val()) || 0;
           var val3 = value1 * value2;
           $('#sum').val(val3);
        });
     });
</script>
