@extends('index')

@section('container')

<style>
        .book{
            display: flex;
            justify-content: center;
            gap: 1rem;
        }
</style>

<div class="book">
    <div class="book1">
      <div class="card" style="width: 18rem;">
        <img src="https://m.media-amazon.com/images/I/51+3Z+insOL._AC_SY780_.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text1">Book Title</p>
            <p class="card-text2">By</p>
            <p class="card-text3">Book Author</p>
            <button type="button" class="btn btn-primary">Detail</button>
        </div>
      </div>
      </div>

      <div class="book2">
        <div class="card" style="width: 18rem;">
          <img src="https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781974707430/haikyu-vol-33-9781974707430_hr.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text1">Book Title</p>
            <p class="card-text2">By</p>
            <p class="card-text3">Book Author</p>
            <button type="button" class="btn btn-primary">Detail</button>
          </div>
        </div>
      </div>

      <div class="book3">
        <div class="card" style="width: 18rem;">
          <img src="https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781421577449/vagabond-vol-37-9781421577449_hr.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text1">Book Title</p>
            <p class="card-text2">By</p>
            <p class="card-text3">Book Author</p>
            <button type="button" class="btn btn-primary">Detail</button>
          </div>
        </div>
      </div>

      <div class="book4">
        <div class="card" style="width: 18rem;">
          <img src="https://i.pinimg.com/736x/16/25/c4/1625c43e6ce7ef316bc0ce72b8e7824f.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text1">Book Title</p>
            <p class="card-text2">By</p>
            <p class="card-text3">Book Author</p>
            <button type="button" class="btn btn-primary">Detail</button>
          </div>
        </div>
      </div>
</div>

@endsection
