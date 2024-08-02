<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Posts;
use App\Models\Posts as ModelsPosts;


class PostController extends Controller
{
    public function create_post()
    {
        return view('master.create');
    }

    public function create_traitement(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'content'=>'required',
        ]);

        $post=new ModelsPosts();
        $post->title=$request->title;
        $post->content=$request->content;
        $post->save();

        return redirect('/create');
    }

    // public function liste_post()
    // {
    //     $posts = ModelsPosts::all();
    //     return view('master.add', compact('posts'));
    // }

    public function add_post(){
        $posts = ModelsPosts::all();
        return view('master.add',compact('posts'));
    }

    public function delete($id){
        $posts = ModelsPosts::find($id);
        $posts->delete();
        return redirect()->route('master.add')->with('Commentaire supprimer avec succès ');
    }
    
    public function update($id)
    {
        $posts = ModelsPosts::find($id);
        return view('master.modify', compact('posts'));
    }

    public function modifier_post_traitement(Request $request )
    {
        $request->validate([
            'title'=>'required',
            'content'=>'required',
            
        ]);

        $post= ModelsPosts::find($request->id);
        $post->title=$request->title;
        $post->content=$request->content;
        $post->update();

         return redirect('/add');
    }
}



