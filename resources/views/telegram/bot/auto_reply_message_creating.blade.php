@extends("layouts.main")
    @section("title", "Autoreply")
    @section("body")
    @extends("layouts.navbar")
        @section("contents")
        <h3>Auto Reply Message</h3>
        <p class="smaller">This message will be sent automatically to users when they send you messages.</p>
        <div class="row button_row">
            <div class="col-12 compose_button_div"><a href="/message/auto_reply_message" class="create_compose_button_box">Back</a></div>
        </div>
        {!! Form::open() !!}
        <table>
            <tr>
                {{-- Rely on the auto reply message creator code (auto_reply_message_creator.blade.php) --}}
                <td>Message Title</td>
                <td><div class="messagebox left">{{ Form::text('Keyword', null, array('placeholder'=>'Message Title', "class"=>"creating_messagebox_inside" )) }}</div></td>
            </tr>
            <tr>
                <td>Date and Time</td>
                <td>
                    <br>
                    <div class="radio_check">{{Form::radio('Date', 'value', true)}}&nbsp;Date {{Form::date('name', \Carbon\Carbon::now())}} - {{Form::date('name', \Carbon\Carbon::now())}}</div> <br>                    
                    <div class="radio_check">{{Form::radio('Date', 'value', true)}}&nbsp;Time {{Form::selectRange('number', 0, 23)}} : {{Form::selectRange('number', 0, 5)}} {{Form::selectRange('number', 0, 9)}} - {{Form::selectRange('number', 0, 23)}} : {{Form::selectRange('number', 0, 5)}} {{Form::selectRange('number', 0, 9)}}</div> <br>
                    <div class="radio_check">{{Form::radio('Date', 'value', true)}}&nbsp;Do not specify date and time</div>
                    <br>
                </td>
            </tr>
            <tr>
                <td>Message</td>
                <td><div class="messagebox left">{{ Form::textarea('Keyword', null, array("class"=>"creating_messagetitle_inside" )) }}</div></td>
            </tr>
            </table>
            <br>
            <div class="compose_button_div">{{Form::submit('Save', ["class"=>"searchbox_inside"])}}</div>
        {!! Form::close() !!}
@endsection