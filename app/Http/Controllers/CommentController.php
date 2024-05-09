<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nft;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request, Nft $nft)
    {
        $request->validate([
            'message' => 'required|string',
        ]);

        $comment = new Comment();
        $comment->nft_id = $nft->id;
        $comment->content = $request->input('message');
        $comment->save();

        return redirect()->back()->with('success', 'Comment posted successfully!');
    }
}
