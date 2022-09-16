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


        $request->validate([
            'book_name' => 'required',
            'author_name' => 'required',
            'category_Id' => 'required',
            'qty' => 'required',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'publish_year' => 'required',
            'storage_date' => 'required',
           
        ]);

        $input = $request->all();

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
    public function show(Bookupload $bookupload)
    {
        $bookupload= Bookupload::find($bookupload);
        return view('bookuploads/show')->with("bookuploads" , $bookupload);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bookupload $bookupload)
    {
        $bookupload= Bookupload::find($bookupload);
        return view("bookuploads.edit")->with('bookuploads',$bookupload);

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bookupload $bookupload)
    {


        if($request->hasfile('cover')){

            $file = $request->file('cover');
            $extension =$file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/bookuploads', $filename);
            $bookupload->cover=$filename;
        
         }

         else{
            unset($bookupload['cover']);
         }
         $bookupload->update($filename);


        $bookupload =  Bookupload::find($bookupload);
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


    public function destroy(Bookupload $bookupload)
    {
        $bookupload->delete();
        return redirect('/delete-book/{id}')->with('flash_massage', 'Book Deleted successfully');



       
    }
}
