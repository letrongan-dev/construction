<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
class RoleController extends Controller
{
    public function index(){
    	$listRole = Role::all();
    	return view('admin.role.role_list',compact('listRole'));
    }
    public function save(Request $request){
    	$this->validate($request,[
    		'name' => 'required|unique:role,name_role',
            'description' => 'required',
    	],[
    		'name.required' => 'Vui lòng nhập tên quyền',
            'name.unique' => 'Tên quyền đã tồn tại',
    		'description.required' => 'Vui lòng nhập mô tả',
    	]);
    	$role = new Role();
	    $role->name_role = $request->name;
	    $role->description_role = $request->description;
	    $role->save();
	    return redirect('/admin/roles')->with('success','Thêm quyền thành công!');
    }
    public function update(Request $request, $id){
    	$role = Role::find($id);
    	if($role != null){
    		if($request->name != null){
    		$role->name_role = $request->name;
	    	}
		    else{
		    	$role->name_role = $role->name_role;
		    }
		    if($request->description != null){
		    	 $role->description_role =  $request->description;
		    }else{
		    	$role->description_role =  $role->description_role;
		    }
		    $role->save();
		    return redirect('/admin/roles')->with('success','Cập nhật quyền thành công!');
    	}else{
    		return redirect('/admin/roles')->with('error','Không tìm thấy!');
    	}   
    }
    public function delete($id){
    	$role = Role::find($id);
    	if($role!=null){
    		$role->delete();
    		return redirect('/admin/roles')->with('success','Xóa quyền thành công!');
    	}else{
    		return redirect('/admin/roles')->with('error','Không tìm thấy!');
    	}
    }
}
