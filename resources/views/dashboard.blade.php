<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <h1>Table 1</h1>
    <table class="table-auto">
    <thead>
    <tr>
    <th>Campaign Id</th>
    <th>Campaign Name</th>
    <th>Type</th>
    <th>GoLive Date</th>
    <th>Status</th>
    <th>Start Date</th>
    <th>End Date</th>
    <th>Total Project Value</th>
    <th>Subscription/AMC Value</th>
    <th>AMC Cloud Charges</th>
    <th>Payment Stage</th>

    </tr>
    </thead>
    
    <tbody>
    @foreach ($posts as $user)
    <tr>
    <td>{{ $user['Campaign Id'] }}</td>
    <td>{{ $user['Campaign Name'] }}</td>
    <td>{{ $user['Type'] }}</td>
    <td>{{ $user['GoLive Date'] }}</td>
    <td>{{ $user['Status'] }}</td>
    <td>{{ $user['Start Date'] }}</td>
    <td>{{ $user['End Date'] }}</td>
    <td>{{ $user['Total Project Value'] }}</td>
    <td>{{ $user['Subscription/AMC Value'] }}</td>
    <td>{{ $user['AMC Cloud Charges'] }}</td>
    <td>{{ $user['Payment Stage'] }}</td>

    </tr>
    @endforeach
    </tbody>
    </table>
    
    <h2>Table 2</h2>
    <table >
    <tr>
    <td>Account name</td>
    <td>Country</td>
    <td>Name</td>
    <td>Designation</td>
    <td>Mobile Number</td>
    <td>Email</td>

    </tr>
    @foreach ($people as $user)
    <tr>
    <td>{{ $user->account_name }}</td>
    <td>{{ $user->country }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->designation }}</td>
    <td>{{ $user->mobile_number }}</td>
    <td>{{ $user->email }}</td>
    </tr>
    @endforeach
    </table>

    </x-app-layout>