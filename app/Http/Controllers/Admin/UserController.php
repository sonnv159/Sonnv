<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserAddRequest;
use App\Models\User;
use App\Models\Role_user;
use DateTime,Auth;
class UserController extends Controller
{
    public function getUserAdd()
    {
    	return view('admin.users.user_add');
    }
    public function postUserAdd(UserAddRequest $request)
    {
    	$user=new User;
    	$user->username = $request->txtUser;
    	$user->password = bcrypt($request->txtPass);
    	$user->created_at = new DateTime();
    	$user->save();
    	/*** Thêm nhiều role cho 1 user ***/
    	$id=$user->id;
    	foreach($request->cbRole as $v){
    		$data=array('user_id'=>$id,
    					'role_id'=>$v);
    		Role_user::insert($data);
    	}
    	return redirect()->route('getUserList')
    					 ->with(['status' => 'result','messages' => 'Thêm Thành Viên Thành Công']);
    }
    public function getUserList()
    {
    	$data=User::paginate(10);
       	return view('admin.users.user_list',['data' => $data] );
    }
    public function getUserDelete($id)
    {
    	$current_login = Auth::user()->id;  /*user đang login*/
    	$user_delete = User::find($id);
    	foreach ($user_delete->roles as $delete){
    		if($current_login == 1 || ($current_login != 1 
    			&& ($delete->role_name == 'admin' 
    				&& ($user_delete['id'] == $current_login || $delete->role_name == 'admin') 
    			|| ($delete->role_name == 'author' 
    				&& ($user_delete['id'] == $current_login || $delete->role_name == 'author'))))){

    		return redirect()->route('getUserList')->with(['status'=>'err','messages' => 'Bạn không thể xóa thành viên này']);
    		}

    			$user_delete->forcedelete($id);
    			return redirect()->route('getUserList')->with(['status'=>'result','messages' => 'Xóa thành công']);
    	}	
    }
    public function getUserEdit($id)
    {
    	$user=User::findorFail($id);
    	$role=Role_user::where('user_id',$id)->get();
    	return view('admin.users.user_edit',['user' => $user,'role'=>$role]);
    }
}
