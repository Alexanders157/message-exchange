<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MessageController extends Controller
{

    public function create()
    {
        return view('create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
        ], [
            'content.required' => 'Пожалуйста, введите сообщение',
        ]);

        $message = new Message;
        $message->content = $request->content;
        $message->slug = Str::random(10);
        $message->save();

        return redirect()->route('show', $message->slug);
    }

    public function show($slug)
    {
        $message = Message::where('slug', $slug)->firstOrFail();
        return view('show', compact('message'));
    }

}
