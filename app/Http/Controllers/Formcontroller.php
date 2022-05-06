<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Formcontroller extends Controller
{
    public function creat(){


        return view('formuser.create');
    }

public function show(User $user){

    $user=User::all();

    return view('formuser.index',[

        'user'=>$user
    ]);
}


public function  trashes()
{
    $user=User::onlyTrashed()
    ->get();
    return view('user.showsoft',['user'=>$user]);
}

public function restore($id)
{
    User::withTrashed()->find($id)->restore();
    return back();
}

    public function Store(Request $request){


        $validate=Validator::make($request->all(),[
        'name'=>'required',
        'family'=>'required',
        'phone'=>'required',
        'address'=>'required',
        'email'=>'required'
        ]);

        
        $validate->errors()->all();

        if($validate->fails()){

            return redirect()->back()->withErrors($validate->errors());
        }



User::query()->create([

'name'=>$request->name,
'family'=>$request->family,
'phone'=>$request->phone,

'email'=>$request->email,
'address'=>$request->address

]);

return back();
    }

    public function edit(User $user)
    {
    //    $user = User::find($id);
       return view('formuser.edit', compact('user'));
    }


    public function update(Request $request, User $user){

      
$validate_data=$this->validate(request(),[
    'name'=>'required',
     'family'=>'required',
     'phone'=>'required',
     'address'=>'required',
     'email'=>'required'
]);





      $user->update([
'name'=>$request->name,
'family'=>$request->family,
'phone'=>$request->phone,

'email'=>$request->email,
'address'=>$request->address

        ]);

        return back()->with('update success');
    }


    public function destory(User $user){

       
        $user->delete();
        return back();
    }
}
