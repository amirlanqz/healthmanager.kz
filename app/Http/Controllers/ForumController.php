<?php

namespace App\Http\Controllers;

use App\Models\ForumApplication;
use Illuminate\Http\Request;

class ForumController extends Controller
{

    public function showForm()
    {
        return view('forum.form');
    }

    public function apply(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'job' => 'required|string|max:255',
            'is_member' => 'required|in:Да,Нет',
            'join_kamz' => 'nullable|string|max:50',
        ]);

        ForumApplication::create($data);

        return redirect()->back()->with('success', '✅ Ваша заявка успешно отправлена!');
    }
}
