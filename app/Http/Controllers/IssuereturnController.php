<?php

namespace App\Http\Controllers;

use App\Models\Issuereturn;
use App\Models\User;
use App\Models\Book;
use App\Models\Category;

use Illuminate\Http\Request;

class IssuereturnController extends Controller
{
    public function index()
    { $issuereturns = Issuereturn::paginate(5);
        return view('issuereturns.index')->with('issuereturns', $issuereturns);
    }




    public function create()
    {
        return view('issuereturns.create',
       ['categories' => Category::all(),
       'users' => User::all(),
       'books' => Book::all()
       ]) ;
    }



    public function store(Request $request){

       Issuereturn::create($request->all());
       return redirect()->route('issuereturns.index')
       ->with('success','Book issued successfully.');

    }


    public function show(Issuereturn $issuereturn)
    {
        return view('issuereturns.show',[
            'Issuereturn'=> $issuereturn
        ]);
    }


    public function edit(Issuereturn $issuereturn)
    {

        $categories = Category::all();
        $categories = User::all();
        $categories = Book::all();
        return view('issuereturns.edit',compact('issuereturn','categories')

    );
    }



    public function update(Request $request, Issuereturn $issuereturn){

        $input = $request->all();
        $issuereturn->update($input);

        return redirect()->route('issuereturns.index')
                        ->with('success','Book updated successfully');

    }


    public function destroy(Issuereturn $issuereturn)
    {
        $issuereturn->delete();

        return redirect()->route('issuereturns.index')
                        ->with('success','Book deleted successfully');
    }

}