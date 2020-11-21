<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;


class BlogController extends Controller
{

	public function setNameImage($data){
        if(empty($data)){
            return null;
        }
        else{
            $getNameImage = current(explode('.', $data->getClientOriginalName()));
            $destinationPath = 'public/frontend/img/blog/';
            $date = date('dmY');
            $hash = md5($getNameImage);
            $plus = $date . '_' . $hash . '.jpg';
            $data->move($destinationPath, $plus);
            return $plus;
        }
    }

	public function index(){
        $listBlog = Blog::all();
		return view('admin.blog.blog_list',compact('listBlog',$listBlog));
	}
    public function addBlog(){
    	return view('admin.blog.blog_add');
    }
    public function postBlog(Request $request){
    	$this->validate($request,[
    		'title' => 'required|unique:blogs,titles',
    		'description' => 'required|max:100',
    		'img_blog' => 'mimes:jpg,jpeg,png,gif|max:2048',
    		'content' => 'required'

    	],[
    		'title.required' => 'Vui lòng nhập tiêu đề bài viết',
            'title.unique' => 'Tiêu đề đã tồn tại xin vui lòng nhập tiêu đề khác',
    		'description.required' => 'Vui lòng nhập mô tả',
    		'description.max' => 'Đoạn mô tả có tối đa 100 ký tự',
    		'content.required' => 'Vui lòng nhập nội dung',
    		'img_blog.mimes' => 'Chỉ chấp nhận với đuôi .jpg .jpeg .png .gif',
    		'img_blog.max' => 'Hình ảnh giới hạn dung lượng không quá 2M'
    	]);
    	$blog = new Blog();
    	$blog->date_blog = date("Y-m-d H:i:s");
    	$blog->titles = $request->title;
    	$blog->description = $request->description;
    	$blog->content = $request->content;
    	$blog->img_blog = $this->setNameImage($request->img_blog);
    	$blog->user_post = 1;
    	$blog->slug = $request->slug;
    	$blog->save();
    	return redirect('/admin/blogs')->with('success','Thêm thành công!');
    }
    public function activeBlog($id){
        $blog = Blog::find($id);
        if($blog->status == 0){
            $blog->status = 1;
        }else{
            $blog->status = 0;
        }
        $blog->save();
        return redirect('/admin/blogs')->with('success','Kích hoạt thành công!');
    }
    public function editBlog($id){
        $blogEdit = Blog::find($id);
        return view('admin.blog.blog_edit', compact('blogEdit'));
    }
    public function updateBlog(Request $request, $id){
        $this->validate($request,[
            'description' => 'required|max:100',
            'img_blog' => 'mimes:jpg,jpeg,png,gif|max:2048',
            'content' => 'required'

        ],[
            'description.required' => 'Vui lòng nhập mô tả',
            'description.max' => 'Đoạn mô tả có tối đa 100 ký tự',
            'content.required' => 'Vui lòng nhập nội dung',
            'img_blog.mimes' => 'Chỉ chấp nhận với đuôi .jpg .jpeg .png .gif',
            'img_blog.max' => 'Hình ảnh giới hạn dung lượng không quá 2M'
        ]);
        $blog = Blog::find($id);
        $blog->date_blog = $blog->date_blog;
        $blog->titles = $blog->titles;
        $blog->slug = $blog->slug;
        $blog->user_post = 1;
        if($request->description != null){
            $blog->description = $request->description;    
        }else{
            $blog->description = $blog->description;
        }
        if($request->content != null){
            $blog->content = $request->content;   
        }else{
            $blog->description = $blog->content;
        }
        if($request->img_blog != null){
            $blog->img_blog = $this->setNameImage($request->img_blog);   
        }else{
            $blog->img_blog = $blog->img_blog;
        }     
        $blog->save();
        return redirect('/admin/blogs')->with('success','Cập nhật bài viết thành công!');
    }
    public function deleteBlog($id) {
        $blog = Blog::find($id);
        if (!$blog){
            return redirect('/admin/blogs')->with('error','Không tìm thấy bài viết');
        }
        $blog->delete();
        return redirect('/admin/blogs')->with('success','Xóa bài viết thành công!');
    }
}
