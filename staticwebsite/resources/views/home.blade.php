@extends('layout.app')

@section('title','Home')

@section('content')

<div class="container-fluid parallex mb-5">
  <div class="row d-flex justify-content-center">
    <div class="col-md-12 topDiv text-center">
      <h1 class="text-white">Software Engineer</h1>
      <h3 class="text-white">Mobile & Web</h3>
      <button class="btn btn-primary">Learn More!</button>
    </div>
  </div>
</div>

<div class="container text-center mb-5 mt-5">
  <h1>My Services</h1><br><br>
  <div class="row">
    <div class="col-md-4 p-1">
      <div class="card" style="width: 100%;">
        <img src="{{asset('images/laravel.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Service Name</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button class="btn btn-primary">Learn More!</button>
        </div>
      </div>
    </div>
    <div class="col-md-4 p-1">
      <div class="card" style="width: 100%;">
        <img src="{{asset('images/laravel.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Service Name</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button class="btn btn-primary">Learn More!</button>
        </div>
      </div>
    </div>
    <div class="col-md-4 p-1">
      <div class="card" style="width: 100%;">
        <img src="{{asset('images/laravel.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Service Name</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button class="btn btn-primary">Learn More!</button>
        </div>
      </div>
    </div>
    
  </div>
</div>

<div class="container text-center mt-5 mb-5">
  <h1>Recent Projects</h1><br><br>
  <div class="row">
    <div class="col-md-4 p-1">
      <div class="card" style="width: 100%;">
        <img src="{{asset('images/laravel.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Project Name</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 p-1">
      <div class="card" style="width: 100%;">
        <img src="{{asset('images/laravel.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Project Name</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 p-1">
      <div class="card" style="width: 100%;">
        <img src="{{asset('images/laravel.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Project Name</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    
  </div>
</div>

<div class="container text-center mb-5 mt-5">
<h1>Contact With Me</h1><br><br>
<div class="row">
  <div class="col-md-6">
    <form>
      <div class="form-group">
        <label for="exampleInputEmail1">Your Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Your Mobile</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Your Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Your Message</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <button type="submit" class="btn btn-block btn-primary">Send Now</button>
    </form>
  </div>
  <div class="col-md-6">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.7925727613224!2d90.36280881486165!3d23.790399693164154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0c6259bed95%3A0x55e9891981d6c50c!2sShapla%20House%20363%2FH%2F2%20North%20Pirerbag%2C%20363%2Fh%2F2%2C%20Abu%20Bakar%20Madrasah%20Rd%2C%20Dhaka%201216!5e0!3m2!1sen!2sbd!4v1652423844430!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>
</div>
@endsection