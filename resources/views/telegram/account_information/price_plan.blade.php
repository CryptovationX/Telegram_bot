@extends("layouts.main")
    @section("title", "Price Plan")
    @section("body")
    @extends("layouts.navbar")
        @section("contents")
        <h3>Price plan</h3> <hr>
        <div class="row" style="margin:0">
            <div class="col-2">Current plan</div>
            <div class="col-10"><b>Package C</b></div>
        </div>
        <table>
            <tr><th></th><th>Package A</th><th>Package B</th><th>Package C</th></tr>
            <tr><th></th><th>$1,999 <div>* $99 / month</div></th><th>$2,499 <div>* $99 / month</div></th><th>$2,999 <div>* $99 / month</div></th></tr>
            <tr><th>Users management</th><td>Excluding bot & user elimination</td><td><i class="fa fa-check" aria-hidden="true"></i></td><td><i class="fa fa-check" aria-hidden="true"></i></td></tr> 
            <tr><th>Report your chat room activities</th><td><i class="fa fa-check" aria-hidden="true"></i></td><td><i class="fa fa-check" aria-hidden="true"></i></td><td><i class="fa fa-check" aria-hidden="true"></i></td></tr> 
            <tr><th>Import chat history</th><td><i class="fas fa-times"></i></td><td><i class="fa fa-check" aria-hidden="true"></i></td><td><i class="fa fa-check" aria-hidden="true"></i></td></tr>
            <tr><th>Delete service messages</th><td><i class="fas fa-times"></i></td><td><i class="fa fa-check" aria-hidden="true"></i></td><td><i class="fa fa-check" aria-hidden="true"></i></td></tr>
            <tr><th>Bot auto reply messages</th><td>5 commands</td><td>10 commands</td><td>Unlimited</td></tr>
            <tr><th>Bot broadcasting</th><td>2 times per month</td><td>5 times per month</td><td>Unlimited</td></tr>
            <tr><th>Service care 24/7</th><td><i class="fa fa-check" aria-hidden="true"></i></td><td><i class="fa fa-check" aria-hidden="true"></i></td><td><i class="fa fa-check" aria-hidden="true"></i></td></tr> 
        </table> 
        <br>
        <div class="row" style="margin:0;">
            <div class="col-12 right">* as a maintenance cost and service care</div>
        </div>
        <div class="row" style="margin:0;">
            <div class="col-12 right">Extra service : Group & Bot Renewal -> ฿ 1000 per time</div>
        </div>
@endsection