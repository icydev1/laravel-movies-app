<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminDataController extends Controller
{
    public function adminDashboard(){


        // $allUser = User::leftjoin('job_lists','job_lists.user_id','=','users.id')
        // ->where('user_type',0)
        // ->select('job_lists.user_id','users.*',DB::raw('Count(user_id) as count'))
        // ->groupBy('job_lists.user_id','users.id')
        // ->get();

        return view('admin.adminDashboard.adminDashBoard');

    }
}
