@extends("layouts.main")
    @section("title", "Home")
    @section("body")
    @extends("layouts.navbar")
        @section("contents")

            {{-- Notice table --}}
             <div class="row notice_row">
                <div class="col-7">
                    <h3>Notices</h3>
                </div>
                <div class="col-5 right">
                    <a href="">See all</a>
                </div>
             </div>
            <div class="row title_row">
                <div class="col-1 right">
                    <p><b>Title</b></p>
                </div>
                <div class="col-10 right">
                    <p><b>Published date</b></p>
                </div>
            </div>
            <div class="row content_row">
                <div class="col-1 right">
                    <p>XXX</p>
                </div>
                <div class="col-10 right">
                    <p>5 July 2018</p>
                </div>
            </div>
            <div class="row content_row">
                <div class="col-1 right">
                    <p>XXX</p>
                </div>
                <div class="col-10 right">
                    <p>5 July 2018</p>
                </div>
            </div>
            <div class="row content_row">
                <div class="col-1 right">
                    <p>XXX</p>
                </div>
                <div class="col-10 right">
                    <p>5 July 2018</p>
                </div>
            </div>
            <br><br><br>
             {{-- Quick start guide --}}
             <div class="row">
                 <div class="col-12">
                     <h5>Quick start guide</h5>
                 </div>
                 <ul>
                     <li><a href="" class="list">Add your own profile photo and status message.</a></li>
                     <li><a href="" class="list">Choose your cover photo.</a></li>
                     <li><a href="" class="list">Display your account for the world to see!</a></li>
                     <li><a href="" class="list">Add a personal touch to the greeting message sent to users when they friend your account.</a></li>
                     <li><a href="" class="list">Make your account page as attractive as possible.</a></li>
                 </ul>
             </div>
             <br><br><br>

             {{-- Reserved messages --}}
             <div class="row notice_row">
                <div class="col-7">
                    <h5>Reserved messages</h5>
                </div>
                <div class="col-5 right">
                    <a href="">See more</a>
                </div>
            </div>
            <div class="row title_row">
                <div class="col-1 right">
                    <p><b>Title</b></p>
                </div>
                <div class="col-6"></div>
                <div class="col-2 right">
                    <p><b>Status</b></p>
                </div>
                <div class="col-2 right">
                    <p><b>Date sent</b></p>
                </div>
            </div>
            <div class="row" style="">
                <div class="col-1 right">
                    <p>XXX</p>
                </div>
                <div class="col-6"></div>
                <div class="col-2 right">
                    <p>Active</p>
                </div>
                <div class="col-2 right">
                    <p>5 July 2018</p>
                </div>
            </div>
            <br><br><br>
@endsection