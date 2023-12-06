<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Issue;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Perform search operation based on the query using your model
        // $results = Issue::where('pgh', 'LIKE', "%$query%")->get();

        $results = Issue::where(function ($queryBuilder) use ($query) {
            $queryBuilder->where('client_name', 'LIKE', "%$query%")
                         ->orWhere('pgh', 'LIKE', "%$query%")
                         ->orWhere('adm_unit', 'LIKE', "%$query%");
                         
         })->get();

        // Pass the results to a view
        return view('search_results', compact('results'));
    }
}
