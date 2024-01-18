<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Voter;
 
class VoterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Voter = Voter::orderBy('created_at', 'DESC')->get();
  
        return view('Voters.index', compact('Voter'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Voters.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Voter::create($request->all());
 
        return redirect()->route('Voters')->with('success', 'Voters added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Voter = Voter::findOrFail($id);
  
        return view('Voters.show', compact('Voter'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Voter = Voter::findOrFail($id);
  
        return view('Voters.edit', compact('Voter'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Voter = Voter::findOrFail($id);
  
        $Voter->update($request->all());
  
        return redirect()->route('Voters')->with('success', 'Voter updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Voter = Voter::findOrFail($id);
  
        $Voter->delete();
  
        return redirect()->route('Voters')->with('success', 'Voter deleted successfully');
    }
}