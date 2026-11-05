<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Prospect;
use Illuminate\Http\Request;

class ProspectController extends Controller
{
    /**
     * Menampilkan semua data prospek
     */
    public function index()
    {
        $prospects = Prospect::latest()->get();

        return response()->json([
            'success' => true,
            'message' => 'Data Prospek',
            'data' => $prospects,
        ]);
    }

    /**
     * Menambahkan prospek baru
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email',
            'source' => 'required|string|max:100',
            'status' => 'required|string|max:50',
            'notes' => 'nullable|string',
        ]);

        $prospect = Prospect::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Prospek berhasil ditambahkan',
            'data' => $prospect,
        ], 201);
    }
}