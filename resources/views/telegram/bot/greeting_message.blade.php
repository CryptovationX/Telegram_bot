@extends("layouts.main")
    @section("title", "Greeting")
    @section("body")
    @extends("layouts.navbar")
        @section("contents")
        <h3>Greeting message</h3>
        <p class="smaller">This message will be sent automatically to users when they add you as a friend..</p>
    
        {!! Form::open() !!}
        <table>
            <tr>
                <td>
                    <div class="messagebox left">{{ Form::textarea('Keyword', null, array("placeholder"=>"Enter message","class"=>"replying_inside" )) }}</div>
                </td>
            </tr>
        </table> 
            <br>
        <div class="compose_button_div">{{Form::submit('Save', ["class"=>"searchbox_inside"])}}</div>
        {!! Form::close() !!}
@endsection