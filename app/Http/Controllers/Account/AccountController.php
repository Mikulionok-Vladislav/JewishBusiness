<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use Illuminate\Http\Request;

class AccountController extends Controller{

    public function resume(Request $request, $id){
        $resume = Resume::query()->find($id);

        return view('account.resume',[
            'resume' => $resume
        ]);
    }


    public function account()
    {
        $resumes = Resume::all();
        return view('account.account',[
            'resumes' => $resumes
        ]);
    }

    public function notifications()
    {

        return view('account.notifications');
    }

}
