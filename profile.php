<?php include 'header.php'; ?>
<!--**********************************
            Sidebar end
        ***********************************-->

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="card-header">
            <h4 class="card-title">My Profile</h4>
        </div>


        <div class="row">

            <div class="col-md-3">
                <div class="card">
                    <div class="image-uploader" id="imageUploader">
                        <div class="image-container" id="imageContainer">
                            <div class="placeholder" id="placeholder">
                                Upload Photo
                            </div>
                            <img src="" alt="Uploaded profile" id="uploadedImage" style="display: none;">
                        </div>

                        <div class="upload-button" id="uploadButton">
                            Click to Upload
                        </div>

                        <input type="file" id="fileInput" accept="image/*" style="display: none;">
                    </div>

                    <p class="help-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="27"
                            viewBox="0 0 28 27" fill="none">
                            <path d="M9.79022 8.80734L14.1519 4.44678L18.5136 8.80734" stroke="white"
                                stroke-width="1.6616" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M14.152 16.0784V4.4502" stroke="white" stroke-width="1.6616" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M23.2907 16.0781V21.8937C23.2907 22.1141 23.2032 22.3254 23.0474 22.4812C22.8916 22.637 22.6803 22.7245 22.4599 22.7245H5.84392C5.62358 22.7245 5.41226 22.637 5.25646 22.4812C5.10065 22.3254 5.01312 22.1141 5.01312 21.8937V16.0781"
                                stroke="white" stroke-width="1.6616" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> Upload Photo </p>
                    <p class="info-text">Image size should be under 1MB and image ration needs to be 1:1</p>
                </div>


            </div>

            <div class="col-md-9">
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" placeholder="First name">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" placeholder="Last name">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" placeholder="Enter your username">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" placeholder="Email address">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Password</label>
                        <input type="text" class="form-control" placeholder="************">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Confirm Password</label>
                        <input type="text" class="form-control" placeholder="************">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-12">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" placeholder="Your title, profession or small biography">
                    </div>

                    <div class="mb-3 col-md-12">
                        <button type="submit" class=" btn-primary1 mb-2">Save changes</button>
                    </div>

                </div>

            </div>
        </div>



        <!-- <input type="file" id="uploadInput" accept="image/*" />
            <p>Image size should be under 1MB and image ration needs to be 1:1</p> -->

    </div>


</div>
<br>

</div>
</div>
<!--**********************************
            Content body end
        ***********************************-->

<!--**********************************
            Footer start
        ***********************************-->

<?php include 'footer.php'; ?>

