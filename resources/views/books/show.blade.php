@extends('books.layout')
@section('content')


 <div class="container">
    <div class="row p-5 justify-content-center">
<div class="card">
<div class="card-heder">Bookupload Page</div>

<div class="card-body text-center">
    <h5 class="card-title"> Book Name: {{ $books->book_name }}</h5><br/>
    <p class="card-text">Author Name:{{ $books->author_name }}</p><br/>

    <p class="card-text">Category Name <br> {{ $books->category->category_name??'---' }}</p><br/>
    <p class="card-text">Qty:{{ $books->qty }}</p><br/>

    <p class="card-text">Cover<br/><img src="/image/{{ $books->image }}" width="250" height="280" class="img-responsive"/></p>

    <p class="card-text">Publish year:{{ $books->publish_year }}</p><br>
    <p class="card-text">Storage Date:{{ $books->storage_date }}</p>

</div>
<div class="p-2"><a  href="{{ route('books.index') }}" title="Add New"Style=" float:right;"><button class="btn btn-info btn-sm" "><span><i class="fa-solid fa-book-user"></i></span>Back</button></a></div>

</div>
</div>
</div>






    @endsection
