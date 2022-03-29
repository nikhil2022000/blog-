@extends('project.header_footer_file.main')
    @section('main-container')
								<!-- Card start -->
								<div class="card" style="margin-top: 90px;">
								@if(session()->has('message'))
									<div class="alert alert-success">
									{{ session()->get('message') }}
									</div>
								@endif
									<div class="card-body" style="text-align:center;">
                                        <h1>Import Excel sheet</h1>
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
											Import
										</button>

										<!-- Modal start -->
										<div class="modal fade" id="exampleModalLong" tabindex="-1" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
											<div class="modal-dialog">
											  <div class="modal-content">
												<div class="modal-header">
												  <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
												  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
                                                <form  method="post" enctype="multipart/form-data" action="/data"> 
												<div class="modal-body">
                                               
                                                        {{ csrf_field() }}
                                                            <input type="file" name="file">
                                                        
                                                        



                                                           
                                                    </div>
                                                  <div class="modal-footer">
												  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												  <button type="submit" class="btn btn-primary">submit</button>
												</div>
                                                </form>
											  </div>
											</div>
										  </div>
										<!-- Modal end -->

									</div>
								</div>
								<!-- Card end -->
                                @endsection