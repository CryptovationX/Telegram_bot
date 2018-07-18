@extends("layouts.main")
    @section("title", "Price Plan")
    @section("body")
    @extends("layouts.navbar")
        @section("contents")
        <h3>Price plan</h3> <hr>
        <div class="row" style="margin:0">
            <div class="col-2"><p>Current plan</p></div>
            <div class="col-10"><b><p>Package C</p></b></div>
        </div>
        <table>
            <tr><th rowspan="2"></th><th class="package_a">Package A</th><th class="package_b">Package B</th><th class="package_c">Package C</th></tr>
            <tr><th >$1,999 <div>* $99 / month</div></th><th>$2,499 <div>* $99 / month</div></th><th>$2,999 <div>* $99 / month</div></th></tr>
            <tr><th>Users management</th><td >Excluding bot & user elimination</td><td><i class="fa fa-check correct" aria-hidden="true"></i></td><td><i class="fa fa-check correct" aria-hidden="true"></i></td></tr> 
            <tr><th>Report your chat room activities</th><td ><i class="fa fa-check correct" aria-hidden="true"></i></td><td><i class="fa fa-check correct" aria-hidden="true"></i></td><td><i class="fa fa-check correct" aria-hidden="true"></i></td></tr> 
            <tr><th>Import chat history</th><td ><i class="fas fa-times incorrect"></i></td><td><i class="fa fa-check correct" aria-hidden="true"></i></td><td><i class="fa fa-check correct" aria-hidden="true"></i></td></tr>
            <tr><th>Delete service messages</th><td ><i class="fas fa-times incorrect"></i></td><td><i class="fa fa-check correct" aria-hidden="true"></i></td><td><i class="fa fa-check correct" aria-hidden="true"></i></td></tr>
            <tr><th>Bot auto reply messages</th><td >5 commands</td><td>10 commands</td><td>Unlimited</td></tr>
            <tr><th>Bot broadcasting</th><td >2 times per month</td><td>5 times per month</td><td>Unlimited</td></tr>
            <tr><th>Group limit</th><td >1 group</td><td>3 groups</td><td>Unlimited</td></tr>
            <tr><th>Service care 24/7</th><td ><i class="fa fa-check correct" aria-hidden="true"></i></td><td><i class="fa fa-check correct" aria-hidden="true"></i></td><td><i class="fa fa-check correct" aria-hidden="true"></i></td></tr> 
        </table> 
        <br>
        <div class="row" style="margin:0;">
            <div class="col-12 right"><p>* as a maintenance cost and service care</p></div>
        </div>
        <div class="row" style="margin:0;">
            <div class="col-12 right"><p>Extra service : Group & Bot Renewal -> ฿ 1000 per time</p></div>
        </div>
@endsection