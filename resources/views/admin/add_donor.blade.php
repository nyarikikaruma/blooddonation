
<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
    label
    {
        display: inline-block;
        width: 200px;
    }
    </style>

    @include('admin.css')
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
      @include('admin.navbar')
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">

        
        
        <div class="container" align="center" style="padding-top:100px;">
        
        @if(session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
            &times;
        </button>  
        {{ session()->get('message') }}
    </div>
@endif



        <form action="{{url('upload_donor')}}" method="POST" enctype="multipart/form-data">

        @csrf
        <div style="padding:15px;">
        <label>Donor Name </label>
        <input type="text" style="color:black" name="name" placeholder="Write the name" required> 
        </div> 

        <div style="padding:15px;">
        <label>Phone Number </label>
        <input type="text" style="color:black" name="number" placeholder="Type phone number" required>
        </div> 

        <div style="padding:15px;">
        <label>Place </label>
        <input type="text" style="color:black" name="place" placeholder="Place" required>
        </div>

        <div style="padding:15px;">
        <label>Blood group </label>
        <select name="blood_group" style="color:black; width:200px;" required>
        <option>--Select--</option>
        <option value="A Positive">A Positive</option>
        <option value="A Negative">A Negative</option>
        <!-- <option>A Unknown</option> -->
        <option value="B Positive">B Positive</option>
        <option value="B Negative">B Negative</option>
        <!-- <option>B Unknown</option> -->
        <option value="AB Positive">AB Positive</option>
        <option value="AB Negative">AB Negative</option>
        <!-- <option>AB Unknown</option> -->
        <option value="O Positive">O Positive</option>
        <option value="O Negative">O Negative</option>
        <!-- <option>O Unknown</option>
        <option>Unknown</option> -->
        </select>     

        <div style="padding:15px;">
        <label>Photo </label>
        <input type="file" name="file" required>
        </div>

        <div style="padding:15px;">
        
        <input type="submit" class="btn btn-success">
        </div>

        </div>

        </form>
        </div>


        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>