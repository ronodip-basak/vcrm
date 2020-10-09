@extends('default')

@section('content')
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">Contact Person Name</th>
            <th scope="col">Business Name</th>
            <th scope="col">Decision Maker Name</th>
            <th scope="col">Follow Up Remarks</th>
            <th scope="col">Next Follow Up Date</th>

        </tr>
        </thead>
        <tbody>
        @foreach($leads as $lead)
        <tr>

            <?php $followup = $lead->followups->last(); ?>
            <td>{{ $lead->contactperson->name }}</td>
            <td>{{ $lead->business->name }}</td>
            <td>{{ $lead->decisionmaker->name }}</td>
            <td>{{ $followup->remarks }}</td>
            <td>{{ $followup->next_followup_date }}</td>

        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
