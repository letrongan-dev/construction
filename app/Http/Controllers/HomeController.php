<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;
use App\Blog;
use App\Service;
use App\Project;
use App\Users;
use App\Feedback;
use App\Role;
use App\Message;
use DB;
class HomeController extends Controller
{
    public function index(){
      $infos = Information::all();
      $blogs = Blog::all()->where('status','=','1');
      $services = Service::all()->where('status','=','1');
      $projects =DB::table('project')->where('id_processing','=',3)->orWhere('id_processing','=',4)->get();
      $teams = DB::table('users')->where('role_id','=',2)->orWhere('role_id','=',3)->get();
      $role = Role::all();
      $feedbacks = Feedback::all()->where('status',1);

      for ($i = 0; $i < count($blogs); $i++){
          $month = $blogs[$i]->created_at->month;
          $blogNew = DB::table('blogs')->whereMonth('created_at','=',$month)->limit(2)->get();
      }

    	return view('layout.frontend.index',compact('infos','blogs','services','projects','teams','feedbacks','role','blogNew'));
    }
    public function about(){
    	$infos = Information::all();
      $teams = DB::table('users')->where('role_id','=',2)->orWhere('role_id','=',3)->get();
      $feedbacks = Feedback::all()->where('status',1);
      $role = Role::all();
    	return view('layout.frontend.display.about',compact('infos','teams','feedbacks','role'));
    }
    public function contact(){
    	$infos = Information::all();
    	return view('layout.frontend.display.contact',compact('infos'));
    }
   	public function blog(){
   		$blogs = Blog::orderBy('id_blog','DESC')->where('status','=',1)->paginate(3);
      for ($i = 0; $i < count($blogs); $i++){
          $month = $blogs[$i]->created_at->month;
          $blogNew = DB::table('blogs')->whereMonth('created_at','=',$month)->orderBy('id_blog','DESC')->limit(2)->get();
      }
   		return view('layout.frontend.display.blog',compact('blogs','blogNew'));
   	}
   	public function blogDetail($slug){
      $blogs = Blog::orderBy('id_blog','DESC')->where('status','=',1)->limit(3)->get();
   		$blogDetail = Blog::where('slug',$slug)->where('status','=','1')->first();
   		return view('layout.frontend.display.blog_detail',compact('blogDetail','blogs'));
   	}
   	public function service(){
   		$services = Service::orderBy('id_service','DESC')->where('status','=','1')->paginate(3);
   		return view('layout.frontend.display.service',compact('services'));
   	}
   	public function serviceDetail($slug){
   		$serviceDetail = Service::where('slug',$slug)->where('status','=',1)->first();
   		return view('layout.frontend.display.service_detail',compact('serviceDetail'));
   	}
   	public function project(){
   		$projects = DB::table('project')->where('id_processing','=',3)->orWhere('id_processing','=',4)->get();
   		return view('layout.frontend.display.project',compact('projects'));
   	}
   	public function projectDetail($slug){
   		$projectDetail = DB::table('project')->where('slug',$slug)->where('id_processing','=',3)->orWhere('id_processing','=',4)->first();
   		return view('layout.frontend.display.project_detail',compact('projectDetail'));
   	}
    public function postMessage(Request $request){
      $this->validate($request,[
        'name' => 'required|max:100',
        'email' => 'required|',
        'subject' => 'required',
        'content' => 'required'

      ],[
        'name.required' => 'Vui lòng nhập tên',
        'name.max' => 'Họ tên có tối đa 100 ký tự',
        'content.required' => 'Vui lòng nhập nội dung',
        'subject.required' => 'Vui lòng nhập tiêu đề',
        'email.required' => 'Vui lòng nhập email'
      ]);
      $message = new Message();
      $message->name = $request->name;
      $message->subject = $request->subject;
      $message->content = $request->content;
      $message->email = $request->email;
      $message->save();
      return redirect()->back()->with('success','Đã gửi tin nhắn thành công! Chúng tôi sẽ sớm phản hồi cho bạn');
    }
}
