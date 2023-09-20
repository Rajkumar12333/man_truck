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

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">truck_id</label>
                  <div class="col-sm-10">
                    <input type="text" id="truck_id" name="truck_id" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Chassis_4x2</label>
                  <div class="col-sm-10">
                    <input type="text" id="chassis_4x2" name="chassis_4x2" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Chassis_4x4</label>
                  <div class="col-sm-10">
                    <input type="text" id="chassis_4x4" name="chassis_4x4" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Chassis_6x2_minus</label>
                  <div class="col-sm-10">
                    <input type="text" id="chassis_6x2_minus" name="chassis_6x2_minus" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">chassis_6x2</label>
                  <div class="col-sm-10">
                    <input type="text" id="chassis_6x2" name="chassis_6x2" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">chassis_6x4</label>
                  <div class="col-sm-10">
                    <input type="text" id="chassis_6x4" name="chassis_6x4" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">chassis_6x6</label>
                  <div class="col-sm-10">
                    <input type="text" id="chassis_6x6" name="chassis_6x6" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">chassis_8x4_slash_8x4</label>
                  <div class="col-sm-10">
                    <input type="text" id="chassis_8x4_slash_8x4" name="chassis_8x4_slash_8x4" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">chassis_8x8</label>
                  <div class="col-sm-10">
                    <input type="text" id="chassis_8x8" name="chassis_8x8" class="form-control">
                  </div>
                </div>
                


                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">engine_series_d2676</label>
                  <div class="col-sm-10">
                    <input type="text" id="engine_series_d2676" name="engine_series_d2676" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">engine_series_d2066</label>
                  <div class="col-sm-10">
                    <input type="text" id="engine_series_d2066" name="engine_series_d2066" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">external_length</label>
                  <div class="col-sm-10">
                    <input type="text" id="external_length" name="external_length" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">external_width</label>
                  <div class="col-sm-10">
                    <input type="text" id="external_width" name="external_width" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">interior_length</label>
                  <div class="col-sm-10">
                    <input type="text" id="interior_length" name="interior_length" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">engine_tunnel_height</label>
                  <div class="col-sm-10">
                    <input type="text" id="engine_tunnel_height" name="engine_tunnel_height" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">standing_height_on_engine_tunnel</label>
                  <div class="col-sm-10">
                    <input type="text" id="standing_height_on_engine_tunnel" name="standing_height_on_engine_tunnel" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">seat_quantity</label>
                  <div class="col-sm-10">
                    <input type="text" id="seat_quantity" name="seat_quantity" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">standing_height_in_front_of_codriver_seat</label>
                  <div class="col-sm-10">
                    <input type="text" id="standing_height_in_front_of_codriver_seat" name="standing_height_in_front_of_codriver_seat" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">bed_quantity</label>
                  <div class="col-sm-10">
                    <input type="text" id="bed_quantity" name="bed_quantity" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">lower_bed_length</label>
                  <div class="col-sm-10">
                    <input type="text" id="lower_bed_length" name="lower_bed_length" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">maximum_lower_bed_width</label>
                  <div class="col-sm-10">
                    <input type="text" id="maximum_lower_bed_width" name="maximum_lower_bed_width" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">lower_bed_width_behind_seats</label>
                  <div class="col-sm-10">
                    <input type="text" id="lower_bed_width_behind_seats" name="lower_bed_width_behind_seats" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">height_above_lower_bed</label>
                  <div class="col-sm-10">
                    <input type="text" id="height_above_lower_bed" name="height_above_lower_bed" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">upper_bed_length</label>
                  <div class="col-sm-10">
                    <input type="text" id="upper_bed_length" name="upper_bed_length" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">upper_bed_width</label>
                  <div class="col-sm-10">
                    <input type="text" id="upper_bed_width" name="upper_bed_width" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">height_above_upper_bed</label>
                  <div class="col-sm-10">
                    <input type="text" id="height_above_upper_bed" name="height_above_upper_bed" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">roof_storage_compartments</label>
                  <div class="col-sm-10">
                    <input type="text" id="roof_storage_compartments" name="roof_storage_compartments" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">roof_luggage_rack</label>
                  <div class="col-sm-10">
                    <input type="text" id="roof_luggage_rack" name="roof_luggage_rack" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">rear_left_storage_box</label>
                  <div class="col-sm-10">
                    <input type="text" id="rear_left_storage_box" name="rear_left_storage_box" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">rear_right_storage_box</label>
                  <div class="col-sm-10">
                    <input type="text" id="rear_right_storage_box" name="rear_right_storage_box" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">central_storage_space_below_bed</label>
                  <div class="col-sm-10">
                    <input type="text" id="central_storage_space_below_bed" name="central_storage_space_below_bed" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">standard_longhaul_transport</label>
                  <div class="col-sm-10">
                    <input type="text" id="standard_longhaul_transport" name="standard_longhaul_transport" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">longdistance_transport_payload</label>
                  <div class="col-sm-10">
                    <input type="text" id="longdistance_transport_payload" name="longdistance_transport_payload" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">traction_construction_site</label>
                  <div class="col-sm-10">
                    <input type="text" id="traction_construction_site" name="traction_construction_site" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">distribution_transport</label>
                  <div class="col-sm-10">
                    <input type="text" id="distribution_transport" name="distribution_transport" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">municipal</label>
                  <div class="col-sm-10">
                    <input type="text" id="municipal" name="municipal" class="form-control">
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
                    <th scope="col">Truck id</th>
                    <th scope="col">Chassis 4x2</th>
                    <th scope="col">Chassis 4x4</th>
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
                    <td><?php echo $trucksval->truck_id; ?></td>
                    <td><?php echo $trucksval->chassis_4x2; ?></td>
                    <td><?php echo $trucksval->chassis_4x4; ?></td>
                    <!-- <td><img src="{{ asset($trucksval->image) }}" width="100px" height="100px" alt="Truck Image"></td> -->
                    <td><button class="edit-button" data-truck-id="{{ $trucksval->id }}" data-truck_id="{{ $trucksval->truck_id }}" data-truck-chassis_4x2="{{ $trucksval->chassis_4x2 }}" data-truck-chassis_4x4="{{ $trucksval->chassis_4x4 }}" data-truck-chassis_6x2_minus="{{ $trucksval->chassis_6x2_minus }}" data-chassis_6x2="{{ $trucksval->chassis_6x2 }}" data-chassis_6x6="{{ $trucksval->chassis_6x6 }}" data-chassis_4x2-name="{{ $trucksval->chassis_4x2 }}" data-chassis_4x2-name="{{ $trucksval->chassis_4x2 }}"data-chassis_4x2-name="{{ $trucksval->chassis_4x2 }}" data-chassis_4x2-name="{{ $trucksval->chassis_4x2 }}" data-chassis_4x2-name="{{ $trucksval->chassis_4x2 }}" data-chassis_4x2-name="{{ $trucksval->chassis_4x2 }}" data-chassis_4x2-name="{{ $trucksval->chassis_4x2 }}" data-chassis_4x2-name="{{ $trucksval->chassis_4x2 }}"data-chassis_4x2-name="{{ $trucksval->chassis_4x2 }}" data-chassis_4x2-name="{{ $trucksval->chassis_4x2 }}" data-chassis_4x2-name="{{ $trucksval->chassis_4x2 }}" data-chassis_4x2-name="{{ $trucksval->chassis_4x2 }}" data-chassis_4x2-name="{{ $trucksval->chassis_4x2 }}" data-chassis_4x2-name="{{ $trucksval->chassis_4x2 }}" data-chassis_4x2-name="{{ $trucksval->chassis_4x2 }}" data-chassis_4x2-name="{{ $trucksval->chassis_4x2 }}" data-chassis_4x2-name="{{ $trucksval->chassis_4x2 }}" data-chassis_4x2-name="{{ $trucksval->chassis_4x2 }}" data-chassis_4x2-name="{{ $trucksval->chassis_4x2 }}" data-chassis_4x2-name="{{ $trucksval->chassis_4x2 }}" data-chassis_4x2-name="{{ $trucksval->chassis_4x2 }}" data-chassis_4x2-name="{{ $trucksval->chassis_4x2 }}" data-chassis_4x2-name="{{ $trucksval->chassis_4x2 }}" data-chassis_4x2-name="{{ $trucksval->chassis_4x2 }}" data-chassis_4x2-name="{{ $trucksval->chassis_4x2 }}" data-chassis_4x2-name="{{ $trucksval->chassis_4x2 }}" data-chassis_4x2-name="{{ $trucksval->chassis_4x2 }}" data-chassis_4x2-name="{{ $trucksval->chassis_4x2 }}">Edit</button></td>
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
    // $("#truck_models").submit(function(e) {
    //     e.preventDefault();
    //     const fd = new FormData(this);
       
    //     // $("#truck_models_btn").text('Images are uploading...');
    //     $.ajax({
    //       url: '{{ route('truck-spec-store') }}',
    //       method: 'post',
    //       data: fd,
    //       cache: false,
    //       contentType: false,
    //       processData: false,
    //       dataType: 'json',
    //       success: function(response) { alert("hello")
    //         if (response.status == 200) {
    //           Swal.fire(
    //             'Added!',
    //             'Hotel Added Successfully!',
    //             'success'
    //           )
              
    //         }
    //         $("#truck_models_btn").text('Add Hotel');
    //         $("#truck_models")[0].reset();
    //         setTimeout(function() {
    //             $("#truck_models").load();
    //         }, 1000);
    //       }
    //     });
    //   });
    $("#truck_models").submit(function (e) {
  e.preventDefault();
  const fd = new FormData(this);

  $.ajax({
    url: '/truck-spec-store', // Update with the actual URL
    method: 'post',
    data: fd,
    cache: false,
    contentType: false,
    processData: false,
    dataType: 'json',
    success: function (response) {
      if (response.status == 200) {
        alert('Truck Added Successfully!'); // Use alert for testing
      }
      $("#truck_models")[0].reset();
      setTimeout(function () {
        // Reload or update the page content as needed
        // $("#truck_models").load(); // You might need to replace this with the correct logic
      }, 1000);
    },
  });
});

      $(document).ready(function() {
    $(".edit-button").click(function(e) {
        e.preventDefault();
        
        // Get truck data from data attributes
        var Id = $(this).data('truck-id');
        var truckId = $(this).data('truck-truck_id');
        var chassis_4x2 = $(this).data('truck-chassis_4x2');
        var chassis_4x4 = $(this).data('truck-chassis_4x4');
        var chassis_6x2_minus = $(this).data('truck-chassis_6x2_minus');
        var chassis_6x2 = $(this).data('truck-chassis_6x2');
        var chassis_6x6 = $(this).data('truck-chassis_6x6');
        var chassis_8x4 = $(this).data('truck-chassis_8x4');
        var chassis_8x4_slash_8x4 = $(this).data('truck-chassis_8x4_slash_8x4');
        var chassis_8x8 = $(this).data('truck-chassis_8x8');
        var engine_series_d2676 = $(this).data('truck-engine_series_d2676');
        var engine_series_d2066 = $(this).data('truck-engine_series_d2066');
        var external_length = $(this).data('truck-external_length');
        var external_width = $(this).data('truck-external_width');
        var interior_length = $(this).data('truck-interior_length');
        var engine_tunnel_height = $(this).data('truck-engine_tunnel_height');
        var standing_height_on_engine_tunnel = $(this).data('truck-standing_height_on_engine_tunnel');
        var seat_quantity = $(this).data('truck-seat_quantity');
        var standing_height_in_front_of_codriver_seat = $(this).data('truck-standing_height_in_front_of_codriver_seat');
        var bed_quantity = $(this).data('truck-bed_quantity');
        var lower_bed_length = $(this).data('truck-lower_bed_length');
        var maximum_lower_bed_width = $(this).data('truck-maximum_lower_bed_width');
        var lower_bed_width_behind_seats = $(this).data('truck-lower_bed_width_behind_seats');
        var height_above_lower_bed = $(this).data('truck-height_above_lower_bed');
        var upper_bed_length = $(this).data('truck-upper_bed_length');
        var upper_bed_width = $(this).data('truck-upper_bed_width');
        var height_above_upper_bed = $(this).data('truck-height_above_upper_bed');
        var roof_storage_compartments = $(this).data('truck-roof_storage_compartments');
        var roof_luggage_rack = $(this).data('truck-chassroof_luggage_rackis_4x2');
        var rear_left_storage_box = $(this).data('truck-rear_left_storage_box');
        var rear_right_storage_box = $(this).data('truck-rear_right_storage_box');
        var central_storage_space_below_bed = $(this).data('truck-central_storage_space_below_bed');
        var standard_longhaul_transport = $(this).data('truck-standard_longhaul_transport');
        var longdistance_transport_payload = $(this).data('truck-longdistance_transport_payload');
        var traction_construction_site = $(this).data('truck-traction_construction_site');
        var distribution_transport = $(this).data('truck-distribution_transport');
        var municipal = $(this).data('truck-municipal');
        
        
        // Populate text inputs with truck data
        $("#id").val(Id);
        $("#truck_id").val(truckId);
        $("#chassis_4x2").val(chassis_4x2);
        $("#chassis_4x4").val(chassis_4x4);
        $("#chassis_6x2_minus").val(chassis_6x2_minus);
        $("#chassis_6x2").val(chassis_6x2);
        $("#chassis_6x4").val(chassis_6x4);
        $("#chassis_6x6").val(chassis_6x6);
        $("#chassis_8x4").val(chassis_8x4);
        $("#chassis_8x4_slash_8x4").val(chassis_8x4_slash_8x4);
        $("#chassis_8x8").val(chassis_8x8);
        $("#engine_series_d2676").val(engine_series_d2676);
        $("#engine_series_d2066").val(engine_series_d2066);
        $("#external_length").val(external_length);
        $("#external_width").val(external_width);
        $("#interior_length").val(interior_length);
        $("#engine_tunnel_height").val(engine_tunnel_height);
        $("#standing_height_on_engine_tunnel").val(standing_height_on_engine_tunnel);
        $("#seat_quantity").val(seat_quantity);
        $("#standing_height_in_front_of_codriver_seat").val(standing_height_in_front_of_codriver_seat);
        $("#bed_quantity").val(bed_quantity);
        $("#lower_bed_length").val(lower_bed_length);
        $("#maximum_lower_bed_width").val(maximum_lower_bed_width);
        $("#lower_bed_width_behind_seats").val(lower_bed_width_behind_seats);
        $("#height_above_lower_bed").val(height_above_lower_bed);
        $("#upper_bed_length").val(upper_bed_length);
        $("#upper_bed_width").val(upper_bed_width);
        $("#height_above_upper_bed").val(height_above_upper_bed);
        $("#roof_storage_compartments").val(roof_storage_compartments);
        $("#roof_luggage_rack").val(roof_luggage_rack);
        $("#rear_left_storage_box").val(rear_left_storage_box);
        $("#rear_right_storage_box").val(rear_right_storage_box);
        $("#central_storage_space_below_bed").val(central_storage_space_below_bed);
        $("#standard_longhaul_transport").val(standard_longhaul_transport);
        $("#longdistance_transport_payload").val(longdistance_transport_payload);
        $("#traction_construction_site").val(traction_construction_site);
        $("#distribution_transport").val(distribution_transport);
        $("#municipal").val(municipal);
        
        
        // Now, you can edit the truck data in the input fields
    });
});




      </script>
@endsection
