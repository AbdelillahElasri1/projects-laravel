<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer; 

class ComputersControllers extends Controller
{
    // array of static data
    // private static function getData(){
    //    return [
    //         ['id' => 1, 'name' => 'LG', 'origin' => 'koria'],
    //         ['id' => 2, 'name' => 'HP', 'origin' => 'USA'],
    //         ['id' => 3, 'name' => 'Siemens', 'origin' => 'Germany'],
    //         ['id' => 4, 'name' => 'mac os', 'origin' => 'USA'],
    //         ['id' => 5, 'name' => 'Lenovo', 'origin' => 'France'],
    //    ];
    // }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('computers.index', [
            'computers' => Computer::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('computers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'computer-name' => 'required',
            'computer-origin' => 'required',
            'computer-price' => 'required|integer'
        ]);

        $computer = new Computer;
        $computer->name = strip_tags($request->input('computer-name'));
        $computer->origin = strip_tags($request->input('computer-origin'));
        $computer->price = strip_tags($request->input('computer-price'));
        
        $computer->save();
        return redirect()->route('computers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $index = Computer::findOrFail($id);
        
        return view('computers.show', [
            'computer' => $index,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $index = Computer::findOrFail($id);
        return view('computers.edit', [
            'computer' => $index
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    { 
        $request->validate([
            'computer-name' => 'required',
            'computer-origin' => 'required',
            'computer-price' => 'required|integer'
        ]);

        $update = Computer::findOrFail($id);
        $update->name = strip_tags($request->input('computer-name'));
        $update->origin = strip_tags($request->input('computer-origin'));
        $update->price = strip_tags($request->input('computer-price'));
        
        $update->save();
        return redirect()->route('computers.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Computer::findOrFail($id);
        $delete->delete();
        return redirect()->route('computers.index');
    }
}
