@extends("layouts.main")
    @section("title", "Keyword Reply")
    @section("body")
    @extends("layouts.navbar")
        @section("contents")
        <h3>Keyword Reply Message</h3>
        <p class="smaller">You can set a message to send to users when they input specific keywords in chats.</p>
        <div class="row button_row">
            <div class="col-12 compose_button_div"><a href="/bot/keyword_reply_message" class="create_compose_button_box">Back</a></div>
        </div>
        {!! Form::open() !!}
        <table>
            <tr>
                {{-- Rely on the auto reply message creator code (auto_reply_message_creating.blade.php) --}}
                <td>Main Keyword</td>
                <td><div class="messagebox left">{{ Form::text('Keyword', null, array("class"=>"creating_messagebox_inside" )) }}</div></td>
            </tr>
            <tr>
                <td>Additional Keywords</td>
                <td>
                    <div class="field_wrapper messagebox left">
                        <div>
                            {{ Form::text('Keyword', null, array("class"=>"creating_messagebox_inside" )) }}
                            <a href="javascript:void(0);" class="add_button" title="Add field"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Replying</td>
                <td>
                    <div class="messagebox left">{{ Form::textarea('Keyword', null, array("placeholder"=>"Enter message","class"=>"replying_inside" )) }}</div>
                </td>
            </tr>
            <tr>
                <td>Replying with image</td>
                <td>
                    <div id="wrapper">
                        <div class="messagebox left">{{Form::file('image',['id' => 'fileUpload', 'class'=>''])}}</div>
                        <div id="image-holder" class="thumb_image"></div>
                    </div>
                </td>
            </tr>
        </table> 
            <br>
        <div class="compose_button_div">{{Form::submit('Save', ["class"=>"searchbox_inside"])}}</div>
        {!! Form::close() !!}
@endsection