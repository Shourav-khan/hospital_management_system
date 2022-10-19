

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>wahh</title>
    <!-- plugins:css -->
    <base href="/public">
    @include('admin.link')
</head>
<body>
<div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
            <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                <div class="ps-lg-1">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="mb-0 font-weight-medium me-3 buy-now-text"></p>
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
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navigation')
        <!-- partial -->


        <div class="container-fluid page-body-wrapper d-flex justify-content-center " >

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="align-self-center" style="padding: 50px; border: 1px solid whitesmoke">
                <form action="{{route('update.done', $data->id)}}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label >Doctor Name</label>
                        <input type="text" name="d_name" class="form-control" style="color: black" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->d_name}}" >
                    </div>

                    <div class="form-group">
                        <label>Phone number</label>
                        <input type="number" name="p_number" class="form-control" style="color: black" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->p_number}}" >
                    </div>

                    <div class="form-group">
                        <label>Speciality</label>
                        <input type="text" name="speciality" class="form-control" style="color: black" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->speciality}}" >
                    </div>

                    <div class="form-group">
                        <label>Room</label>
                        <input type="number" name="room" class="form-control" style="color: black" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->room}}" >
                    </div>

                    <div class="form-group">
                        <label>Old Picture</label>
                         <img height="150" width="150" style="border-radius: 80%" src="ekhaneipicGula/{{$data->file}}">
                    </div>

                    <div>
                        <label>Change Image</label>
                        <br>
                       <input type="file" name="file">
                    </div>

                    <div class="d-flex justify-content-center" style="margin-top: 40px">

                        <input type="submit" class="btn-danger w-50 rounded">

                    </div>


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
