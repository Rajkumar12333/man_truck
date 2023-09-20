@extends('layouts.auth')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>All Models</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">All models</li>
        </ol>
      </nav>
    </div>
<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Truck Models</h5>

              <!-- General Form Elements -->
              <form method="POST" action="#" id="truck_models" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row mb-3" hidden>
                  <label for="inputText" class="col-sm-2 col-form-label">Id</label>
                  <div class="col-sm-10">
                    <input type="text" id="id" name="id" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                  <div class="col-sm-10">
                    <input type="text" id="name" name="name" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <input type="text" id="description" name="description" class="form-control">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Thumbnail Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="thumbnail" name="thumbnail" type="file" id="formFile">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Data Sheet</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="datasheet" name="datasheet" type="file" id="formFile">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Brochure</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="brochure" name="brochure" type="file" id="formFile">
                  </div>
                </div>
                

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" id="truck_models_btn" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
        </div>
</section>


    

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Listing Models</h5>
              
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Deascription</th>
                    <th scope="col">Image</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    
                  </tr>
                </thead>
                <tbody>
                @php
                $sno = 1;
                @endphp
                @foreach ($trucks as $trucksval)
                  <tr>
                    <th scope="row"><?php echo $sno; ?></th>
                    <td><?php echo $trucksval->name; ?></td>
                    <td><?php echo $trucksval->description; ?></td>
                    <td><img src="{{ asset($trucksval->image) }}" width="100px" height="100px" alt="Truck Image"></td>
                    <td><button class="edit-button" data-truck-id="{{ $trucksval->id }}" data-truck-name="{{ $trucksval->name }}" data-truck-description="{{ $trucksval->description }}">Edit</button></td>
                    <td><a href="{{ route('truck-delete', $trucksval->id) }}">Delete</a></td>
                    
                  </tr>
                  <?php $sno++; ?>
                  @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  
</main>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $("#truck_models").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#truck_models_btn").text('Images are uploading...');
        $.ajax({
          url: '{{ route('truck-store') }}',
          method: 'post',
          data: fd,
          cache: false,
          contentType: false,
          processData: false,
          dataType: 'json',
          success: function(response) {
            if (response.status == 200) {
              Swal.fire(
                'Added!',
                'Hotel Added Successfully!',
                'success'
              )
              
            }
            $("#truck_models_btn").text('Add Hotel');
            $("#truck_models")[0].reset();
            setTimeout(function() {
                $("#truck_models").load();
            }, 1000);
          }
        });
      });
      $(document).ready(function() {
    $(".edit-button").click(function(e) {
        e.preventDefault();
        
        // Get truck data from data attributes
        var truckId = $(this).data('truck-id');
        var truckName = $(this).data('truck-name');
        var truckDescription = $(this).data('truck-description');
        
        // Populate text inputs with truck data
        $("#id").val(truckId);
        $("#name").val(truckName);
        $("#description").val(truckDescription);
        
        // Now, you can edit the truck data in the input fields
    });
});




      </script>
@endsection
