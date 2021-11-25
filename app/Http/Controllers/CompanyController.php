<?php

namespace App\Http\Controllers;

use App\Models\Company;

class CompanyController extends Controller
{
    public function __invoke()
    {
        $companies = Company::all();
        return view('companies.index', compact('companies'));
    }
}
