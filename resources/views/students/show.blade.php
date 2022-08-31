@extends('students.layout')
@section('content')

<div class="container">
    <div class="row p-5 justify-content-center">
<div class="card">
<div class="card-heder">Book Page</div>

<div class="card-body text-center">
    <h5 class="card-title"> Book Name: {{ $students->book_name }}</h5>
    <p class="card-text">Author Name:{{ $students->author_name }}</p>
    <p class="card-text">Cover: {{ $students->file_path }}</p>
    <p class="card-text">Qty:{{ $students->qty }}</p>
</div>
</div>
</div>
</div>