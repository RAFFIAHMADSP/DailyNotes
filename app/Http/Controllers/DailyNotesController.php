<?php

namespace App\Http\Controllers;

use App\Models\DailyNotes;
use Illuminate\Http\Request;
use Laravel\Prompts\Note;

class DailyNotesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = DailyNotes::latest()->get(); // Ambil semua catatan terbaru
        return view('dashboard', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DailyNotes $dailyNotes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DailyNotes $dailyNotes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DailyNotes $dailyNotes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DailyNotes $dailyNotes)
    {
        //
    }
}
