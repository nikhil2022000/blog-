@extends('project.header_footer_file.main')
    @section('main-container')
    <!-- Content wrapper scroll start -->
    <div class="content-wrapper-scroll">

<!-- Content wrapper start -->
<div class="content-wrapper">
    <!-- Row start -->
<div class="row gutters" >

<div class="hh" style="text-align:center; width:651px; margin-left:180px; ">

    <!-- Card start -->
    <div class="card" >
        <div class="card-header">
            <div class="card-title"><h2>SingIn</h2></div>
        </div>
        <div class="card-body mt-4">
        @if(session()->has('message'))
									<div class="alert alert-success">
									{{ session()->get('message') }}
									</div>
								@endif  
            <form class="needs-validation" method="post" action="/insert">
            {{ csrf_field() }}
                <!-- Row start -->
                <div class="row gutters">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        
                        <!-- Field wrapper start -->
                        <div class="field-wrapper">
                            <input type="text" class="form-control" name="first_name" required>
                            <div class="field-placeholder">First Name</div>
                          
                        </div>
                        <!-- Field wrapper end -->

                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        
                        <!-- Field wrapper start -->
                        <div class="field-wrapper">
                            <input type="text" class="form-control" name="last_name" required>
                            <div class="field-placeholder">Last Name</div>
                           
                        </div>
                        <!-- Field wrapper end -->

                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        
                        <!-- Field wrapper start -->
                        <div class="field-wrapper">
                            <input type="email" class="form-control" name="email" required>
                            <div class="field-placeholder">Email</div>
                           
                        </div>
                        <!-- Field wrapper end -->

                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        
                        <!-- Field wrapper start -->
                        <div class="field-wrapper">
                            <input type="number" class="form-control" name="phone" required>
                            <div class="field-placeholder">Phone</div>
                           
                        </div>
                        <!-- Field wrapper end -->

                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        
                        <!-- Field wrapper start -->
                        <div class="field-wrapper">
                            <input type="text" class="form-control" name="city" required>
                            <div class="field-placeholder">city</div>
                           
                        </div>
                        <!-- Field wrapper end -->

                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        
                        <!-- Field wrapper start -->
                        <div class="field-wrapper">
                            <input type="text" class="form-control" name="state" required>
                            <div class="field-placeholder">State</div>
                           
                        </div>
                        <!-- Field wrapper end -->

                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        
                        <!-- Field wrapper start -->
                        <div class="field-wrapper">
                            <input type="text" class="form-control" name="address" required>
                            <div class="field-placeholder">Address</div>
                           
                        </div>
                        <!-- Field wrapper end -->

                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <!-- Field wrapper start -->
                        <div class="field-wrapper">
                            <input type="text" class="form-control" name="pincode" required>
                            <div class="field-placeholder">pincode</div>
                           
                        </div>
                        <!-- Field wrapper end -->

                    </div>
                    <h4>Personal Contact Details</h4>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        
                        <!-- Field wrapper start -->
                        <div class="field-wrapper">
                            <input type="text" class="form-control" name="spersonal_name" required>
                            <div class="field-placeholder">personal_name</div>
                           
                        </div>
                        <!-- Field wrapper end -->

                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        
                        <!-- Field wrapper start -->
                        <div class="field-wrapper">
                            <input type="text" class="form-control" name="personal_email" required>
                            <div class="field-placeholder">personal_email</div>
                           
                        </div>
                        <!-- Field wrapper end -->

                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        
                        <!-- Field wrapper start -->
                        <div class="field-wrapper">
                            <input type="text" class="form-control" name="number" required>
                            <div class="field-placeholder">number</div>
                           
                        </div>
                        <!-- Field wrapper end -->

                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        
                        <!-- Field wrapper start -->
                        <div class="field-wrapper">
                            <input type="text" class="form-control" name="relationship" required>
                            <div class="field-placeholder">Relationship</div>
                           
                        </div>
                        <!-- Field wrapper end -->

                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit Form</button>
                    </div>
                </div>
                <!-- Row end -->
            </form>

        </div>
    </div>
    <!-- Card end -->
</div>
    
</div>
<!-- Content wrapper end -->

</div>
<!-- Content wrapper scroll end -->

@endsection