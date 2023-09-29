<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query', '');

        $listsearch = Kegiatan::where('content', 'LIKE', '%'.$query.'%')
            ->orderBy('created_at', 'desc')->paginate(6);
        
        return view('searchresult.index', compact('query', 'listsearch'));
    }
}
