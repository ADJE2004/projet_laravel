<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Comments;
use App\Models\Comments as ModelsComments;
use App\Models\Posts;
use Illuminate\Database\Eloquent\Models;

class CommentController extends Controller
{
    public function liste_comment()
    {
        $comments = ModelsComments::all();
        return view('master.index', compact('comments'));
    }

    public function ajouter_comment()
    {
        $posts = Posts::all();
        return view('master.ajouter', compact('posts'));
    }

    public function ajouter_comment_traitement(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'content'=>'required',
            'author_name'=>'required',
            'post_id'=>'required|exists:Posts,id',
            
        ]);

        $post=new ModelsComments();
        $post->title=$request->title;
        $post->content=$request->content;
        $post->author_name=$request->author_name;
        $post->post_id=$request->post_id;
        $post->save();

         return redirect('ajouter');
    }

    public function delete($id){
        $comments = ModelsComments::find($id);
        $comments->delete();
        return redirect()->route('master.index')->with('Commentaire supprimer avec succès ');
    }

    public function update($id)
    {
        $comments = ModelsComments::find($id);
        $posts = Posts::all();
        return view('master.modifier', compact('comments', 'posts'));
    }

    public function modifier_comment_traitement(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'content'=>'required',
            'author_name'=>'required',
            'post_id'=>'required|exists:Posts,id',
            
        ]);

        $post= ModelsComments::find($request->id);
        $post->title=$request->title;
        $post->content=$request->content;
        $post->author_name=$request->author_name;
        $post->post_id=$request->post_id;
        $post->update();

         return redirect('/');
    }
}
