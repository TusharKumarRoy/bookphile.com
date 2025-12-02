<?php

namespace App\Http\Controllers\Api;

use App\Models\ReadingStatus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReadingStatusController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
            'status' => 'required|in:want_to_read,currently_reading,finished_reading',
        ]);

        $readingStatus = ReadingStatus::updateOrCreate(
            [
                'user_id' => auth()->id(),
                'book_id' => $request->book_id,
            ],
            [
                'status' => $request->status,
                'started_reading' => $request->status === 'currently_reading' ? now() : null,
                'finished_reading' => $request->status === 'finished_reading' ? now() : null,
            ]
            );

            return response()->json([
                'success' => true,
                'status' => $readingStatus->status,
                'message' => 'Reading status updated!'
            ]);
    }

    public function destroy(Request $request)
    {
        ReadingStatus::where('user_id',auth()->id())
            ->where('book_id', $request->book_id)
            ->delete();
        
        return response()->json([
            'success' => true,
            'message' => 'Reading status removed!'
        ]);
    }
}
