@extends("layouts.main")
    @section("title", "Autoreply")
    @section("body")
    @extends("layouts.navbar")
        @section("contents")
        {!! Form::open() !!}
        <h3>Auto Reply Message</h3>
        <p class="smaller">This message will be sent automatically to users when they send you messages.</p>
        <div class="row button_row">
            <div class="col-4"><a href="/bot/auto_reply_message/create" class="create_compose_button_box">Create new</a></div>
            <div class="col-8 compose_button_div">{{Form::submit('Broadcast', ["class"=>"searchbox_inside"])}}</div>
        </div>
        <table>
            <tr>
                <th>Status</th>
                <th>Type</th>
                <th>Message Title</th>
                <th>Expiration Date</th>
                <th>Contents</th>
                <th>Delete</th>
            </tr>
            <tr>
                {{-- Rely on the auto reply message creator code (auto_reply_message_creator.blade.php) --}}
                <td>Enable</td>
                <td>Do not specify date and time</td>
                <td>Eiei</td>
                <td>Not specified</td>
                <td>Hiiiiiiiiiiii</td>
                <td><a href="">Delete</a></td>
            </tr>
            </table> 
        {!! Form::close() !!}
@endsection