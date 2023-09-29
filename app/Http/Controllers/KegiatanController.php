<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Model DB
use App\Models\MstBranches;
use App\Models\Kegiatan;
use App\Models\Rules;

class KegiatanController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->filter;

        $mstbranches = MstBranches::where('is_active', 1)
            ->where('id_institution', 1)
            ->orderByRaw("FIELD(grade, 'D', 'T', 'S') DESC, grade ASC")
            ->get();
        
        $kegiatans = Kegiatan::select('branches.grade', 'branches.city', 'public_infos.*')
            ->leftjoin('branches', 'public_infos.id_branch', 'branches.id');
            
        if($request->filter != null){
            $filter = $request->filter;
            $parts = explode('++', $request->filter);
            $grade = $parts[0];
            $city = $parts[1];
            $kegiatans = $kegiatans->where('branches.grade', $grade)->where('branches.city', $city);
        }

        $kegiatans = $kegiatans->orderBy('public_infos.created_at', 'desc')->paginate(6); 
        $urladmin = Rules::where('rule_name', 'Url Admin')->first()->rule_value;

        return view('kegiatan.index', compact('mstbranches', 'kegiatans', 'urladmin', 'filter'));
    }

    public function detail($titleslug)
    {
        $kegiatan = Kegiatan::select('branches.grade', 'branches.city', 'public_infos.*')
            ->leftjoin('branches', 'public_infos.id_branch', 'branches.id')
            ->where('public_infos.title_slug', $titleslug)
            ->first();

        $urladmin = Rules::where('rule_name', 'Url Admin')->first()->rule_value;

        return view('kegiatan.detail', compact('kegiatan', 'urladmin'));
    }
}
