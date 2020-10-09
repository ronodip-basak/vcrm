@extends('default')

@section('content')

    <form action="/lead" method="post">
        @csrf
        <div class="form-row">

            <div class="form-group col">
                <h3>Contact Person Details</h3>
                <label for="contactpersonname">Name</label>
                <input type="text" class="form-control" id="contactpersonname" name="contactpersonname" placeholder="John Doe">
                <label for="contactpersoncell">Cell</label>
                <input type="tel" class="form-control" id="contactpersoncell" name="contactpersoncell" placeholder="111 222 3333">
                <label for="contactpersonemail">Email Address</label>
                <input type="contactpersonemail" class="form-control" id="contactpersonemail" name="contactpersonemail" placeholder="user@example.com">
                <label for="contactpersoninputAddress">Address</label>
                <input type="text" class="form-control" id="contactpersoninputAddress" name="contactpersonaddress1" placeholder="1234 Main St">
                <label for="contactpersoninputAddress2">Address</label>
                <input type="text" class="form-control" id="contactpersoninputAddress2" name="contactpersonaddress2" placeholder="1234 Main St">
                <label for="countryId">Country</label>
                <select name="contactpersoncountry" class="form-control countries order-alpha presel-IN " id="countryId">
                    <option value="">Select Country</option>
                </select>

                <label for="stateId">State</label>
                <select name="contactpersonstate" class="form-control states order-alpha" id="stateId">
                    <option value="">Select State</option>
                </select>

                <label for="inputZip">Zip</label>
                <input type="text" name="contactpersonzip" class="form-control" id="inputZip">

            </div>
            <div class="form-group col">
                <h3>Company Details</h3>
                <label for="companyname">Name</label>
                <input type="text" class="form-control" id="companyname" name="companyname" placeholder="Mahindra & Mahindra Ltd.">
                <label for="companycell">Cell</label>
                <input type="tel" class="form-control" id="companycell" name="companycell" placeholder="111 222 3333">
                <label for="companyemail">Email Address</label>
                <input type="companyemail" class="form-control" id="companyemail" name="contactpersonemail" placeholder="user@example.com">
                <label for="companyaddress1">Address</label>
                <input type="text" class="form-control" id="companyaddress1" name="companyaddress1" placeholder="1234 Main St">
                <label for="companyaddress2">Address</label>
                <input type="text" class="form-control" id="companyaddress2" name="companyaddress2" placeholder="1234 Main St">
                <label for="countryId">Country</label>
                <select name="companycountry" class="form-control countries order-alpha presel-IN " id="countryId">
                    <option value="">Select Country</option>
                </select>

                <label for="stateId">State</label>
                <select name="companystate" class="form-control states order-alpha" id="stateId">
                    <option value="">Select State</option>
                </select>

                <label for="companyzip">Zip</label>
                <input type="text" name="companyzip" class="form-control" id="companyzip">
            </div>
            <div class="form-group col">
                <h3>Decision Maker Details</h3>
                <label for="decisionmakername">Name</label>
                <input type="text" class="form-control" id="decisionmakername" name="decisionmakername" placeholder="John Doe">
                <label for="decisionmakercell">Cell</label>
                <input type="tel" class="form-control" id="decisionmakercell" name="decisionmakercell" placeholder="111 222 3333">
                <label for="decisionmakeremail">Email Address</label>
                <input type="email" class="form-control" id="decisionmakeremail" name="decisionmakeremail" placeholder="user@example.com">
                <label for="decisionmakeraddress">Address</label>
                <input type="text" class="form-control" id="decisionmakeraddress" name="decisionmakeraddress" placeholder="1234 Main St">
                <label for="decisionmakeraddress2">Address</label>
                <input type="text" class="form-control" id="decisionmakeraddress2" name="decisionmakeraddress2" placeholder="1234 Main St">
                <label for="countryId">Country</label>
                <select name="decisionmakercountry" class="form-control countries order-alpha presel-IN " id="countryId">
                    <option value="">Select Country</option>
                </select>

                <label for="stateId">State</label>
                <select name="decisionmakerstate" class="form-control states order-alpha" id="stateId">
                    <option value="">Select State</option>
                </select>

                <label for="decisionmakerzip">Zip</label>
                <input type="text" name="decisionmakerzip" class="form-control" id="decisionmakerzip">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="created_by">Created By</label>
                <select readonly name="create_by" class="form-control" id="created_by" required>
                    <option value="{{ $current_user->id }}">{{ $current_user->name }}</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="nextfollowupdate">Next Follw Up Dates</label>
                <input type="date" name="followupdate" class="form-control" id="nextfollowupdate" required>
            </div>

            <div class="form-group col-md-10">
                <label for="nextfollowupremarks">Remarks (For Followup)</label>
                <input type="text" class="form-control" name="remarks" id="nextfollowupremarks" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection

@section('add-js')


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://geodata.solutions/includes/countrystate.js"></script>
@endsection
