<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // or whatever model you're searching

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        $results = User::where('title', 'like', "%$query%")
                        ->orWhere('description', 'like', "%$query%")
                        ->get();

        return view('search.results', compact('results', 'query'));
    }
}
