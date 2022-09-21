        @extends('issuereturns.layout')
        @section('content')


        <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Edit Issue Book</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('issuereturns.index') }}"> Back</a>
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

  <form action="{{ route('issuereturns.update',$issuereturns->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')



         <label>User Id</label><br/>
        <input type="text" name="book_name" id="id" value="{{$issuereturns->id}}" class="form-control"/><br/>


        <label>Author Name</label><br/>



        <input type="text" name="author_name" id="author_name" value="{{ $issuereturns->user_id}}" class="form-control"/><br/>
        <option value="">Select Category</option>
        @foreach($users as $key => $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
        </select>



        <label>Issue date</label><br/>
        <input type="text" name="issue_date" id="issue_date" value="{{ $issuereturns->issue_date}}" class="form-control"/><br/>


        <label>Return date</label><br/>
        <input type="text" name="return_date" id="return_date" value="{{ $issuereturns->return_date}}" class="form-control"/><br/>

        <label>Status</label><br/>

        <input type="text" name="status" id="status" value="{{ $issuereturns->status}}" class="form-control"/><br/>






        <div class="form-group col-md-12 mb-3">
            <label>Status</label><br>
            <select name="category_id" class="form-select">

             <option value="">Select Category</option>
             @foreach($categories as $c)
                <option @if($book->category_id == $c->id) selected @endif value="{{$c->id}}">{{$c->category_name}}</option>
            @endforeach
            </select>












    <button type="submit" class="btn btn-primary">Submit</button> <br/>

</form>



@stop







