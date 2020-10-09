@extends('default')

@section('content')

    <div id="lead-details">
        <div class="form-row">

            <div class="form-group col">
                <h3>Contact Person Details</h3>
                <label for="contactpersonname">Name</label>
                <input type="text" class="form-control" id="contactpersonname" value="{{ $lead->contactperson->name }}" name="contactpersonname" {{ $disabled }}>
                <label for="contactpersoncell">Cell</label>
                <input type="tel" class="form-control" value="{{ $lead->contactperson->cell }}" id="contactpersoncell" name="contactpersoncell" {{ $disabled }}>
                <label for="contactpersonemail">Email Address</label>
                <input type="contactpersonemail" value="{{ $lead->contactperson->email }}" class="form-control" id="contactpersonemail" name="contactpersonemail" {{ $disabled }}>
                <label for="contactpersoninputAddress">Address</label>
                <input type="text" class="form-control" value="{{ $lead->contactperson->address1 }}" id="contactpersoninputAddress" name="contactpersonaddress1" {{ $disabled }}>
                <label for="contactpersoninputAddress2">Address</label>
                <input type="text" class="form-control" value="{{ $lead->contactperson->address2 }}" id="contactpersoninputAddress2" name="contactpersonaddress2" {{ $disabled }}>
                <label for="countryId">Country</label>
                <select name="contactpersoncountry" class="form-control countries order-alpha presel-IN " id="countryId" {{ $disabled }}>
                    <option value="{{ $lead->contactperson->country }}">{{ $lead->contactperson->country }}</option>
                </select>

                <label for="stateId">State</label>
                <select name="contactpersonstate" class="form-control states order-alpha" id="stateId" {{ $disabled }}>
                    <option value="{{ $lead->contactperson->state }}">{{ $lead->contactperson->state }}</option>
                </select>

                <label for="inputZip">Zip</label>
                <input type="text" value="{{ $lead->contactperson->zip }}" name="contactpersonzip" class="form-control" id="inputZip" {{ $disabled }}>

            </div>
            <div class="form-group col">
                <h3>Company Details</h3>
                <label for="companyname">Name</label>
                <input type="text" class="form-control" value="{{ $lead->business->name }}" id="companyname" name="companyname" {{ $disabled }}>
                <label for="companycell">Cell</label>
                <input type="tel" class="form-control" value="{{ $lead->business->cell }}" id="companycell" name="companycell" {{ $disabled }}>
                <label for="companyemail">Email Address</label>
                <input type="companyemail" class="form-control" value="{{ $lead->business->email }}" id="companyemail" name="contactpersonemail" {{ $disabled }}>
                <label for="companyaddress1">Address</label>
                <input type="text" class="form-control" value="{{ $lead->business->address1 }}" id="companyaddress1" name="companyaddress1" {{ $disabled }}>
                <label for="companyaddress2">Address</label>
                <input type="text" class="form-control" value="{{ $lead->business->address2 }}" id="companyaddress2" name="companyaddress2" {{ $disabled }}>
                <label for="countryId">Country</label>
                <select name="companycountry" class="form-control countries order-alpha presel-IN " id="countryId" {{ $disabled }}>
                    <option value="{{ $lead->business->country }}">{{ $lead->business->country }}</option>
                </select>

                <label for="stateId">State</label>
                <select name="companystate" class="form-control states order-alpha" id="stateId" {{ $disabled }}>
                    <option value="{{ $lead->business->state }}">{{ $lead->business->state }}</option>
                </select>

                <label for="companyzip">Zip</label>
                <input type="text" name="companyzip" value="{{ $lead->business->zip }}" class="form-control" id="companyzip" {{ $disabled }}>
            </div>
            <div class="form-group col">
                <h3>Decision Maker Details</h3>
                <label for="decisionmakername">Name</label>
                <input type="text" value="{{ $lead->decisionmaker->name }}" class="form-control" id="decisionmakername" name="decisionmakername" {{ $disabled }}>
                <label for="decisionmakercell">Cell</label>
                <input type="tel" class="form-control" value="{{ $lead->decisionmaker->cell }}" id="decisionmakercell" name="decisionmakercell" {{ $disabled }}>
                <label for="decisionmakeremail">Email Address</label>
                <input type="email" class="form-control" value="{{ $lead->decisionmaker->email }}" id="decisionmakeremail" name="decisionmakeremail" {{ $disabled }}>
                <label for="decisionmakeraddress">Address</label>
                <input type="text" class="form-control" value="{{ $lead->decisionmaker->address1 }}" id="decisionmakeraddress" name="decisionmakeraddress" {{ $disabled }}>
                <label for="decisionmakeraddress2">Address</label>
                <input type="text" class="form-control" value="{{ $lead->decisionmaker->address2 }}" id="decisionmakeraddress2" name="decisionmakeraddress2" {{ $disabled }}>
                <label for="countryId">Country</label>
                <select name="decisionmakercountry" class="form-control countries order-alpha presel-IN " id="countryId" {{ $disabled }}>
                    <option value="{{ $lead->decisionmaker->country }}">{{ $lead->decisionmaker->country }}</option>
                </select>

                <label for="stateId">State</label>
                <select name="decisionmakerstate" class="form-control states order-alpha" id="stateId" {{ $disabled }}>
                    <option value="{{ $lead->decisionmaker->state }}">{{ $lead->decisionmaker->state }}</option>
                </select>

                <label for="decisionmakerzip">Zip</label>
                <input type="text" value="{{ $lead->decisionmaker->zip }}" name="decisionmakerzip" class="form-control" id="decisionmakerzip" {{ $disabled }}>
            </div>
        </div>

{{--        <div class="form-row">--}}
{{--            <div class="form-group col-md-6">--}}
{{--                <label for="created_by">Created By</label>--}}
{{--                <select readonly name="create_by" class="form-control" id="created_by" required>--}}
{{--                    <option value="{{ $current_user->id }}">{{ $current_user->name }}</option>--}}
{{--                </select>--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="form-row">
            @if(\Illuminate\Support\Facades\Auth::id() == $lead->created_by)
            <div class="form-group col-md-6">
                <label for="created_by">Created By</label>
                <input class="form-control" id="created_by" value="{{ \Illuminate\Support\Facades\Auth::user()->name }}" {{ $disabled }}>
            </div>
            @endif

            @if(\Illuminate\Support\Facades\Auth::id() == $lead->assigned_to)
                <div class="form-group col-md-6">
                    <label for="assigned_to">Assigned To</label>
                    <select name="assigned_to" class="form-control" id="assigned_to" {{ $disabled }}>
                        <option value="{{ \Illuminate\Support\Facades\Auth::id() }}" selected>{{ \Illuminate\Support\Facades\Auth::user()->name }}</option>
                    </select>
                </div>
            @endif
{{--            <div class="form-group col-md-2">--}}
{{--                <label for="nextfollowupdate">Next Follw Up Dates</label>--}}
{{--                <input type="date" name="followupdate" class="form-control" id="nextfollowupdate" required {{ $disabled }}>--}}
{{--            </div>--}}

{{--            <div class="form-group col-md-10">--}}
{{--                <label for="nextfollowupremarks">Remarks (For Followup)</label>--}}
{{--                <input type="text" class="form-control" name="remarks" id="nextfollowupremarks" {{ $disabled }}>--}}
{{--            </div>--}}
        </div>
    </div>

    </br>
    <div class="container table-responsive" id="follow-up-history" style="border: 1px solid black;">
        <label for="follow-up-history-table">Follow Up History</label>
        <table class="table table-bordered" id="follow-up-history-table">
            <thead>
            <tr>
                <th scope="col">Follow Up Date</th>
                <th scope="col">Remarks</th>
            </tr>
            </thead>
            <tbody>
                @foreach($lead->followups as $followup)
                    <tr>
                        <td>{{ $followup->followupon }}</td>
                        <td>{{ $followup->remarks }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </br>
    @if(isset($followup_form))
        <div class="container" id="follow-up" style="border: 1px solid black">
            <form method="POST" action="/followups">
                <input hidden value="{{ $lead->id }}" name="user_id">
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="nextfollowupdate">Next Follw Up Dates</label>
                        <input type="date" name="followupdate" class="form-control" id="nextfollowupdate" required>
                    </div>

                    <div class="form-group col-md-10">
                        <label for="nextfollowupremarks">Remarks (For Followup)</label>
                        <input type="text" class="form-control" name="remarks" id="nextfollowupremarks" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Followup</button>
                </div>
            </form>
            </br>
        </div>
        </br>
    @endif


@endsection
