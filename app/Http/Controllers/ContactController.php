<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MstBranches;
use App\Models\MstInstitutions;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $branches = MstBranches::where('is_active', 1)
            ->get();
            
        $institution = MstInstitutions::
            leftjoin('institution_profiles', 'institutions.id', '=', 'institution_profiles.id_institution')
            ->where('institutions.id', 1)->first();

        return view('contact.index', compact('institution', 'branches'));
    }
}
