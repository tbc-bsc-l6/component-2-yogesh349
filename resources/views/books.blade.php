@extends('layout.layout')
@section('title','Books')

@section('show-submit_form_message')
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{Auth::user()->name}}!</strong> {{session()->get('success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (session()->has('delete_success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{Auth::user()->name}}!</strong> {{session()->get('delete_success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif


@endsection
@section('game-collection')



<div class="sort">
    <div class="row">
      <div class="col-sm-12">
        <form action="{{URL::current()}}" method="get">
          <select name="sort">
              <option value="" disabled selected>Sort By</option>
              <option value="price_asc">Price - Low To High</option>
              <option value="price_desc">Price - High To Low</option>
              <option value="newest">Newest</option>
          </select>
      
          <input type="submit" name="submit" class="btn btn-success">
      </form>
      </div>
     </div>
  </div>
  
  
  <div class="container home_collec">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-5">
     @foreach ($books as $book)
      <div class="col">
        <div class="card shadow-sm">
          <img src="images/game3.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225"  role="img"img>
          <p class="text-center"><strong>{{$book->name}}</strong></p>
  
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, esse accusamus, illum blanditiis veniam reprehenderit temporibus non.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="" class="btn btn-sm btn-outline-secondary">View</a>
                @can('isGameAdmin')
                <a href="{{url('book/edit-book-form',$book->id)}}" class="btn btn-sm btn-outline-secondary">Edit</a>
                @endcan
                @can('isGameAdmin')
                <a href="{{url('book/delete',$book->id)}}" class="btn btn-sm btn-outline-secondary">Delete</a>
                @endcan
              </div>
              <small class="text-muted">9 mins</small>
            </div>
          </div>
        </div>
      </div>    
      @endforeach
    </div>
  </div>
  {{$books->links()}}
  
  <div class="container">
    @can('isBookAdmin')
    <a href="{{url('book/book-form')}}" class="btn btn-primary text-center"> Add Book Product</a>
    @endcan
   </div>
@endsection