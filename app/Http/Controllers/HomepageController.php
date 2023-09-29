<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

//Model DB
use App\Models\MstInstitutions;
use App\Models\InstitutionProfiles;
use App\Models\MstBranches;
use App\Models\Galleries;
use App\Models\Cultures;
use App\Models\Advantages;
use App\Models\Visions;
use App\Models\Rules;

class HomepageController extends Controller
{
    public function homepageinstitutions()
    {
        $institutions = MstInstitutions::
            leftjoin('institution_profiles', 'institutions.id', '=', 'institution_profiles.id_institution')
            ->where('institutions.id', 1)->first();
        $visions = Visions::where('id_institution', 1)->get();
        $advantages = Advantages::where('id_institution', 1)->get();
        $cultures = Cultures::where('id_institution', 1)->get();

        // Get Foto In All Branch (Limit 6)
        $distinctBranches = Galleries::select('id_branch')->distinct()->limit(6)->pluck('id_branch')->toArray();
        // Fetch galleries based on the distinct id_branch values.
        $galleries = Galleries::whereIn('id_branch', $distinctBranches)->take(6)->get();
        // If the result is less than 6, get additional rows.
        if ($galleries->count() < 6) {
            $remainingCount = 6 - $galleries->count();
            $additionalGalleries = Galleries::whereNotIn('id_branch', $distinctBranches)
                ->take($remainingCount)
                ->get();
            // Merge the results.
            $galleries = $galleries->concat($additionalGalleries);
        }

        $urladmin = Rules::where('rule_name', 'Url Admin')->first()->rule_value;

        return view('institutions.index', compact('institutions', 'visions', 'advantages', 'cultures', 'urladmin', 'galleries'));
    }
}
