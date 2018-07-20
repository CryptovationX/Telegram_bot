@extends("layouts.main")
    @section("title", "Registered Information")
    @section("body")
    @extends("layouts.navbar")
        @section("contents")
        <h3>Registered Information</h3> <br>
        <div class="col-12">
            <h5>Account Information</h5>
        </div>
        <table>
            <tr><th class="account_information">{{Form::label('firstname', 'First Name')}}</th><td class="td_intable">Autoreply</td></tr>
            <tr><th class="account_information">{{Form::label('lastname', 'Last Name')}}</th><td class="td_intable">CryptovationX</td></tr> 
            <tr><th class="account_information">{{Form::label('username', 'Username')}}</th><td class="td_intable">@autoreplybot</td></tr>
            <tr><th class="account_information">{{Form::label('company', 'Company')}}</th><td class="td_intable">Cryptovation</td></tr>
            <tr><th class="account_information">{{Form::label('package', 'Package')}}</th><td class="td_intable">C</td></tr>
        </table> 
@endsection