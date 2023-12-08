<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Issue;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class IssuesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('issues.index',[
            'issues'=>Issue::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('issues.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

Validator::extend('integer_or_fraction', function ($attribute, $value, $parameters, $validator) {
    return preg_match('/^\d+(\.\d+)?$/', $value) || preg_match('/^\d+\/\d+$/', $value);
});

        $request->validate([
            'client_name' => 'required',
            'serial_number' =>  ['required', 'integer', Rule::unique('issues')],
            'pgh' => ['required', 'integer', Rule::unique('issues')],
            'nhis' =>  'required',
            'age' => ['required', 'integer_or_fraction'],
            'adm_unit' => 'required',
            'staff_name' => 'required'
         ]);


        $issue = new Issue;

        $issue->serial_number = $request->input('serial_number');
        $issue->client_name = $request->input('client_name');
        $issue->pgh = $request->input('pgh');
        $issue->nhis = $request->input('nhis');
        $issue->age = $request->input('age');
        $issue->adm_unit = $request->input('adm_unit');
        $issue->staff_name = $request->input('staff_name');

        $issue->save();

        return redirect()->route('issues.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($issue)
    {
        return view('issues.show', [
            'issues' => Issue::findOrFail($issue)
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $issue)
    {
        return view('issues.edit', [
            'issues' => Issue::findOrFail($issue)
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $issue)
    {
        $request->validate([
            'client_name' => 'required',
            'serial_number' =>  ['required', 'integer'],
            'pgh' => ['required', 'integer'],
            'nhis' =>  'required',
            'age' => ['required', 'integer'],
            'adm_unit' => 'required',
            'staff_name' => 'required'
         ]);


        $record = Issue::findOrFail($issue);

        $record->serial_number = $request->input('serial_number');
        $record->client_name = $request->input('client_name');
        $record->pgh = $request->input('pgh');
        $record->nhis = $request->input('nhis');
        $record->age = $request->input('age');
        $record->adm_unit = $request->input('adm_unit');
        $record->staff_name = $request->input('staff_name');

        $record->save();

        return redirect()->route('issues.show', $issue);
    
    }

    /**
     * Remove the specified resource from storage.
     */
}
