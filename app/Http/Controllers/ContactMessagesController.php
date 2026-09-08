<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactMessages = ContactMessage::all();
        return view('admin.contact-messages.index', compact('contactMessages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'request_type' => 'required|in:preventivo,collaborazione,lavoro,informazioni,altro',
            'message' => 'required|string',
        ]);

        ContactMessage::create($data);

        return response()->json([
            'message' => 'Il tuo messaggio è stato inviato correttamente.',
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactMessage $contactMessage)
    {
        if (! $contactMessage->is_read) {
            $contactMessage->update(['is_read' => true]);
        }
        return view('admin.contact-messages.show', compact('contactMessage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactMessage $contactMessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactMessage $contactMessage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactMessage $contactMessage)
    {
        $contactMessage->delete();

        return redirect()->route('admin.contact-messages.index')
            ->with('success', 'Messaggio eliminato con successo.');
    }
}
