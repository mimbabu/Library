@extends('issuereturns.layout')
@section('content')


 <div class="container">
    <div class="row p-5 justify-content-center">
<div class="card">
<div class="card-heder">Book Issue Page</div>

<div class="card-body text-center">
    <h5 class="card-title"> Book Name: {{ $issuereturns->user_id }}</h5><br/>
    <p class="card-text">Author Name:{{ $issuereturns->book_name }}</p><br/>

    <p class="card-text">Category Name <br> {{ $issuereturns->issue_date }}</p><br/>
    <p class="card-text">Qty:{{ $issuereturns->qty }}</p><br/>



    <p class="card-text">Publish year:{{ $issuereturns->return_date }}</p><br>
    <p class="card-text">Storage Date:{{ $issuereturns->status }}</p>

</div>
<div class="p-2"><a  href="{{ route('issuereturns.index') }}" title="Add New"Style=" float:right;"><button class="btn btn-info btn-sm" "><span><i class="fa-solid fa-book-user"></i></span>Back</button></a></div>

</div>
</div>
</div>






    @endsection
