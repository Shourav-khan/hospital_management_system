
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->

    @include('admin.link')

</head>
<body>
<div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
            <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                <div class="ps-lg-1">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                        <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
                    <button id="bannerClose" class="btn border-0 p-0">
                        <i class="mdi mdi-close text-white me-0"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- partial:partials/_sidebar.html -->

    @include('admin.sidebar')
    <!-- partial -->

        <!-- partial:partials/_navbar.html -->
        @include('admin.navigation')
        <!-- partial -->


    <div class="container-fluid page-body-wrapper d-flex justify-content-center " >





        <div style="padding-top: 50px">

            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif

            <form action="{{route('store_doctor')}}" method="POST" enctype="multipart/form-data">

                @csrf

                    <div class="form-group">
                        <label for="exampleInputEmail1">Doctor Name</label>
                        <input type="text" name="d_name" class="form-control" style="color: white" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Doctor Name" required>
                    </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Phone number</label>
                    <input type="number" name="p_number" class="form-control" style="color: black" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone Number" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Doctor Specialist</label>

                    <select name="speciality" class="form-select" aria-label="Default select example" required>
                        <option selected>======Select=======</option>
                        <option value="Aurthopadic">Aurthopadic</option>
                        <option value="Skin">Skin</option>
                        <option value="Heart">Heart</option>
                        <option value="Medicine">Medicine</option>
                        <option value="Thelasemia">Thelasemia</option>
                        <option value="M.S">M.S</option>
                    </select>

                    </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Room Number</label>
                    <input type="number" name="room" class="form-control" style="color: black" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Room Number" required>
                </div>


                <div class="form-group">
                <label class="form-label" for="customFile">Select Image</label>
                <input type="file" name="file" style="color: white"  class="form-control" id="customFile" required>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>

            </form>

        </div>



        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
@include('admin.js')
<!-- End custom js for this page -->
</body>
</html>
