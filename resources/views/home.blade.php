@extends('layout.main')
@section('container')
<div id="carouselExampleIndicators" class="carousel slide border border-dark" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 img-fluid" src="img/carousel1.png" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
            <h3>Your Local Zoo!</h3>
            <h4>Planet zoo is the best zoo in town.</h4>
          </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 img-fluid" src="img/carousel2.png" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
            <h3>Hurry, the animals are waiting!</h3>
            <h4>Wide variety of Animals from different habitats to feast your eyes upon.</h4> 
          </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 img-fluid" src="img/carousel3.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
            <h3>Cheap & Affordable</h3>
            <h4>Price of tickets are sold at a huge discount</h4>
          </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <section class="container-fluid mt-5">
   <div class="container-fluid mt-5">
    <div class="row">
      <div class="col-12 col-lg-5">
       <img src="img/image.jpg" class= "img-thumbnail">
      </div>
      <div class="col-12 col-lg-6 mt-4">
        <h1 class="text-danger text-center">The Importance of Habitats</h1>
        <h4 class="text-dark">First of all, before introducing viewers/visitors to our website, we would like to inform viewers/visitors to the importance of Habitats. Habitats are like life and death to an animal. Every year animals are losing their habitats due to the ignorance of mankind. By publishing this website, we want our visitors to have the utmost knowledge and fun when visiting our zoo.</h4>

         <h4 class="text-dark mt-4">Our zoos provide animals from a variety of habitats, each treated with the very best service. Animals in our zoo are being fed 3 times a day, without exception of any animals being left out. Our website also provides specific sections for visitors to have prior knowledge of Habitats than animals live in and also regarding specific information regarding a particular animal. So what are you waiting for? Visit our zoo now!</h4>
         <h2 class="display-6 mt-5"><b>Follow Us</b></h2>
         <div class="d-flex mt-3">
         <a href="#"><img src="img/facebook.png" class="img-fluid me-4"></a>
          <a href="#"><img src="img/youtube.png" class="img-fluid me-4"></a>
          <a href="#"><img src="img/twitter.png" class="img-fluid me-4"></a>
         </div>
    </div>
   </div>


   <div class="container-fluid mt-5">
    <div class="row">
      <div class="col-12 col-lg-7 mt-4">
        <h1 class="text-danger text-center">Tickets are Affordable and Cheap</h1>
        <h4 class="text-dark">We provide tickets that are affordable and cheap. Hence people will not be reserved when going to our zoo, since we prioritize customer satisfaction and also happiness. If we had sold our tickets at a hard price, then people will disregard animals and also miss out on the fun.</h4>

         <h4 class="text-dark mt-4">Like we had said on the previous section, we want people to be aware of animals and also their habitats. Therefore, we do not lose out on anything if we sold our tickets at such a cheap price. Here in Zoo Planet, people can visit our zoo for only $4 for adults, $2 for elders, and free of charge for childrens below the age of 15 years old. Hence, don't feel reserved and visit our zoo ASAP!</h4>

         <h4 class="text-dark mt-4">Like we had said on the previous section, we want people to be aware of animals and also their habitats. Therefore, we do not lose out on anything if we sold our tickets at such a cheap price. Here in Zoo Planet, people can visit our zoo for only $4 for adults, $2 for elders, and free of charge for childrens below the age of 15 years old. Hence, don't feel reserved and visit our zoo ASAP!</h4>
         
    </div>
      <div class="col-12 col-lg-5">
       <img src="img/ticket.jpg" class= "img-thumbnail">
      </div>
   </div>


   <div class="row mt-5">
     <div class="col-12 text-center mt-5">
       <h2 class="display-5"><b>Types of Habitat</b></h2>
   </div>
  </div>


  

  <div class="row mb-5 rounded">
    @foreach($habitats as $habitat)
    <div class="col-12 col-lg-4 mt-5">
    <div class="p-3 text-center rounded-circle">
      <a href="/habitats/{{ $habitat->code }}" class="text-decoration-none text-light">
      <img src="https://source.unsplash.com/400x400?{{ $habitat->name}}" class="img-thumbnail img-fluid mb-3 rounded-circle">
      </a>
      <h3><a href="/habitats/{{ $habitat->code }}" class="text-decoration-none text-light">{{ $habitat->name }}</a></h3>
    </div>
    </div>
    @endforeach
  </div>


  </section>
@endsection