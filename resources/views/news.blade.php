@extends('layouts.auth')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>All News</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">All News</li>
        </ol>
      </nav>
    </div>
<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">News List</h5>

              <!-- General Form Elements -->
              <form method="POST" action="#" id="news_list" enctype="multipart/form-data">
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
                    <input type="text" id="title" name="title" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <input type="text" id="description" name="description" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Content</label>
                  <div class="col-sm-10">
                    <!-- <input class="form-control" id="content" name="content" type="textarea" id="formFile"> -->
                    <textarea name="content" id="content"  class="form-control summernote" ></textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Thumbnail Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="thumbnail" name="thumbnail" type="file" id="formFile">
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" id="news_list_btn" class="btn btn-primary">Submit Form</button>
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
              <h5 class="card-title">News List</h5>
              
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    
                  </tr>
                </thead>
                <tbody>
                @php
                $sno = 1;
                @endphp
                @foreach ($news as $newsval)
                  <tr>
                    <th scope="row"><?php echo $sno; ?></th>
                    <td><?php echo $newsval->name; ?></td>
                    <td><?php echo $newsval->description; ?></td>
                    <td><img src="{{ asset($newsval->image) }}" width="100px" height="100px" alt="Truck Image"></td>
                    <td><button class="edit-button" data-news-id="{{ $newsval->id }}" data-news-name="{{ $newsval->name }}" data-news-description="{{ $newsval->description }}" data-news-content="{{ $newsval->content }}">Edit</button></td>
                     <td><a href="{{ route('news-delete', $newsval->id) }}">Delete</a></td>
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include the Summernote CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">

<!-- Include the Summernote JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>

          
<script type="text/javascript">
    $(document).ready(function() {
        $('#content').summernote({
            height: 300, // Adjust the height as needed
            // Other Summernote options can be configured here
        });
    });
    $("#news_list").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#news_list_btn").text('Images are uploading...');
        $.ajax({
          url: '{{ route('news-store') }}',
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
            $("#news_list_btn").text('Add Hotel');
            $("#news_list")[0].reset();
            setTimeout(function() {
                $("#news_list").load();
            }, 1000);
          }
        });
      });
      $(document).ready(function() {
    $(".edit-button").click(function(e) {
        e.preventDefault();
        
        // Get truck data from data attributes
        var newsId = $(this).data('news-id');
        var newsName = $(this).data('news-name');
        var newsDescription = $(this).data('news-description');
        var newsContent = $(this).data('news-content');
        
        // Populate text inputs with truck data
        $("#id").val(newsId);
        $("#name").val(newsName);
        $("#description").val(newsDescription);
        $("#content").val(newsContent);
        
        // Now, you can edit the truck data in the input fields
    });
});




      </script>
      
@endsection
