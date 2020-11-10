@extends('layouts.app', ['activePage' => 'map', 'titlePage' => __('Map')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">Upload Blog</h4>
      </div>
      <div class="card-body">
        <div class="row col-12">
          <form class="contact-form" action="/uploadblog/upload" id="uploadblog" enctype="multipart/form-data" method="POST">
          {{ csrf_field() }} 
          <div class="row">
              <div class="col-md-6">
                <input type="text" name="title" placeholder="Title">
              </div>
              <div class="col-md-6">
                <input type="text" name="author" placeholder="Author">
              </div>
              <div class="col-md-6">
                <input name="tags" type="text" placeholder="Tags">
              </div>
              <div class="col-md-12">
                <textarea name="content" placeholder="Blog Content"></textarea>
              </div>
              <div class="col-md-6">
                <input type="file" name="image" id="">
              </div>
            </div>
        </div>
        <button name="name" class="btn site-btn" type="submit">Upload</button>
        </form>
      </div>

    </div>
  </div>
</div>
</div>
@endsection

@push('js')
<script>
  $(document).ready(function() {
    // Javascript method's body can be found in assets/js/demos.js
    demo.initGoogleMaps();
  });
</script>
<!-- <script>
  var form = document.getElementById('listings/uploadhouse');
  var request = new XMLHttpRequest();

  form.addEventListener('submit', function(e) {
    e.preventDefault();
    var formdata = new FormData(form);

    request.open('post', 'listings/uploadhouse');
    request.addEventListener("load", transferComplete);
    request.send(formdata);
  });

  function transferComplete(data) {
    console.log(data.currentTarget.response);
  }
</script> -->
@endpush