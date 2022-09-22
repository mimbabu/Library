        @extends('categories.layout')
        @section('content')


        <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Edit Category</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('categories.index') }}"> Back</a>
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

  <form action="{{ route('categories.update',$categories->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')





         <label>Category Name</label><br/>
        <input type="text" name="category_name" id="category_name" value="{{$categories->category_name}}" class="form-control"/><br/>



















    <button type="submit" class="btn btn-primary">Submit</button> <br/>

</form>



@stop







