@extends('index')

@section('container')

<style>
     .bookdetail{
        background-color: grey;
    }
    .book1 img{
        justify-content: center;
        text-align: center;
        /* height: 700px;
        width: 700px; */
    }
</style>

<div class="bookdetail">
    <h4 style="color: white">Bookdetail</h4>
</div>

        <div class="book">
            <div class="book1">
                @foreach ($BookDetail as $Books)
                <img src={{$Books->image_books}} class="card-img-top" alt="...">
                <div class="bookinfo">
                    <p>Title : {{$Books->title}}</p>
                    <p>Author : {{$Books->author}}</p>
                    <p>Year : {{$Books->year}}</p>
                    <p>Sypnosis :</p>
                    <p>{{$Books->synopsis}}</p>
                </div>
                @endforeach
            </div>
        </div>

@endsection
