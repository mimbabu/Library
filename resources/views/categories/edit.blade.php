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



 @foreach ($categories as $ct)


  <form action="{{ route('categories.update',$ct->id) }}" method="POST">
                @csrf
                @method('PUT')

                @method("PATCH")



         <label>Category Name</label><br/>
        <input type="text" name="category_name" id="category_name" value="{{$ct->category_name}}" class="form-control"/><br/>



















    <button type="submit" class="btn btn-primary">Submit</button> <br/>



</form>
@endforeach


@stop







