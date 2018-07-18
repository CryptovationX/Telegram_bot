@extends("layouts.main")
    @section("title", "Contac Us")
    @section("body")
    @extends("layouts.navbar")
        @section("contents")
        <h3>Contact Us</h3>
        <p class="smaller">If you have any problems, we'll be happy to personally help you. Please fill out this form and we'll be in touch with an answer soon.</p>
        {!! Form::open() !!}
        <table>
            <tr>
                <th>Saltuation</th>
                <td>
                    <div class="row" style="margin:0; padding-left:1.6%;">
                        <div class="dropdownbox">{{Form::select('saltuation', ['Mr' => 'Mr.', 'Mrs' => 'Mrs.', 'Ms'=>'Ms.'], null, ["class"=>"dropdownbox_inside"])}}</div>
                    </div>
                </td>
            </tr> 
            <tr>
                <th>First Name</th>
                <td><div class="messagebox left">{{ Form::text('firstname', null, array("placeholder"=>"First Name", "class"=>"creating_messagebox_inside" )) }}</div></td>
            </tr> 
            <tr>
                <th>Last Name</th>
                <td><div class="messagebox left">{{ Form::text('lastname', null, array("placeholder"=>"Last Name", "class"=>"creating_messagebox_inside" )) }}</div></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><div class="messagebox left">{{ Form::text('email', null, array("placeholder"=>"Email", "class"=>"creating_messagebox_inside" )) }}</div></td>
            </tr> 
            <tr>
                <th>Content</th>
                <td><div class="messagebox left">{{ Form::textarea('content', null, array("placeholder"=>"Enter message","class"=>"replying_inside" )) }}</div></td>
            </tr>
        </table> 
        <br>
        <div class="compose_button_div">{{Form::submit('Submit', ["class"=>"searchbox_inside"], ['id' => 'submit-button'])}}</div>
        {!! Form::close() !!}
@endsection