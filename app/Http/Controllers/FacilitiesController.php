<?php

namespace App\Http\Controllers;

use App\Models\Facilities;
use Illuminate\Http\Request;

class FacilitiesController extends Controller
{
    public function index()
    {
        $facilities = Facilities::all();
        return view('facilities.index', compact('facilities'));
    }

    public function store(Request $request)
    {
        $facility = Facilities::firstOrCreate([
            'facilities_name' => $request->facilities_name,
            'facilities_room' => $request->facilities_room,
        ]);
       return redirect()->route('facilities.index')->with('success', 'Facility created successfully.');

    }

    public function update(Request $request, Facilities $facility)
    {
        $request->validate([
            'facilities_name' => 'required',
            'facilities_room' => 'required',
        ]);

        $facility->update($request->all());

        return redirect()->route('facilities.index')->with('success', 'Facility updated successfully.');
    }

    public function destroy(Facilities $facility)
    {
        $facility->delete();

        return redirect()->route('facilities.index')->with('success', 'Facility deleted successfully.');
    }


}
