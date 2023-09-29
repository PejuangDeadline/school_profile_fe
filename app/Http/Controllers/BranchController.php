<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Model DB
use App\Models\MstBranches;
use App\Models\Facilities;
use App\Models\Kegiatan;
use App\Models\Galleries;
use App\Models\Rules;

class BranchController extends Controller
{
    public function index($branch_name)
    {
        list($grade, $city) = explode('_', $branch_name, 2); 
        $branch = MstBranches::where('grade', $grade)
            ->where('city', str_replace('_', ' ', $city))
            ->first();
        
        $facilities = Facilities::where('id_branch', $branch->id)->get();

        $kegiatans = Kegiatan::select('branches.grade', 'branches.city', 'public_infos.*')
            ->leftjoin('branches', 'public_infos.id_branch', 'branches.id')
            ->where('branches.id', $branch->id)
            ->take(3)->get();

        $galleries = Galleries::where('id_branch', $branch->id)->take(6)->get();
        $urladmin = Rules::where('rule_name', 'Url Admin')->first()->rule_value;

        $logobranchchange = 1;
            
        return view('branch.index', compact('branch', 'facilities', 'kegiatans', 'galleries', 'urladmin', 'logobranchchange'));
    }
}
