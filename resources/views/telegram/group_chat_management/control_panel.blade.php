@extends("layouts.main")
    @section("title", "Control Panel")
    @section("body")
    @extends("layouts.navbar")
        @section("contents")
        <h3>Control Panel</h3>
        <p class="smaller">????</p>
        <div class="row button_row">
            <div class="col-12 compose_button_div"><a href="/group_chat_management/control_panel_main" class="create_compose_button_box">Back</a></div>
        </div>
        {!! Form::open() !!}
        <table>
            <tr>
                <th>Members</th>
                <td>
                    <div class="row" style="margin:0">
                        <div style="margin-left:2%">Number of members in our database</div>
                    </div>
                </td>
            </tr> 
            <tr>
                <th>Member's information</th>
                <td>
                    <div class="row" style="margin:0">
                        <div style="padding:0 0 0 2%">{{Form::submit('Export', ["class"=>"searchbox_inside"])}}</div>
                    </div>
                </td>
            </tr> 
            <tr>
                <th>Bot elimination</th>
                <td>
                    <div class="row" style="margin:0">
                        <label class="switch">
                            <input type="checkbox" id="bot_Elimination"  onclick="botElimination()">
                            <span class="slider round"></span>
                            <div class="text_slider">
                                <p id="be_on" style="display:none">On</p>
                                <p id="be_off">Off</p>
                            </div>
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <th>Delete service messages</th>
                <td>
                    <div class="row" style="margin:0">
                        <label class="switch">
                            <input type="checkbox" id="delete_ServiceMessage"  onclick="deleteServiceMessage()">
                            <span class="slider round"></span>
                            <div class="text_slider">
                                <p id="dsm_on" style="display:none">On</p>
                                <p id="dsm_off">Off</p>
                            </div>
                        </label>
                    </div>
                </td>
            </tr> 
            <tr>
                <th>Report your chat room activities</th>
                <td>
                    <div class="row" style="margin:0">
                        <label class="switch">
                            <input type="checkbox" id="report_Chat"  onclick="reportChat()">
                            <span class="slider round"></span>
                            <div class="text_slider">
                                <p id="rc_on" style="display:none">On</p>
                                <p id="rc_off">Off</p>
                            </div>
                        </label>
                    </div>
                </td>
            </tr>
        </table> 
        {!! Form::close() !!}
@endsection