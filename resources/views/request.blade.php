@extends('layouts.mainapp')

@section('content')
<!-- Page Preloder -->
<!-- <div id="preloder">
    <div class="loader"></div>
</div> -->

@section('header')
@endsection
<!-- Header section -->
<!-- Header section end -->


<!-- Page top section -->
<section class="page-top-section set-bg" style="background-image: url(assets/img/page-top-bg.jpg);">
    <div class="container text-white">
        <h2>Request Property</h2>
    </div>
</section>
<!--  Page top end -->

<!-- Breadcrumb -->
<div class="site-breadcrumb">
    <div class="container">
        <a href="/"><i class="fa fa-home"></i>Home</a>
        <span><i class="fa fa-angle-right"></i>Request Property</span>
    </div>
</div>

<!-- page -->
<section class="page-section blog-page">
    <div class="container">

        <div class="row">
            <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info">
                    <span class="contact-info__icon"><img src="{{ url ('assets/img/logo.jpg') }}" alt=""></span>
                    <div class="media-body">
                        <h5>Phoenix Global Properties</h5>
                    </div>
                </div>

                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="fa fa-home"></i></span>
                    <div class="media-body">
                        <h5>5, Shiro Street,</h5>
                        <p>Fadeyi, Lagos</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="fa fa-home"></i></span>
                    <div class="media-body">
                        <h5>1, oba Yekini Elegushi street, Chisco</h5>
                        <p>Lekki, Lagos</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="fa fa-phone"></i></span>
                    <div class="media-body">
                        <h6>(+234) 802 497 4537</h6>
                        <h6>(+234) 809 606 8042</h6>
                        <p>Mon to Fri 9am to 6pm</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="fa fa-envelope"></i></span>
                    <div class="media-body">

                        <h5>info@propertyplace.com</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="contact-right">
                    <div class="section-title">
                        <h3>Request Property</h3>
                        <!-- <p>Browse houses and flats for sale and to rent in your area</p> -->
                    </div>
                    @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                    @endif
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form class="contact-form" action="/request/send" id="contact" method="POST">
                    @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" placeholder="Your name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" placeholder="Your email" required>
                            </div>
                            <div class="col-md-6">
                                <input type="number" name="number" placeholder="Phone number" required>
                            </div>
                            <div class="col-md-12">
                                <textarea placeholder="Your message" name="message" required></textarea>
                            </div>
                            <button class="btn site-btn" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page end -->

@endsection


@section('footer')
@endsection