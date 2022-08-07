<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function addPost(){
        return "hello";
    }

    public function storePost(Request $request){
        try{
            $post = new Post();
            $post->title = $request->title;
            $post->description = $request->description;
            $post->image = $request->image;
            $post->document = $request->document;
            if($request->hasFile('image')){
                $file = $request->file('image');
                $filename = $file->getClientOriginalName();
                $picture = \date('His').'-'.$filename;
                $file->move(\public_path('upload'),$picture);
            } else{
                return "select image first";
            }

            if($request->hasFile('document')){
                $file = $request->file('document');
                $filename = $file->getClientOriginalName();
                $docfile = \date('His').'-'.$filename;
                $file->move(\public_path('upload/doc'),$docfile);
            } else{
                return "select file first";
            }
            $post->save();
            return response([
                'post' => $post,
                'message' => 'post created'
            ]);

        } catch(Exception $ex){
            return redirect([
                'message' => $ex->getMessage()
            ]);
        }
    }
}
