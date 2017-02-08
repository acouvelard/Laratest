<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\guestbook;
use DB;

class GuestbookController extends Controller
{
  public function __construct() {     //verif si c'est l'utilisateur est co pour lui faire accéder au formulaire
    $this->middleware('auth');
  }

  public function index()
  {
    $guestbooks = Guestbook::all();
    return view('/home', ['guestbooks' => $guestbooks]);
  }
  public function newMessage(Request $request)
  {
    $message = new guestbook;
    $message->name = $request->name;
    $message->content = $request->content;
    $message->save();
    return redirect('/home');
  }

  public function messageForm()
  {
      return view('/form');
    }


}
//$message->name = $request ->input('name');
