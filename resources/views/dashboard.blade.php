<!DOCTPE html>
<html>
<head>
<title>Admin Login</title>
</head>
<body>
    Welcome to Admin dash
<h1>Table 1</h1>
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
    <h2>Table 2</h2>
    <div class="containner">
    <table border = "1">
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

    </div>
</body>
</html>
