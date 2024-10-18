<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all(); // Mengambil semua data events
        return view('events.index', compact('events')); // Pastikan 'events' bukan 'event'
    }

    public function show($id)
{
    $event = Event::findOrFail($id); // Ambil event berdasarkan ID
    return view('event.show', compact('event')); // Ganti dengan view yang sesuai
}

}
