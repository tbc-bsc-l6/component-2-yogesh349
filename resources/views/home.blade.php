@extends('layout.layout')
@section('title','Home')

@section('carousel')
{{-- <div
id="carouselExampleIndicators"
class="carousel slide mb-5"
data-bs-ride="carousel"
>
<div class="carousel-indicators">
    <button
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide-to="0"
        class="active"
        aria-current="true"
        aria-label="Slide 1"
    ></button>
    <button
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide-to="1"
        aria-label="Slide 2"
    ></button>
    <button
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide-to="2"
        aria-label="Slide 3"
    ></button>
</div>
<div class="carousel-inner">
    <div class="carousel-item active">
        <img
            src="images/game1.jpg"
            class="d-block w-100"
            alt="..."
            height="700px"
        />
    </div>
    <div class="carousel-item">
        <img
            src="images/carausel2.jpg"
            class="d-block w-100"
            alt="..."
        />
    </div>
    <div class="carousel-item">
        <img
            src="images/carasoul1.jpg"
            class="d-block w-100"
            alt="..."
        />
    </div>
</div>
<button
    class="carousel-control-prev"
    type="button"
    data-bs-target="#carouselExampleIndicators"
    data-bs-slide="prev"
>
    <span
        class="carousel-control-prev-icon"
        aria-hidden="true"
    ></span>
    <span class="visually-hidden">Previous</span>
</button>
<button
    class="carousel-control-next"
    type="button"
    data-bs-target="#carouselExampleIndicators"
    data-bs-slide="next"
>
    <span
        class="carousel-control-next-icon"
        aria-hidden="true"
    ></span>
    <span class="visually-hidden">Next</span>
</button>
</div> --}}

{{--  --}}

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/game1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/caraousel.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="..." alt="Third slide">
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
@endsection

@section('best-deal')
<div class="deal">
    <h2 class="text-center mt-2">Best Deals</h2>
    <div class="deal-items">
        <div class="bestdeal">
            <p class="pDeals">Best Deal</p>
            <img
                src="images/bestdeals.jpg"
                width="200px"
                height="170px"
                alt=""
            />
            <p class="b-text">Burger</p>
            <p class="price">Rs 300</p>
            <button class="btnDeal">Add To Cart</button>
        </div>
        <div class="bestdeal">
            <p class="pDeals">Best Deal</p>
            <img
                src="images/bestdeals1.jpg"
                width="200px"
                height="170px"
                alt=""
            />
            <p class="b-text">Burger</p>
            <p class="price">Rs 300</p>
            <button class="btnDeal">Add To Cart</button>
        </div>
        <div class="bestdeal">
            <p class="pDeals">Best Deal</p>
            <img
                src="images/bestdeals2.jpg"
                width="200px"
                height="170px"
                alt=""
            />
            <p class="b-text">Burger</p>
            <p class="price">Rs 300</p>
            <button class="btnDeal">Add To Cart</button>
        </div>
        <div class="bestdeal">
            <p class="pDeals">Best Deal</p>
            <img
                src="images/bestdeals3.jpg"
                width="200px"
                height="170px"
                alt=""
            />
            <p class="b-text">Burger</p>
            <p class="price">Rs 300</p>
            <button class="btnDeal">Add To Cart</button>
        </div>
        <div class="bestdeal">
            <p class="pDeals">Best Deal</p>
            <img
                src="images/bestdeals4.jpg"
                width="200px"
                height="170px"
                alt=""
            />
            <p class="b-text">Burger</p>
            <p class="price">Rs 300</p>
            <button class="btnDeal">Add To Cart</button>
        </div>
    </div>
</div>
    
@endsection



@section('map')
<div class="container-fluid text-center google-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7066.086843631871!2d85.33098309999998!3d27.68505279999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1640177101564!5m2!1sen!2snp" width="1100" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>


    
@endsection
