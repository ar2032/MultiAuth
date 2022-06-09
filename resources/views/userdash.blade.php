<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for Users') }}
        </h2>
    </x-slot>

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
    @foreach ($posts as $user)
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
</x-app-layout>
