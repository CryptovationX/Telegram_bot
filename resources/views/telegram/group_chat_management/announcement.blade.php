@extends("layouts.main")
    @section("title", "Announcement")
    @section("body")
    @extends("layouts.navbar")
        @section("contents")
        <h3>Announcement</h3>
        <span class="smaller">????</span>
        {!! Form::open() !!}
        <table>
            <tr>
                <th>{{ Form::label('heading', "Heading") }}</th>
                <td>
                    <div class="messagebox left">{{ Form::text('heading', null, array("placeholder"=>"Enter message","class"=>"announcement_area" )) }}</div>
                </td>
            </tr>
            <tr>
                <th>{{ Form::label('content', "Content") }}</th>
                <td>
                    <div class="messagebox left">{{ Form::textarea('content', null, array("placeholder"=>"Enter message","class"=>"replying_inside" )) }}</div>
                </td>
            </tr>
            <tr>
                <th>{{ Form::label('file', "Photo") }}</th> <div class="messagebox left">
                <td>
                    <div id="wrapper">
                        <div class="messagebox left">{{ Form::file('file', ['id' => 'attach_file']) }}</div>
                        <div id="image-holder2" class="thumb_image"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class='smaller left' style="padding-left:30px">
                            <p>• For browser uploading, 10 MB max size for photos (JPEG, JPG and PNG allowed) and 50 MB for other files.</p>
                            <p>• For HTTP URL, 5 MB max size for photos (JPEG, JPG and PNG allowed) and 20 MB max for other types of content.</p>
                            <p>• Note: HTTP URL can be directly placed in content box.</p>
                        </div>
                    </div>
                </td>
            </tr>
        </table> 
        <br>
        <div class="compose_button_div">{{Form::submit('Submit', ["class"=>"searchbox_inside"], ['id' => 'submit-button'])}}</div>
        {!! Form::close() !!}
@endsection