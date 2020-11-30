<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;
use App\Feedback;
use App\Message;
class AdminController extends Controller
{
    public function setNameImage($data){
        if(empty($data)){
            return null;
        }
        else{
            $getNameImage = current(explode('.', $data->getClientOriginalName()));
            $destinationPath = 'public/frontend/img/banner/';
            $date = date('dmY');
            $hash = md5($getNameImage);
            $plus = $date . '_' . $hash . '.jpg';
            $data->move($destinationPath, $plus);
            return $plus;
        }
    }

    public function index(){
    	return view('admin.dashboard');
    }

    public function about(){
    	$info = Information::all();
    	$feedbacks = Feedback::all();
    	return view('admin.layout.information',compact('info','feedbacks'));
    }
    public function updateInfo(Request $request,$id){
    	$info = Information::find($id);
        if($request->banner != null){
            $info->banner = $this->setNameImage($request->banner);
        }else{
            $info->banner = $info->banner;
        }
    	if($request->description != null){
    		$info->about_description = $request->description;
    	}else{
    		$info->about_description = $info->about_description;
    	}if($request->address != null){
    		$info->address = $request->address;
    	}else{
    		$info->address = $info->address;
    	}if($request->phone != null){
    		$info->phone = $request->phone;
    	}else{
    		$info->phone = $info->phone;
    	}if($request->email != null){
    		$info->email = $request->email;
    	}else{
    		$info->email = $info->email;
    	}
    	$info->save();
    	return redirect('/admin/layouts')->with('success','Cập nhật thành công!');
    }
    public function activeFeedBack($id){
    	$feedback = Feedback::find($id);
    	if($feedback->status == 0){
    		$feedback->status = 1;
    	}else{
    		$feedback->status = 0;
    	}
    	$feedback->save();
    	return redirect('/admin/layouts')->with('success','Kích hoạt thành công!');
    }
    public function addFeedback(Request $request){
    	$this->validate($request,[
    		'name' => 'required|max:200',
    		'content' => 'required'

    	],[
    		'name.required' => 'Vui lòng nhập mô tả',
    		'name.max' => 'Họ tên và dự án có tối đa 200 ký tự',
    		'content.required' => 'Vui lòng nhập nội dung',
    	]);
    	$feedback = new Feedback();
    	$feedback->name = $request->name;
    	$feedback->content = $request->content;
    	$feedback->save();
    	return redirect('/admin/layouts')->with('success','Thêm thành công!');
    }
    public function delete($id){
    	$feedback = Feedback::find($id);
    	if(!$feedback){
    		return redirect('/admin/layouts')->with('error','Không tìm thấy');
    	}
    	else{
    		$feedback->delete();
    		return redirect('/admin/layouts')->with('success','Xóa thành công!');
    	}
    }
    public function message(){
        $messages = Message::orderBy('id','DESC')->paginate(6);
        return view('admin.message.index',compact('messages'));
    }
}
