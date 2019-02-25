<?php
namespace App\Http\Controllers;
use App\Post;
use DB;
use Illuminate\Http\Request;
use App\Http\Resources\ControllerResource;

class TemplateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function fristshow(){

        return view('template.fristshow');
    }

   public function index(){
       $posts=DB::table('posts')->get();

//       return new ControllerResource($posts);

       return view('template.index',compact('posts'));
    }
    public function about(){
        return view('template.about');
    }
    public function post(){
        return view('template.post');
    }
    public function addpost(){
        return view('template.addpost');
    }


    public function insert(Request $request)
    {
            $post=new Post;
            $image = $request->file('image_name');
            $name = $image->getClientOriginalName();
            $destinationPath = public_path('/img');
            $image->move($destinationPath, $name);
            $post->image_name = $name;
            $post->post_title = $request->post_title;
            $post->post_content = $request->post_content;
            $post->writer_name = $request->writer_name;
            $post->save();
            return back();
    }

    public function delete(Post $id){
        $id->delete();
        return back();
    }

    public function edit(Post $id){
        return view('template.edit',compact('id'));
    }

    public function update(Request $request,Post $id){
        $id->update($request->all());
        return redirect('/'); /* reditrect to route not to view */
    }

}
