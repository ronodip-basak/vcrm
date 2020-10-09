@extends('default')

@section('content')

    <form action="/lead" method="post">
        @csrf
        <div class="form-row">

            <div class="form-group col">
                <h3>Contact Person Details</h3>
                <label for="contactpersonname">Name</label>
                <input type="text" class="form-control" id="contactpersonname" value="{{ $lead->contactperson->name }}" name="contactpersonname" placeholder="John Doe" {{ $disabled }}>
                <label for="contactpersoncell">Cell</label>
                <input type="tel" class="form-control" value="{{ $lead->contactperson->cell }}" id="contactpersoncell" name="contactpersoncell" placeholder="111 222 3333" {{ $disabled }}>
                <label for="contactpersonemail">Email Address</label>
                <input type="contactpersonemail" value="{{ $lead->contactperson->email }}" class="form-control" id="contactpersonemail" name="contactpersonemail" placeholder="user@example.com" {{ $disabled }}>
                <label for="contactpersoninputAddress">Address</label>
                <input type="text" class="form-control" value="{{ $lead->contactperson->address1 }}" id="contactpersoninputAddress" name="contactpersonaddress1" placeholder="1234 Main St" {{ $disabled }}>
                <label for="contactpersoninputAddress2">Address</label>
                <input type="text" class="form-control" value="{{ $lead->contactperson->address2 }}" id="contactpersoninputAddress2" name="contactpersonaddress2" placeholder="1234 Main St" {{ $disabled }}>
                <label for="countryId">Country</label>
                <select name="contactpersoncountry" class="form-control countries order-alpha" id="countryId" {{ $disabled }}>
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
                <input type="text" class="form-control" value="{{ $lead->business->name }}" id="companyname" name="companyname" placeholder="Mahindra & Mahindra Ltd." {{ $disabled }}>
                <label for="companycell">Cell</label>
                <input type="tel" class="form-control" value="{{ $lead->business->cell }}" id="companycell" name="companycell" placeholder="111 222 3333" {{ $disabled }}>
                <label for="companyemail">Email Address</label>
                <input type="companyemail" class="form-control" value="{{ $lead->business->email }}" id="companyemail" name="contactpersonemail" placeholder="user@example.com" {{ $disabled }}>
                <label for="companyaddress1">Address</label>
                <input type="text" class="form-control" value="{{ $lead->business->address1 }}" id="companyaddress1" name="companyaddress1" placeholder="1234 Main St" {{ $disabled }}>
                <label for="companyaddress2">Address</label>
                <input type="text" class="form-control" value="{{ $lead->business->address2 }}" id="companyaddress2" name="companyaddress2" placeholder="1234 Main St" {{ $disabled }}>
                <label for="countryId">Country</label>
                <select name="companycountry" class="form-control countries order-alpha" id="countryId" {{ $disabled }}>
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
                <input type="text" value="{{ $lead->decisionmaker->name }}" class="form-control" id="decisionmakername" name="decisionmakername" placeholder="John Doe" {{ $disabled }}>
                <label for="decisionmakercell">Cell</label>
                <input type="tel" class="form-control" value="{{ $lead->decisionmaker->cell }}" id="decisionmakercell" name="decisionmakercell" placeholder="111 222 3333" {{ $disabled }}>
                <label for="decisionmakeremail">Email Address</label>
                <input type="email" class="form-control" value="{{ $lead->decisionmaker->email }}" id="decisionmakeremail" name="decisionmakeremail" placeholder="user@example.com" {{ $disabled }}>
                <label for="decisionmakeraddress">Address</label>
                <input type="text" class="form-control" value="{{ $lead->decisionmaker->address1 }}" id="decisionmakeraddress" name="decisionmakeraddress" placeholder="1234 Main St" {{ $disabled }}>
                <label for="decisionmakeraddress2">Address</label>
                <input type="text" class="form-control" value="{{ $lead->decisionmaker->address2 }}" id="decisionmakeraddress2" name="decisionmakeraddress2" placeholder="1234 Main St" {{ $disabled }}>
                <label for="countryId">Country</label>
                <select name="decisionmakercountry" class="form-control countries order-alpha" id="countryId" {{ $disabled }}>
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



        <button type="submit" class="btn btn-primary">Update</button>

    </form>
@endsection



@section('add-js')


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://geodata.solutions/includes/countrystate.js"></script>
@endsection
