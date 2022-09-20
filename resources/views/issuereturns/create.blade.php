@extends('issuereturns.layout')
@section('content')



<div class="row">
   <div class="card" style="margin:20px;">
     <div class="card-header text-center"><h2>Issue Books</h2></div>


     <div class="card-body">


       @if ($errors->any())
        <div class="alert alert-danger">
         <strong>Whoops!</strong> There were some problems with your input.<br><br>
          <ul>
             @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
             @endforeach
         </ul>
       </div>
       @endif

        <form action="{{ route('issuereturns.store') }}" method="POST" enctype="multipart/form-data">
        @csrf



         <label>Enter user Id</label><br>
          <input type="string" name="user_id" class="form-control"><br>



            <label>Enter Book name</label><br>
            <input type="string" name="book_name"  class="form-control" ><br>

            <label>Enter Issue date</label><br>
            <input type="date" name="issue_date" class="form-control"><br>



            <label>Enter Return date</label><br>
            <input type="date" name="return_date" class="form-control" > <br/>


            <label>Status</label><br>
             <select name="status" class="form-select">
            <option> Issued</option>
            <option>Returned</option>
            <option> Not returned</option>
             </select>
             <br/> <br/>


            <input type="submit" class="btn btn-info" title="Add New"Style=" float:left;">

            <a class="btn btn-primary"  href="{{ route('issuereturns.index')  }}" Style=" float:right;"> Back</a>
       </form>

     </div>

     @endsection
   </div>

</div>
