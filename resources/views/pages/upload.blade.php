@extends('layouts.app', ['activePage' => 'map', 'titlePage' => __('Map')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">Upload House Features</h4>
      </div>
      <div class="card-body">
        <div class="row col-12">
          <form class="contact-form" action="/upload/uploadhouse" id="uploadhouse" enctype="multipart/form-data" method="POST">
          @csrf
          <div class="row">
              <div class="col-md-6">
                <input type="text" name="address" placeholder="Address" required>
              </div>
              <div class="col-md-6">
                <input type="text" name="city" placeholder="City" required>
              </div>
              <div class="col-md-6">
                <select name="bedrooms" class="search_form_select" required>
                  <option disabled="" selected="">Number of bedroom</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                </select>
              </div>
              <div class="col-md-6">
                <select name="bathrooms" class="search_form_select" required>
                  <option disabled="" selected="">Number of bathroom</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                </select>
              </div>
              <div class="col-md-6">
                <select name="rentsale" class="search_form_select" required>
                  <option disabled="" selected="">Rent/Sale</option>
                  <option>rent</option>
                  <option>sale</option>
                </select>
              </div>
              <div class="col-md-6">
                <select name="type" class="search_form_select" required>
                  <option disabled="" selected="">Type</option>
                  <option>commercial</option>
                  <option>residential</option>
                </select>
              </div>
              <div class="col-md-6">
                <input name="price" type="text" placeholder="Price" required>
              </div>
              <div class="col-md-6">
                <h5>Check only if property is sold</h5>
                <input type="checkbox" name="sold" id="sold">
              </div>
              <div class="col-md-12">
                <textarea name="description" placeholder="Description" required></textarea>
              </div>
              <div class="col-md-6">
                <input type="file" name="images[]" multiple id="" required>
              </div>
            </div>
        </div>
        <button class="btn site-btn" type="submit">Upload</button>
        </form>
      </div>

    </div>
  </div>
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title">Upload Land Features</h4>
    </div>
    <div class="card-body">
      <div class="row col-12">
        <form class="contact-form" action="/upload/uploadland" id="uploadland" enctype="multipart/form-data" method="POST">
          @csrf
          <div class="row">
            <div class="col-md-6">
              <input type="text" name="address" placeholder="Address" required>
            </div>
            <div class="col-md-6">
              <input type="text" name="city" placeholder="City" required>
            </div>
              <div class="col-md-6">
                <select name="leasesale" class="search_form_select" required>
                  <option disabled="" selected="">Lease/Sale</option>
                  <option>lease</option>
                  <option>sale</option>
                </select>
              </div>
              <div class="col-md-6">
                <select name="type" class="search_form_select" required>
                  <option disabled="" selected="">Type</option>
                  <option>commercial</option>
                  <option>residential</option>
                </select>
              </div>
            <div class="col-md-6">
              <input type="number" step="0.01" name="size" placeholder="Land size(sq.m)" required>
            </div>
            <div class="col-md-6">
              <input type="text" name="price" placeholder="Price" required>
            </div>
            <div class="col-md-6">
                <h5>Check only if property is sold</h5>
                <input type="checkbox" name="sold" id="sold">
              </div>
            <div class="col-md-12">
              <textarea name="description" placeholder="Description" required></textarea>
            </div>
            <div class="col-md-6">
              <input type="file" name="images[]" multiple id="" required>
            </div>
          </div>
      </div>
      <button class="btn site-btn" name="submit" type="submit">Upload</button>
      </form>
    </div>
  </div>
</div>
</div>

<script>
  $(function(){
    $("input[type='submit']").click(function(){
        var $fileUpload = $("input[type='file']");
        if (parseInt($fileUpload.get(0).files.length)>7){
         alert("You can only upload a maximum of 7 files");
        }
        else if(parseInt($fileUpload.get(0).files.length)<7){
          alert("You can only upload a miminum of 5 files");
        }
    });    
});​
</script>
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
<!-- <script>
  $(function() {

var // Define maximum number of files.
    max_file_number = 7,
    // Define your form id or class or just tag.
    $form = $('.contact-form'), 
    // Define your upload field class or id or tag.
    $file_upload = $('upload/uploadhouse', $form), 
    // Define your submit class or id or tag.
    $button = $('.btn', $form); 

// Disable submit button on page ready.
$button.prop('disabled', 'disabled');

$file_upload.on('change', function () {
  var number_of_images = $(this)[0].files.length;
  if (number_of_images > max_file_number) {
    alert(`You can upload maximum ${max_file_number} files.`);
    $(this).val('');
    $button.prop('disabled', 'disabled');
  } 
  else {
    $button.prop('disabled', false);
  }
});
});
</script> -->