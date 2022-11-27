@extends('index')

@section('container')

<body>
<style>
.infopublisher{
    display: flex;
    background-color: grey;
    justify-content: space-between;
}
.detailpublisher p{
    color: white;
}
.detailpublisher{
    margin: 10px 10px 10px 10px;
}
.logopublisher img{
    width: 230px;
    margin: 10px 10px 10px 10px;
}
.bookpub{
    display: flex;
    justify-content: center;
    align-items: center;
    border-style: dashed;
    margin: 10px 10px;
    gap: 5rem;
}
.bookimg img{
    height: 400px;
    width: 300px;
    margin: 10px 10px;
}

</style>

<div class="publisher">
    @foreach ($publisher as $p)
    <div class="infopublisher">
        <div class="detailpublisher">
            <p>{{$p->publisher_name}}</p>
            <p>{{$p->address}}</p>
            <p>{{$p->phone}}</p>
            <p>{{$p->email}}</p>
        </div>
        <div class="logopublisher">
            <img src={{$p->image_publisher}} alt="">
        </div>
    </div>
    @foreach ($p->Books as $b)
    <div class="bookpub">
        <div class="bookpubdet">
            <p>Title : {{$b->title}}</p>
            <p>Author : {{$b->author}}</p>
            <p>Year : {{$b->year}}</p>
            <a class="btn btn-primary" href="/detail/{{$b->id}}" role="button">Detail</a>
        </div>
        <div class="bookimg">
            <img src="{{$b->image_books}}" alt="">
        </div>
    </div>
    @endforeach
    @endforeach
</div>
</body>

@endsection
