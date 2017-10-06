<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employ;

class DefaultController extends Controller
{
    public function index()
    {
    $data['employs'] = Employ::all();

    return view('default.index',$data);
    }
    public function getForm()
    {
      return view('default.form');
    }
    public function postForm(Request $request)
    {
      $employ = new Employ;
     $employ = Employ::firstOrNew(['id' => $request->id]);
      $employ->name = $request->name;
      $employ->lastname = $request->lastname;
      $employ->email = $request->email;
      $employ->departmeant = $request->departmeant;
      $employ->save();
      return redirect('/home');

    }
    public function getdelete($id)
    {
    $employ = Employ::find($id);
    if($employ)
      $employ->delete();

   return back();

    }

 public function getedit($id)
 {

   $data['employ'] = Employ::where('id',$id)->first();
   return view('default.form',$data);


 }

}
