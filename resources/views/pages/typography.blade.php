@extends('layouts.app', ['activePage' => 'typography', 'titlePage' => __('Typography')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">Send Mail</h4>
      </div>
      <div class="card-body">
        <div class="row col-12">
          <form class="contact-form" action="/listings/uploadhouse" id="uploadhouse" enctype="multipart/form-data" method="POST">
            <div class="row">
              <div class="col-md-6">
                <input type="text" placeholder="Subject">
              </div>
              <div class="col-md-12">
                <textarea placeholder="Content"></textarea>
              <!-- </div>
              <div class="col-md-6">
                <input type="file" name="images[]" multiple id="">
              </div> -->
            </div>
        </div>
        <button class="btn site-btn" type="submit">Upload</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection