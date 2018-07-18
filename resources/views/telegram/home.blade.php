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
@endsection