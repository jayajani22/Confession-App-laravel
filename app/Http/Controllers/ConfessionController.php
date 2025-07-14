<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Confession;

class ConfessionController extends Controller
{
    public function create()
    {
        return view('confess');
    }

    public function store(Request $request)
    {
        $request->validate([
            'city' => 'required',
            'title' => 'required',
            'message' => 'required',
            'code' => 'required'
        ]);

        Confession::create([
            'city' => $request->city,
            'title' => $request->title,
            'message' => $request->message,
            'code' => $request->code,
        ]);

        return redirect('/confessions')->with('success', 'Confession submitted successfully!');
    }

    public function index()
    {
        $confessions = Confession::all();
        return view('list', compact('confessions'));
    }

    public function destroy(Request $request, $id)
    {
        $confess = Confession::findOrFail($id);

        if ($confess->code === $request->code) {
            $confess->delete();
            return redirect('/confessions')->with('success', 'Confession deleted successfully!');
        } else {
            return redirect('/confessions')->with('success', 'Wrong code. You cannot delete this confession.');
        }
    }
}
