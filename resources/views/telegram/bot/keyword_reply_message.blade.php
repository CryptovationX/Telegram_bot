@extends("layouts.main")
    @section("title", "Keyword Reply")
    @section("body")
    @extends("layouts.navbar")
        @section("contents")
        <h3>Keyword Reply Message</h3>
        <p class="smaller">You can set a message to send to users when they input specific keywords in chats.</p>
        <div class="row button_row">
            <div ><a href="/bot/keyword_reply_message/create" class="create_compose_button_box">Create new</a></div>
        </div>
        <br>
        <div class="keyword_reply_tab">
                <button class="keyword_reply_tablinks" onclick="openCity(event, 'Active')">Active</button>
                <button class="keyword_reply_tablinks" onclick="openCity(event, 'Standby')">Standby</button>
            </div>

                <div id="Active" class="keyword_reply_tabcontent">
                    <table>
                        <tr>
                          <th>Main Keyword</th>
                          <th>Additional Keywords</th>
                          <th>Content</th>
                          <th>Total Counts / Unique User Counts</th>
                          <th>Change status</th>
                        </tr>
                        <tr>
                          <td>Eiei</td>
                          <td>Not now</td>
                          <td>Bla bla</td>
                          <td>999</td>
                          <td>Change</td>
                        </tr>
                      </table>                
                </div>
    
                <div id="Standby" class="keyword_reply_tabcontent">
                    <table>
                        <tr>
                            <th>Main Keyword</th>
                            <th>Additional Keywords</th>
                            <th>Content</th>
                            <th>Total Counts / Unique User Counts</th>
                            <th>Change status</th>
                        </tr>
                        <tr>
                            <td>Eiei</td>
                            <td>Not now</td>
                            <td>Bla bla</td>
                            <td>999</td>
                            <td>Change</td>
                        </tr>
                    </table>   
                </div>
@endsection