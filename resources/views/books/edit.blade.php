        @extends('books.layout')
        @section('content')


        <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Edit Book</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('books.index') }}"> Back</a>
                    </div>
                </div>
            </div>

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

  <form action="{{ route('books.update',$book->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')



         <label>Book Name</label><br/>
        <input type="text" name="book_name" id="book_name" value="{{$book->book_name}}" class="form-control"/><br/>


        <label>Author Name</label><br/>
        <input type="text" name="author_name" id="author_name" value="{{ $book->author_name}}" class="form-control"/><br/>



        {{-- <label>Category ID</label><br/>
        <input type="text" name="category_Id" id="qty" value="{{$book->category_Id}}" class="form-control"/><br/> --}}
         <div class="form-group col-md-12 mb-3">
                <label>Enter Category</label><br>
                <select name="category_id" class="form-select">
                <option value="">Select Category</option>
                @foreach($books as $key => $book)
                    <option value="{{$book->id}}">{{$book->category_name}}</option>
                @endforeach
                </select>
            </div>

        <label>Qty</label><br/>
        <input type="text" name="qty" id="qty" value="{{ $book->qty}}" class="form-control"/><br/>

        <label>Cover</label><br/>
        <input type="file" name="image" id="image" src="/image/{{ $book->image }}" class="img-responsive" width="150px" height="200px"/><br/>


        <label>Publish year</label><br/>
        <input type="text" name="publish_year" id="qty" value="{{$book->publish_year}}" class="form-control"/><br/>



        <label>Storage date</label><br/>
        <input type="date" name="storage_date" id="qty" value="{{$book->storage_date}}" class="form-control"/><br/>


    <button type="submit" class="btn btn-primary">Submit</button> <br/>

</form>



@stop







