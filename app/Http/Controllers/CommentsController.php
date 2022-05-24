<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;

//use App\Http\Request\CommentFormRequest;
use App\user_comment;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['only' => 'showLoginForm']);
    }

    public function newComment(Request $request){
        
        $comment = new user_comment(array(
            'user_id' => $request->get('user_id'),
            'comentario' => $request->get('comentario'),
            'us_com' => $request->get('us_com'),
            'us_sex' => $request->get('us_sex'),
            'calif' => $request->get('calif')
        ));

        $comment->save();

        return redirect()->back();
    }

}
