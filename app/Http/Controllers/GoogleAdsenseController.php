<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GoogleAdsense;

class GoogleAdsenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adsenses = GoogleAdsense::all();
        return view('panel.admin.google-adsense.index', compact('adsenses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            $adsense = '';
            return view('panel.admin.google-adsense.create', compact('adsense'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $request->validate([
            'adsense_type' => 'required|string|max:255',
            'script_code' => 'required|string',
            'status' => 'required|in:active,deactivated',
        ]);

        
        $adsense = GoogleAdsense::updateOrCreate(
            ['id' => $request->id],  // Condition to check if the record exists
            [                        // Data to update/create
                'script_code' => $request->script_code,
                'adsense_type' => $request->adsense_type,
                'status' => $request->status == 'active' ? 'active' : 'deactivated',
            ]
        );

        return response()->json($adsense, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $adsense = GoogleAdsense::find($id);
        
        if ($adsense) 
        {
            return view('panel.admin.google-adsense.create', compact('adsense'));
        } else {
            return back()->with(['message' => 'Action Successfully', 'type' => 'error']);
        }
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         // Validate request
        $request->validate([
            'adsense_type' => 'string|max:255',
            'script_code' => 'string',
            'status' => 'in:active,disabled',
        ]);

        // Find the Adsense entry and update it
        $adsense = GoogleAdsense::find($id);

        if ($adsense) {
            $adsense->update($request->all());
            return response()->json($adsense);
        } else {
            return response()->json(['message' => 'Not Found'], 404);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       
        $adsense = GoogleAdsense::find($id);

        if ($adsense) 
        {
            $adsense->delete();
            return back()->with(['message' => 'Deleted Successfully', 'type' => 'success']);
        } else {
            return back()->with(['message' => 'Action Successfully', 'type' => 'error']);
        }
    }
}