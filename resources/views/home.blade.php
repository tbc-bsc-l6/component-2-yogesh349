@extends('layout.layout')
@section('title','Home')

@section('carousel')
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/game1.jpg" height="600px" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/caraousel.jpg" height="600px" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/carosol_cd.jpg" class="d-block w-100" height="600px" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
@endsection

@section('item-display')
<div class="container home_collec">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    @foreach ($concatenateAll as $game)
    <div class="col">
      <div class="card shadow-sm">
        <img src="storage/gfile/{{$game->images ?? 'cds_1641884761.jpg'}}" class="bd-placeholder-img card-img-top" width="100%" height="225"  role="img"img>
        <p class="text-center"><strong>{{$game->name}}</strong></p>

        <div class="card-body">
          <p class="card-text">{{$game->desc}}.</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <a class="btn btn-sm btn-outline-primary" href="{{route('show_pg',$game->id)}}">View</a>
            </div>
            <small class="text-muted">9 mins</small>
          </div>
        </div>
      </div>
    </div>   
    @endforeach






   

  </div>
</div>
<div class="mt-2"><a href="" style="text-decoration:none;float: right;margin-right:7em; ">SHOP MORE</a></div>
@endsection

@section('all_three_product_types')
<div class="home_collec">
  <div class="container mt-5 p-4">
    <div class="row featurette">
        <div class="col-md-7 home-color">
          <h2 class="featurette-heading ">First featurette heading.</h2>
          <p class="lead mt-5">Some great placeholder content for the first featurette here. Imagine some exciting prose here.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, distinctio. Consequuntur quo hic similique, atque vitae nobis repudiandae nesciunt vero tempore? Doloribus minus possimus sint cum quidem quasi laudantium quos.
          </p>
        </div>

        <div class="col-md-5">
          <img src="images/squid.png"  class="home-image"   alt="">
        </div>
      </div>


      <div class="row featurette home-margin">
        <div class="col-md-7 order-md-2 home-color">
          <h2 class="featurette-heading text-center">Oh yeah, it’s that good.</h2>
          <p class="lead mt-5">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, unde nisi id velit quo vitae eius assumenda tenetur minus blanditiis minima dicta, officia aspernatur repudiandae ullam eos? Molestias, nulla totam?
          </p>
        </div>
        <div class="col-md-5 order-md-1">
            <img src="images/book.jpg" class="home-image"  alt="">
        </div>
      </div>


      <div class="row featurette home-margin">
        <div class="col-md-7 home-color">
          <h2 class="featurette-heading">And lastly, this one.</h2>
          <p class="lead mt-5 ">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita at voluptatibus cum sed odit doloribus eveniet asperiores, facere molestiae aliquam ipsam laboriosam, reiciendis commodi maxime amet ipsum et adipisci. Quidem! </p>
        </div>
        <div class="col-md-5">
            <img src="images/cd.jpg" class="home-image"   alt="">
          
  
        </div>
      </div>

</div>




</div>





    
@endsection


{{-- @section('best-deal')
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
    
@endsection --}}



@section('map')
<div class="container text-center google-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7066.086843631871!2d85.33098309999998!3d27.68505279999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1640177101564!5m2!1sen!2snp" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>


    
@endsection
