<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;

use App\comments_general;

class Comments_genController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['only' => 'showLoginForm']);
    }

    public function newCommentGen(Request $request){
        
        $com = new comments_general(array(
            'comentario' => $request->get('comentario'),
            'user_com' => $request->get('user_com'),
            'user_sex' => $request->get('user_sex')
        ));

        $com->save();

        return redirect()->route('comments');
    }
}
