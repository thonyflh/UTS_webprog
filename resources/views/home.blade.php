@extends('index')

@section('container')

<body>
    <style>
        .booklist{
            background-color: grey;
        }

        .book1{
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 20px;
        }
        .book1 img{
            height: 430px;
        }
        /* .book3 img{
            height: 430px;
        }
        .book4 img{
            height: 430px;
        } */
    </style>

    <div class="booklist">
        <h4 style="color: white">Booklist</h4>
    </div>

    <div class="book">
        <div class="book1">
            @foreach ($Book as $Books)
            <div class="card" style="width: 18rem;">
              <img src={{$Books->image_books}} class="card-img-top" alt="...">
              <div class="card-body">
                  <p class="card-text1">{{$Books->title}}</p>
                  <p class="card-text2">By</p>
                  <p class="card-text3">{{$Books->author}}</p>
                  <a class="btn btn-primary" href="/detail/{{$Books->id}}" role="button">Detail</a>
                  {{-- <a href="/detail/{{$Books->id}}">Detail</a> --}}

              </div>
            </div>

            @endforeach
        </div>
    </div>
</body>

@endsection
