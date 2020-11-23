<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\Role;
use Hash;

class UserController extends Controller
{
	public function setNameImage($data){
        if(empty($data)){
            return null;
        }
        else{
            $getNameImage = current(explode('.', $data->getClientOriginalName()));
            $destinationPath = 'public/frontend/img/user/';
            $date = date('dmY');
            $hash = md5($getNameImage);
            $plus = $date . '_' . $hash . '.jpg';
            $data->move($destinationPath, $plus);
            return $plus;
        }
    }
    public function index(){
    	$listUser = Users::orderBy('id_user','DESC')->paginate(6);
    	$roles = Role::all();
    	return view('admin.user.user_list',compact('listUser','roles'));
    }
    public function save(Request $request){
    	$this->validate($request,[
    		'name' => 'required',
    		'phone' => 'required',
    		'avatar' => 'mimes:jpg,jpeg,png,gif|max:2048',
    		'address' => 'required',
    		'password' => 'required'

    	],[
    		'name.required' => 'Vui lòng nhập tên',
    		'phone.required' => 'Vui lòng nhập số điện thoại',
    		'address.required' => 'Vui lòng nhập địa chỉ',
    		'avatar.mimes' => 'Chỉ chấp nhận với đuôi .jpg .jpeg .png .gif',
    		'avatar.max' => 'Hình ảnh giới hạn dung lượng không quá 2M',
    		'password' => 'Vui lòng nhập mật khẩu'
    	]);
		//if(Hash::check($input, $hash))
    	$user = new Users();
    	$user->name_user = $request->name;
    	$user->phone_user = $request->phone;
    	$user->address_user = $request->address;
    	$user->role_id = $request->id_role;
    	$user->email_user = $request->email;
    	$user->password_user = Hash::make($request->password);
    	if($request->avatar != null){
    		$user->avatar_user = $this->setNameImage($request->avatar);
    	}else{
    		$user->avatar_user = "avatar.png";
    	}
    	$user->save();
    	return redirect('/admin/users')->with('success','Thêm thành công!');
    }
    public function update(Request $request,$id){
    	$this->validate($request,[
    		'avatar' => 'mimes:jpg,jpeg,png,gif|max:2048',
    	],[
    		'avatar.mimes' => 'Chỉ chấp nhận với đuôi .jpg .jpeg .png .gif',
    		'avatar.max' => 'Hình ảnh giới hạn dung lượng không quá 2M',
    	]);
		//if(Hash::check($input, $hash))
    	$user = Users::find($id);
    	if($request->name != null){
    		$user->name_user = $request->name;
    	}else{
    		$user->name_user = $user->name_user;
    	}
    	if($request->phone != null){
    		$user->phone_user = $request->phone;
    	}else{
    		$user->phone_user = $user->phone_user;
    	}
    	if($request->address != null){
    		$user->address_user = $request->address;
    	}else{
    		$user->address_user = $user->address_user;
    	}
    	if($request->id_role != null){
    		$user->role_id = $request->id_role;
    	}else{
    		$user->role_id = $user->role_id;
    	}
    	if($request->email_user != null){
    		$user->email_user = $request->email;
    	}else{
    		$user->email_user = $user->email;
    	}
    	if($request->password != null){
    		$user->password_user = Hash::make($request->password);
    	}else{
    		$user->password_user = $user->password_user;
    	}
    	if($request->avatar != null){
    		$user->avatar_user = $this->setNameImage($request->avatar);
    	}else{
    		$user->avatar_user = $user->avatar_user;
    	}
    	$user->save();
    	return redirect('/admin/users')->with('success','Cập nhật thành công!');
    }
    public function delete($id){
    	$userDel = Users::find($id);
    	if(!$userDel){
    		return redirect('/admin/users')->with('error','Không tồn tại user!');
    	}
    	$userDel->delete();
    	return redirect('/admin/users')->with('success','Xóa thành công!');
    }
    
}
