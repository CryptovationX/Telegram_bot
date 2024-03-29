@extends("layouts.main")
    @section("title", "Account Setting")
    @section("body")
    @extends("layouts.navbar")
        @section("contents")
        <h3>Account settings</h3>
        <p class="smaller">Set the information to be displayed on your friend lists and chats of users who have added you.</p>
        {!! Form::open() !!}
        <table>
                <tr>
                    <th>{{Form::label('image', 'Profile photo')}}</th>
                    <td>
                        <div id="wrapper">
                            <div class="messagebox left">{{Form::file('image',['id' => 'fileUpload', 'class'=>''])}}</div>
                            <div id="image-holder" class="thumb_image"></div>
                        </div>
                        <span class="smaller left messagebox">The recommended size is 640 × 640 px (up to 3 MB).</span>
                    </td>
                </tr> 
                <tr>
                    <th>{{Form::label('account_name', 'Account name')}}</th>
                    <td>
                        <div class="row" style="margin:0">
                            <div class="messagebox left col-6">{{ Form::text('account_name', null, array("class"=>"setting_textform" )) }} </div>
                            <div style="padding:1% 0 0 1%">{{Form::submit('Save', ["class"=>"searchbox_inside"])}}</div>
                        </div>
                    </td>
                </tr> 
                <tr>
                    <th>{{Form::label('description', 'Description')}}</th>
                    <td>
                        <div class="row" style="margin:0">
                            <div class="messagebox left col-6">{{ Form::text('description', null, array("class"=>"setting_textform" )) }} </div>
                            <div style="padding:1% 0 0 1%">{{Form::submit('Save', ["class"=>"searchbox_inside"])}}</div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>{{Form::label('about_text', 'About text')}}</th>
                    <td>
                        <div class="row" style="margin:0">
                            <div class="messagebox left col-6">{{ Form::text('about_text', null, array("class"=>"setting_textform" )) }} </div>
                            <div style="padding:1% 0 0 1%">{{Form::submit('Save', ["class"=>"searchbox_inside"])}}</div>
                        </div>
                    </td>
                </tr>
            </table> 
            {!! Form::close() !!}
@endsection