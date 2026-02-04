<?php

namespace App\Http\Controllers;

use App\Models\FormEntry;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FormEntryController extends Controller
{
    public function create(): Response
    {
        return response()->view('form-entry');
    }

    public function store(Request $request): Response
    {
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['required', 'string', 'max:100'],
            'mobile' => ['required', 'string', 'max:20'],
            'email' => ['required', 'email', 'max:150'],
            'city' => ['required', 'string', 'max:120'],
            'country' => ['required', 'string', 'max:120'],
            'state' => ['required', 'string', 'max:120'],
        ]);

        $entry = FormEntry::create($validated);

        return response()->json([
            'message' => 'Form entry saved successfully.',
            'data' => $entry,
        ], 201);
    }

    public function index(): Response
    {
        $entries = FormEntry::query()->latest()->get();

        return response()->json([
            'data' => $entries,
        ]);
    }
}
