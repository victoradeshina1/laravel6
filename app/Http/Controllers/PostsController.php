<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($slug){
        $post = \DB::table('posts')->where('slug', $slug)->first();
       
        dd($post);
        /*$posts = [
            'my-first-post' => 'Hi',
            'my-second-post' => 'Bye'
        ];*/

        if(! array_key_exists($post, $posts)){
            abort(404, 'Sorry, that post as not found.');
        }


        return view('post',[
            'post' => $posts[$post]
        ]);
    }
}
