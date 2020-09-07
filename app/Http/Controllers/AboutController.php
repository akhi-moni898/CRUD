<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class AboutController extends Controller
{
    public function allcontact()
    {

        $contact = DB::table('contacts')->get();
    	return view('pages.allcontacts')->with('data',$contact);
    	
    }

    public function insert()
    {
    	return view('pages.insert');
    }

    public function dataadded(Request $request)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['description'] = $request->description;
        $ins = DB::table('contacts')->insert($data);
        return Redirect()->route('all.contacts');

    }

    public function delete($id)
    {
        $dlt = DB::table('contacts')->where('id',$id)->delete();
        return Redirect()->route('all.contacts');
    }


    public function edit($id)
    {
      $edt = DB::table('contacts')->where('id',$id)->first(); 

      return view('pages.editcontact',compact('edt'));
    }
    public function update( Request $request , $id)
    {
          $data = array();
          $data['name'] = $request->name;
          $data['email'] = $request->email;
          $data['phone'] = $request->phone;
          $data['description'] = $request->description;


        $dlt = DB::table('contacts')->where('id',$id)->update($data);
        return Redirect()->route('all.contacts');

    }
    public function view($id)
    {
       $view = DB::table('contacts')->where('id',$id)->first();
       return view('pages.viewcontact',compact('view'));
    }
}
