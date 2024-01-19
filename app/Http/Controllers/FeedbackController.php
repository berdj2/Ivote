<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function showFeedbackForm()
    {
        return view('feedback');
    }

    public function submitFeedback(Request $request)
    {
        // Handle feedback submission logic here
        // You can store the feedback in the database or send it via email

        return redirect()->route('feedback.form')->with('success', 'Thank you for your feedback!');
    }
}