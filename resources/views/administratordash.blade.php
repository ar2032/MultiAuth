<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for Adminstrator') }}
        </h2>
    </x-slot>

    <div class="containner">
    <table border = "1">
    <tr>
    <td>Campaign Id</td>
    <td>Campaign Name</td>
    <td>Type</td>
    <td>GoLive Date</td>
    <td>Status</td>
    <td>Start Date</td>
    <td>End Date</td>
    <td>Total Project Value</td>
    <td>Subscription/AMC Value</td>
    <td>AMC Cloud Charges</td>
    <td>Payment Stage</td>

    </tr>
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
    </table>

    </div>
</x-app-layout>
