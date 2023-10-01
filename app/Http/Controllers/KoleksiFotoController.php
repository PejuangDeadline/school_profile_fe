<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MstBranches;
use App\Models\Galleries;
use App\Models\Rules;

class KoleksiFotoController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->filter;

        $mstbranches = MstBranches::where('is_active', 1)
            ->where('id_institution', 1)
            ->orderByRaw("FIELD(grade, 'D', 'T', 'S') DESC, grade ASC")
            ->get();
        
        $fotos = Galleries::select('branches.grade', 'branches.city', 'galleries.attachment', 'galleries.created_at')
            ->leftjoin('branches', 'galleries.id_branch', 'branches.id');
            
        if($request->filter != null){
            $filter = $request->filter;
            $parts = explode('++', $request->filter);
            $grade = $parts[0];
            $city = $parts[1];
            $fotos = $fotos->where('branches.grade', $grade)->where('branches.city', $city);
        }

        $fotos = $fotos->orderBy('galleries.created_at', 'desc')->paginate(6);
        $urladmin = Rules::where('rule_name', 'Url Admin')->first()->rule_value;

        return view('koleksifoto.index', compact('mstbranches', 'urladmin', 'fotos', 'filter'));
    }
}
