
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>wahh</title>
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

            <div  style="padding-top: 100px">
                <table class="table table-info table-striped" >
                    <thead>
                    <?php  $count = 1; ?>
                    <tr style="text-align: center">
                        <th scope="col">#</th>
                        <th scope="col" >Doctor Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">speciality</th>
                        <th scope="col">room</th>
                        <th scope="col">image</th>
                        <th scope="col">action</th>


                    </tr>
                    </thead>

                        <tbody>

                        @foreach($doctors as $dctr)

                        <tr style="text-align: center">
                            <th scope="row">{{$count++}}</th>

                            <td>{{$dctr->d_name}}</td>
                            <td>{{$dctr->p_number}}</td>
                            <td>{{$dctr->speciality}}</td>
                            <td>{{$dctr->room}}</td>
                            <td>
                                <img src="ekhaneipicGula/{{$dctr->file}}">
                            </td>
                            <td>
                                <a class="btn btn-info" href="{{route('update.doctor',$dctr->id)}}">update</a>
                                <a onclick="return confirm('are you sure to delete this?')" class="btn btn-danger" href="{{route('delete.doctor', $dctr->id)}}">delete</a>
                            </td>



                        </tr>

                        @endforeach


                        </tbody>

                </table>
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
