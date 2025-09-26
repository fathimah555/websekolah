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
        return view('events.show', compact('event')); // Ganti dengan view yang sesuai
    }

    public function create()
    {
        return view('events.create', ['isEdit' => false]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'date' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $imageName = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/gambar', $imageName); // Simpan di folder public/gambar
    
        Event::create([
            'title' => $request->title,
            'date' => $request->date,
            'image' => $imageName,
        ]);
    
        return redirect()->route('events.index')->with('success', 'Event created successfully.');
    }
    

    public function edit($id)
    {
        $Event = Event::findOrFail($id);
        return view('events.edit', ['event' => $Event]);
    }

    public function update(Request $request, $id)
    {
        $Event = Event::findOrFail($id);
        $Event->update($request->all());

        return redirect()->route('events.index')->with('success', 'Event berhasil diperbarui');
    }

    public function destroy($id)
    {
        $Event = Event::findOrFail($id);
        $Event->delete();

        return redirect()->route('events.index')->with('success', 'Event berhasil dihapus');
    }

}
