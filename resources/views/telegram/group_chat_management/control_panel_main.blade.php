@extends("layouts.main")
    @section("title", "Control Panel")
    @section("body")
    @extends("layouts.navbar")
        @section("contents")
        <h3>Control Panel</h3>
        <p class="smaller">Choose a group which you want to access to the group's control panel</p>
    
        {!! Form::open() !!}
        <table>
            <tr>
                <div class="row" style="margin:0;">
                    <th class="control_table" style="width:150px">Group</th>
                    <td class="control_table"><a style="text-decoration:none" href="/group_chat_management/control_panel">eiei</a></td>
                </div>
            </tr> 
        </table> 
        {!! Form::close() !!}
@endsection