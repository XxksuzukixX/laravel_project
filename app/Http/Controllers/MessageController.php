<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        return view('chat');
    }

    public function fetch(Request $request)
    {
        $messages = Message::where(function($q) use ($request) {
            $q->where('sender_id', auth()->id())
            ->where('receiver_id', $request->receiver_id);
        })->orWhere(function($q) use ($request) {
            $q->where('sender_id', $request->receiver_id)
            ->where('receiver_id', auth()->id());
        })->orderBy('created_at', 'asc')->get();

        return response()->json($messages);
    }
    // public function fetch()
    // {
    //     $messages = Message::where(function($q){
    //         $q->where('sender_id', 1)->where('receiver_id', 2);
    //     })->orWhere(function($q){
    //         $q->where('sender_id', 2)->where('receiver_id', 1);
    //     })->orderBy('created_at','asc')->get();
    
    //     return response()->json($messages);


    // }

    public function send(Request $request)
    {
        $message = Message::create([
            'sender_id' => $request->sender_id,
            'receiver_id' => $request->receiver_id,
            'content' => $request->content,
        ]);

        return response()->json($message);
    }
}
