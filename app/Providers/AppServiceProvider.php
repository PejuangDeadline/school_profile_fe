<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\MstBranches;
use App\Models\MstInstitutions;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Using a closure based composer...
        view()->composer('master.master', function ($view) {
            $mstbranches = MstBranches::where('is_active', 1)
                ->where('id_institution', 1)
                ->orderByRaw("FIELD(grade, 'D', 'T', 'S') DESC, grade ASC")
                ->get();

            $institutions = MstInstitutions::select('institution_profiles.*')
                ->leftjoin('institution_profiles', 'institutions.id', '=', 'institution_profiles.id_institution')
                ->where('institutions.id', 1)->first();

            $logobranch = 0;

            $view->with([
                'mstbranches' => $mstbranches,
                'institutions' => $institutions,
                'logobranch' => $logobranch
            ]);
        });
    }
}
