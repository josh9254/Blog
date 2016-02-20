<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Laracasts\Flash\Flash;
use App\Http\Requests\UserRequest;
 

class UsersController extends Controller
{
    //

public function index(){
 
$users = User::orderBy('id', 'ASC')->paginate(5);
return view('admin.users.index')->with('users' , $users);

}

public function create(){

 	 return view('admin.users.create');
	
}

 public function store(UserRequest $request){

 	$user = new User($request->all());

 	$user ->password = bcrypt($request->password);
 	$user -> save();
 	Flash::success("Se ha creado " .$user->name. "de forma exitosa");
 	return redirect()->route('admin.auth.login');

 }


public function destroy($id){

 	$user = User::find($id);
 	$user->delete();
 	Flash::error("El usuario " .$user->name. "fue borrado de forma exitosa");
 	return redirect()->route('admin.users.index');
}

public function update(Request $request, $id){

	$user = User::find($id);
	$user->name = $request->name;
	$user->lastname = $request->lastname;
	$user->email = $request->email;
	$user->type = $request->type;
	$user->save();

	Flash::warning('El usuario '. $user->name .'fue editado con exito.');
 	 return redirect()->route('admin.users.index');
}

public function edit($id){

 	$user = User::find($id);

 	return view('admin.users.edit')->with('user', $user);
}
}
?>