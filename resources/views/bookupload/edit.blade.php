@extends('bookupload.layout')
@section('content')


    


<div class="row">
      



      <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Book Name</th>
                <th>Author</th>
                <th>Category</th>
                <th>Qty</th>
                <th>Cover</th>
                <th>Publish Year</th>
                <th>Strorage Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            @foreach ($bookuploads as $book)


                <td>{{ $loop->iteration }}</td>
                <td>{{ $book->book_name }}</td>
                <td>{{ $book->author_name	 }}</td>
                <td>{{ $book->category_Id }}</td>
                <td>{{ $book->qty }}</td>
                <td> <img src="{{('/storage/images/'.$book->cover ) }}" width="80px", height="70px" class="img-responsive" alt="image"</td>
                <td>{{ $book->storage_date	 }}</td>
                <td>{{ $book->publish_year }}</td>
                <td>
                    <form action="" method="post">

                    <a  class="btn btn-success" href="{{ url('bookupload.add/') }}" >Add</a>
                    <a  class="btn btn-info" href="{{ url('view-book'.$book->id) }}" >View</a>
                    <a  class="btn btn-primary" href="{{url('edit-book' .$book->id)}}">Edit</a>
                    <a  class="btn btn-danger" href="{{url('delete-book'.$book->id)}}">Delete</a>
                    </form>
                  
                </td>
            </tr>
          
            @endforeach
        </tbody>
       
    </table>
</div>


@stop
 






