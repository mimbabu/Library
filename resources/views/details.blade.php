@extends('books.layout')
@section('content')


 <div class="container">
    <div class="row p-5 justify-content-center">
<div class="card">
<div class="card-heder">Book details</div>

<div class="card-body text-center">
    <h5 class="card-title"> Book Name: {{ $book->book_name }}</h5><br/>
    <p class="card-text">Author Name:{{ $book->author_name }}</p><br/>

    <p class="card-text">Category Name <br> {{ $book->category->category_name??'---' }}</p><br/>
    <p class="card-text">Qty:{{ $book->qty }}</p><br/>

    <p class="card-text">Cover<br/><img src="/image/{{ $book->image }}" width="250" height="280" class="img-responsive"/></p>

    <p class="card-text">Publish year:{{ $book->publish_year }}</p><br>
    <p class="card-text">Storage Date:{{ $book->storage_date }}</p>
</div>

<div class="p-2"><a  href="{{ route('issuereturns.create') }}" title="Add New"Style=" float:left;"><button class="btn btn-info btn-sm" ">Borrow</button></a></div>

<div class="p-2"><a  href="{{ ('/') }}" title="Add New"Style=" float:right;"><button class="btn btn-info btn-sm" "><span><i class="fa-solid fa-book-user"></i></span>Back</button></a></div>

</div>
</div>
</div>






    @endsection
