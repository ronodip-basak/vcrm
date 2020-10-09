<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\ContactPerson;
use App\Models\DecisionMaker;
use App\Models\followup;
use App\Models\Lead;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeadController extends Controller
{
    //
    public function create() {
        //server the view to create a lead
        $current_user = Auth::user();
        $user_list = User::all();
        return view('lead.new', [
            'current_user' => $current_user,
            'user_list' => $user_list
            ]);
    }

    public function store() {
        $lead = new Lead();
        $lead->created_by = Auth::id();
        $lead->assigned_to = Auth::id();
//        $lead->assigned_to = \request('assigned_to');
        try {
            $lead->save();

            $company = new Business();
            $company->name = \request('companyname');
            $company->cell = \request('companycell');
            $company->email = \request('companyemail');
            $company->address1 = \request('companyaddress1');
            $company->address2 = \request('companyaddress2');
            $company->country = \request('companycountry');
            $company->state = \request('companystate');
            $company->zip = \request('companyzip');
            $company->lead_id = $lead->id;
            $company->save();

            $contactperson = new ContactPerson();
            $contactperson->name = \request('contactpersonname');
            $contactperson->cell = \request('contactpersoncell');
            $contactperson->email = \request('contactpersonemail');
            $contactperson->address1 = \request('contactpersonaddress1');
            $contactperson->address2 = \request('contactpersonaddress2');
            $contactperson->country = \request('contactpersoncountry');
            $contactperson->state = \request('contactpersonstate');
            $contactperson->zip = \request('contactpersonzip');
            $contactperson->lead_id = $lead->id;
            $contactperson->save();


            $decisionmaker = new DecisionMaker();
            $decisionmaker->name = \request('decisionmakername');
            $decisionmaker->cell = \request('decisionmakercell');
            $decisionmaker->email = \request('decisionmakeremail');
            $decisionmaker->address1 = \request('decisionmakeraddress');
            $decisionmaker->address2 = \request('decisionmakeraddress2');
            $decisionmaker->country = \request('decisionmakercountry');
            $decisionmaker->state = \request('decisionmakerstate');
            $decisionmaker->zip = \request('decisionmakerzip');
            $decisionmaker->lead_id = $lead->id;
            $decisionmaker->save();

            $followup = new followup();
            $followup->remarks = \request('remarks');
            $followup->next_followup_date = \request('followupdate');
            $followup->followupon = date("Y-m-d");
            $followup->lead_id = $lead->id;
            $followup->save();
        }
        catch (\Exception $exception){
            return $exception->getMessage();
        }



        //$last_record = Lead::latest()->first();
        return redirect('/lead/' . $lead->id);
    }

    public function show(Lead $lead){
        return view('lead.show', [
            'lead' => $lead,
            'disabled' => 'disabled',
        ]);
    }

    public function edit(Lead $lead){
        return view('lead.edit',[
            'lead' => $lead,
            'disabled' => '',
        ]);
    }

    public function followups(){
        return $this->hasMany('App/Model/followup',  'lead_id');
    }
}
