<?php

namespace App\Http\Controllers\Candidates;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use Illuminate\Http\Request;

class CandidatesController extends Controller{






    public function addresume(){

        return view('candidates.add-resume');
}

public function store(Request $request){
Resume::query()->create($request->all());

    return view('welcome');
}
}
