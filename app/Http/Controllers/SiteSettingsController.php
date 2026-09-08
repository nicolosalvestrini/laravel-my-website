<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siteSettings = SiteSetting::all();
        return view('admin.site-settings.index', compact('siteSettings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.site-settings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'key' => 'required|string|max:255|unique:site_settings,key',
            'value' => 'nullable|string',
        ]);

        SiteSetting::create($data);

        return redirect()->route('admin.site-settings.index')
            ->with('success', 'Impostazione del sito creata con successo.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SiteSetting $siteSetting)
    {
        return view('admin.site-settings.show', compact('siteSetting'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SiteSetting $siteSetting)
    {
        return view('admin.site-settings.edit', compact('siteSetting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SiteSetting $siteSetting)
    {
        $data = $request->validate([
            'key' => 'required|string|max:255|unique:site_settings,key,' . $siteSetting->id,
            'value' => 'nullable|string',
        ]);

        $siteSetting->update($data);

        return redirect()->route('admin.site-settings.index')
            ->with('success', 'Impostazione del sito aggiornata con successo.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SiteSetting $siteSetting)
    {
        $siteSetting->delete();

        return redirect()->route('admin.site-settings.index')
            ->with('success', 'Impostazione del sito eliminata con successo.');
    }
}
