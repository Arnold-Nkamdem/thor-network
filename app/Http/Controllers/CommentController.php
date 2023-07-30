<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::orderBy('created_at', 'asc')->paginate(10);

        return response()->view('pages.comment', compact('comments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation flieds
        $validator = Validator::make($request->all(), [
            'comment' => 'required|string|max:255',
            'post_id' => 'required|integer',
            'user_id' => 'required|integer',
            'comment_id' => 'nullable|integer',
        ]);

        if ($validator->fails()) {
            return abort(401);
        }

        $validated = $validator->validated();

        // dd($validated);

        // Create comment
        if (isset($validated['comment_id'])) {
            comment::create([
                'comment' => $validated['comment'],
                'post_id' => $validated['post_id'],
                'user_id' => $validated['user_id'],
                'comment_id' => $validated['comment_id'],
            ]);
        } else {
            comment::create([
                'comment' => $validated['comment'],
                'post_id' => $validated['post_id'],
                'user_id' => $validated['user_id'],
            ]);
        }

        return redirect()->route('network');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        return response()->view('comments.show', [
            'comment' => comment::findOrFail($comment),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        // Validation flieds
        $validator = Validator::make($request->all(), [
            'comment' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return abort(401);
        }

        $validated = $validator->validated();

        // Update comment
        $comment->update($validated);

        return redirect()->route('network');
    }

    /**
     * Update the specified resource in storage.
     */
    public function changeStatus(Comment $comment)
    {
        if ( $comment->status == 'enabled') {
             $comment->status = 'disabled';
        } elseif ( $comment->status == 'disabled') {
             $comment->status = 'enabled';
        }

        // Change comment status
        $comment->update(['status', $comment->status]);

        return redirect()->route('network');
    }

    /**
     * Update the specified resource in storage.
     */
    public function changeStatus1(Comment $comment)
    {
        if ( $comment->status == 'enabled') {
             $comment->status = 'disabled';
        } elseif ( $comment->status == 'disabled') {
             $comment->status = 'enabled';
        }

        // Change comment status
        $comment->update(['status', $comment->status]);

        return redirect()->route('comments.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        // We delete comment
        $comment->delete();

        return redirect()->route('network');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy1(Comment $comment)
    {
        // We delete comment
        $comment->delete();

        return redirect()->route('comments.index');
    }
}
