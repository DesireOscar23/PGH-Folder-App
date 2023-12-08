<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;

class FolderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('folders.index',[
            'folders'=>Folder::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('folders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
             'no_of_folders' => ['required', 'integer'],
             'staff_name' => 'required'
         ]);

        $folder = new Folder;
        
        $folder->no_of_folders = $request->input('no_of_folders');
        $folder->staff_name = $request->input('staff_name');

        $folder->save();

        return redirect()->route('folders.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
