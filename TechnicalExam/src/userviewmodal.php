<!-- User View Modal -->
<div class="modal fade " id="viewUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">User Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="updateFormUser">
      <div class="modal-body">
      <div class="container mt-5 mb-3">
   <div class="row">
    <div class="col-4">
        <div class="card p-4">
            <div class="card-body">
                <div class="text-center mt-5">
                    <svg style="width:80%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M406.5 399.6C387.4 352.9 341.5 320 288 320H224c-53.5 0-99.4 32.9-118.5 79.6C69.9 362.2 48 311.7 48 256C48 141.1 141.1 48 256 48s208 93.1 208 208c0 55.7-21.9 106.2-57.5 143.6zm-40.1 32.7C334.4 452.4 296.6 464 256 464s-78.4-11.6-110.5-31.7c7.3-36.7 39.7-64.3 78.5-64.3h64c38.8 0 71.2 27.6 78.5 64.3zM256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-272a40 40 0 1 1 0-80 40 40 0 1 1 0 80zm-88-40a88 88 0 1 0 176 0 88 88 0 1 0 -176 0z"/>
                    </svg>
                </div>
                <h5 class="card-title text-center mt-2 forfullname">
                     <!-- fullname here -->
                </h5>
                <h6 class="card-subtitle mb-2 text-muted text-center fordepartmentname">
                    <!-- department name here -->
                </h6>
                <h6 class="card-subtitle mb-2 text-muted text-center forgender">
                    <!-- gender here -->
                </h6>
                <div class="text-center">
                    <span class="badge bg-primary forrole">
                        <!-- role here -->
                    </span>
                    <span class="badge status">
                        <!-- role here -->
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-8">
        <div class="card p-4">
                <div class="card-body">
                    <div class="updateData">
                    <div class="row">
                        <div class="col-12"><h3 class="card-title">Basic Information</h3></div>
                    </div>
                    <hr>
                    <div class="row p-2">
                        <div class="col-5">First Name:</div>
                        <div class="col fname">
                            <!-- name here -->
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-5">Last Name:</div>
                        <div class="col mname">
                            <!-- lastname here -->
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-5">Middle Name:</div>
                        <div class="col lname">
                            <!-- middle name here -->
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-5">Birthdate:</div>
                        <div class="col bdate">
                            <!-- birthdate -->
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-5">Address:</div>
                        <div class="col address">
                            <!-- address -->
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-5">SSS Number:</div>
                        <div class="col sss">
                            <!-- sss -->
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-5">TIN:</div>
                        <div class="col tin"> </div>
                        <!-- TIN -->
                    </div>
                    <div class="row p-2">
                        <div class="col-5">Philhealth Number:</div>
                        <div class="col philhealth">
                            <!-- philhealth -->
                        </div>
                    </div>
</div>
                </div>
                
            </div>
        </div>
   </div>
</div>
</div>
      <div class="modal-footer">
        <div class="updatepart">
            <button type="button" class="btn btn-warning updateuserbtn">Update</button>
        </div>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
</form>
  </div>
</div>