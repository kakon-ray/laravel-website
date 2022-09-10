@extends('layout.app')
@section('title','Home Page')

@section('content')
<div class="container-fluid parallax mb-5">
    <div class="row d-flex justify-content-center">
            <div class="col-md-4 topDiv text-center">
                <h1 class="text-white">Software Engineer</h1>
                <h3 class="text-white">Mobile & Web</h3>
                <button class="btn btn-primary">Learn More</button>
            </div>
    </div>
</div>


<div class="container text-center mb-5 mt-5">
    <h2>My Services</h2><br><br>
    <div class="row">
    <div class="col-md-4 p-1">
      <div class="card" style="width:100%">
        <img src="{{asset('images/card.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Service Name</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button class="btn btn-primary">Learn More</button>
            </div>
            </div>
      </div> 

      <div class="col-md-4 p-1">
      <div class="card" style="width:100%">
        <img src="{{asset('images/card.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Service Name</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button class="btn btn-primary">Learn More</button>
            </div>
            </div>
      </div> 

      <div class="col-md-4 p-1">
      <div class="card" style="width:100%">
        <img src="{{asset('images/card.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Service Name</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button class="btn btn-primary">Learn More</button>
            </div>
            </div>
      </div> 

    </div>
</div>



<div class="container text-center mb-5 mt-5">
    <h2>Recent Projects</h2><br><br>
    <div class="row">
    <div class="col-md-4 p-1">
      <div class="card" style="width:100%">
        <img src="{{asset('images/card.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Project Name</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
   
            </div>
            </div>
      </div> 

      <div class="col-md-4 p-1">
      <div class="card" style="width:100%">
        <img src="{{asset('images/card.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Project Name</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div>
      </div> 

      <div class="col-md-4 p-1">
      <div class="card" style="width:100%">
        <img src="{{asset('images/card.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Project Name</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
   
            </div>
            </div>
      </div> 

    </div>
</div>



<div class="container mb-5 mt-5">
<h2>Contact With Me</h2><br><br>
<div class="row">
    <div class="col-md-6">
          <div class="border p-3">
                     <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="email" class="form-control" placeholder="Enter Your Name">
                    </div>

                       <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Mobile Number</label>
                        <input type="email" class="form-control" placeholder="Enter Your Name">
                    </div>
                
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Enter Your Name">
                    </div>

                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Address</label>
                        <input type="email" class="form-control" placeholder="Enter Your Name">
                    </div>

                    <button type="submit" class="btn w-100 btn-primary ">Submit</button>
                </form>
          </div>
    </div>

    <div class="col-md-6">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.4194362316493!2d90.35059211429925!3d23.768073884580684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c09ed6266187%3A0x9e84a0fa9bdec67e!2sShekhertek%20Bazar!5e0!3m2!1sen!2sbd!4v1584730140192!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

</div>
</div>


@endsection()