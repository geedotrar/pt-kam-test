<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteLoc;

class SiteLocController extends Controller
{
    public function index()
    {
        // $sites = SiteLoc::all();
        $sites = SiteLoc::paginate(5);

        return view('sites.index', compact('sites'));
    }

    public function create()
    {
        return view('sites.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'site_id' => 'required',
            'kabupaten' => 'required',
            'status' => 'required',
        ]);

        SiteLoc::create($request->all());

        return redirect()->route('sites.index')
            ->with('success', 'Site created successfully');
    }

    public function edit($id)
    {

        $site = SiteLoc::findOrFail($id);

        return view('sites.edit', compact('site'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:On-Air,Off-Air',
        ]);

        $site = SiteLoc::findOrFail($id);
        $site->status = $request->status;
        $site->save();

        return redirect()->route('sites.index')->with('success', 'Status updated successfully');
    }

    public function destroy($id)
    {
        $site = SiteLoc::findOrFail($id);
        $site->delete();

        return redirect()->route('sites.index')
            ->with('success', 'Site deleted successfully');
    }
}
