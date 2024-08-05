<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\News;
use Auth;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        return view('client.index', compact('comments'));
    }

    public function show($id)
    {
        $comment = Comment::findOrFail($id);
        return view('comments.show', compact('comment'));
    }

    public function create()
    {
        return view('comments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'new_id' => 'required|exists:news,id',
            'comment' => 'required|string',
        ]);

        Comment::create([
            'new_id' => $request->new_id,
            'user_id' => auth()->id(),
            'comment' => $request->comment,
        ]);

        return back()->with('success', 'Bình luận của bạn đã được gửi.');
    }

    public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        return view('comments.edit', compact('comment'));
    }

    public function update(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);
        $comment->update($request->all());
        return redirect()->route('comments.index');
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();
        return redirect()->route('comments.index');
    }
}
