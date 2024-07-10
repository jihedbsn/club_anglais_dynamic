<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;
use Illuminate\Support\Facades\Log;

class InquiryController extends Controller
{
    public function store(Request $request)
    {
        // Log the incoming request data
        Log::info('Received inquiry request:', $request->all());

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone_number' => 'required|string|max:255',
            'program' => 'required|string',
            'subjects' => 'nullable|string',
            'message' => 'required|string',
        ]);

        // Log the validated data
        Log::info('Validated data:', $validatedData);

        Inquiry::create($validatedData);

        // Log the successful creation
        Log::info('Inquiry created successfully');

        return response()->json(['success' => true, 'message' => 'Inquiry submitted successfully!']);
    }
}
