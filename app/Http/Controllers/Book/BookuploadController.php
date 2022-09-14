<?php

namespace App\Http\Controllers\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bookupload;
use DB;

class BookuploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

$bookuploads = Bookupload:: all();
return view('bookuploads/index', ['bookuploads'=>$bookuploads]);

        // $bookuploads = DB::table('bookuploads')->get();

        // return view('bookupload/index', compact('bookuploads'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('bookuploads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->input();
        // print_r($_REQUEST);
        // die();
        $bookupload = new Bookupload;

        $bookupload->book_name   =  $request->book_name;
        $bookupload->author_name =  $request->author_name;
        $bookupload->category_Id =  $request->category_Id;
        $bookupload->qty         =  $request->qty;

 if($request->hasfile('cover')){

    $file = $request->file('cover');
    $extension =$file->getClientOriginalExtension();
    $filename = time().'.'.$extension;
    $file->move('uploads/bookuploads', $filename);
    $bookupload->cover=$filename;

 }
else{
    return $request;
    $bookupload ->cover= '';
}

        $bookupload->publish_year =  $request->publish_year;
        $bookupload->storage_date =  $request->storage_date;

        $bookupload->save();
        return redirect('/book')->with('status','Book added successfully.');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bookupload= Bookupload::find($id);
        return view('bookuploads/show')->with("bookuploads" , $bookupload);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bookupload= Bookupload::find($id);
        return view("bookuploads.edit")->with('bookuploads',$bookupload);

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bookupload =  Bookupload::find($id);
        $input =$request->all();
        $bookupload->update($input);
        return redirect('bookuploads')->with('flash_massage', 'Book updated successfully');

    }









    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        Bookupload::destroy($id);
        return redirect('/delete-book/{id}')->with('flash_massage', 'Book Deleted successfully');



       
    }
}
