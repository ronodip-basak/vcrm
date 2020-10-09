<?php

namespace App\Http\Controllers;

use App\Models\followup;
use App\Models\Lead;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowupController extends Controller
{
    //


    public function index(){
        $user = Auth::user();
        $leads = $user->leads;
        return view('followup.index', [
            'leads' => $leads,
        ]);
    }

    public function indexAll(){
        if (Auth::user()->hasPermission('followup.view_all')){
            $leads = Lead::all();
            return view('followup.index', [
                'leads' => $leads,
            ]);
        } else{
            return abort(404);
        }
    }

    public function create(Lead $lead){
//        dd($lead);
        if ($lead->assigned_to == Auth::id()){
            return view('lead.show', [
                'lead' => $lead,
                'disabled' => 'disabled',
                'followup_form' => '',
            ]);
        }
        else{
            abort(404);
        }

    }
}
