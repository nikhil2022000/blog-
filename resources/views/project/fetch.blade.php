@extends('project.header_footer_file.main')
    @section('main-container')
<div class="content-wrapper-scroll">

					<!-- Content wrapper start -->
					<div class="content-wrapper">

						<!-- Row start -->
					    <div class="row gutters">
						    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                 <!-- Card start -->
                                 <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Basic Example</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="basicExample" class="table custom-table">
                                                <thead>
                                                    <tr>
                                                        <th>First_Name</th>
                                                        <th>List_Name</th>
                                                        <th>Email</th>
                                                        <th>phone</th>
                                                        <th>city</th>
                                                        <th>state</th>
                                                        <th>Address</th>
                                                        <th>Pincode</th>
                                                        <th>personal_name</th>
                                                        <th>personal_email</th>
                                                        <th>number</th>
                                                        <th>Relationship</th>
                                                        <!--<th>Delete</th>
                                                        <th>Edite</th>--->
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($data as $user)
                                                  <?php      
                                                    $data = $user->secondery_contact_details;
                                                    $send=json_decode($data);
                                                   //$personal= $data->spersonal_name;
                                                   
                                                  //echo"<pre>"; print_r($send); die;?>
                                                            <tr>
                                                                <td>{{ $user->id }}</td>
                                                                <td>{{ $user->first_name }}</td>
                                                                <td>{{ $user->last_name }}</td>
                                                                <td>{{ $user->email }}</td>
                                                                <td>{{ $user->phone }}</td>
                                                                <td>{{ $user->city }}</td>
                                                                <td>{{ $user->state }}</td>
                                                                <td>{{ $user->pincode }}</td>
                                                                <td>{{ $send->spersonal_name }}</td>
                                                                <td>{{ $send->personal_email }}</td>
                                                                <td>{{ $send->number }}</td>
                                                                <td>{{ $send->relationship }}</td>
                                                            
                                                              <!---  <td><a href="delete/{{  $user->id}}" class="btn btn-primary" role="button">Delete</a></td>
                                                                <td><a href="update/{{  $user->id}}" class="btn btn-primary" role="button">Update</a></td>-->
                                                            </tr>
                                                            @endforeach
                                              
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card end -->




            </div>
        </div>
    </div>
</div>
                  @endsection          