@extends('layout.app')
@section('title','Services Page')

@section('content')
<section class="py-5">
    <div class="container">
    <div class="row">
        <div class="col-lg-4 my-2">
          <div class="card">
            <img src="{{asset('images/card.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Service One</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
        </div>
        <div class="col-lg-4 my-2">
          <div class="card">
            <img src="{{asset('images/card.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Service Two</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
        </div>
        <div class="col-lg-4 my-2">
          <div class="card">
            <img src="{{asset('images/card.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Service Three</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
        </div>
 
    </div>
</div>
</section>


<section class="py-5">
    <div class="container">
        <div class="row">
             <div class="col-lg-6">
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
            <div class="col-lg-6">
                <h5>Address </h5>
                <p>Brittikhalshibunia Batiaghata Khulna</p>
                <p>Brittikhalshibunia Batiaghata Khulna</p>
                <p>Brittikhalshibunia Batiaghata Khulna</p>
                <p>Brittikhalshibunia Batiaghata Khulna</p>
                <p>Brittikhalshibunia Batiaghata Khulna</p>
            </div>

           
        </div>
    </div>
</section>

@endsection('content')