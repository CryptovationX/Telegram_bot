<div class="row" style="background-color:ghostwhite; border-bottom: 1px solid #e6e6e6;">
    <div class="col-9 row">
        <div class="col-3 navbar-left">
            <img src="https://s3-ap-southeast-1.amazonaws.com/cryptovationx/public/logos/header-logo.png" alt="Cryptovation logo" class="nav-pic">
        </div>
        {{-- <div class="col-2 navbar-middle right">
            <a class="nav-font" href="/account_information/registered_information"><i class="fas fa-bullhorn" style="font-size:15px; padding-right:5%"></i>1000</a>
        </div>
        <div class="col-3 navbar-middle center" >
            <a class="nav-font" href="/account_information/registered_information"><i class="fas fa-database" style="font-size:15px; padding-right:5%"></i>Registering for Paid Plans</a>
        </div>
        <div class="col-3 navbar-middle">
            <a class="nav-font" href=""><i class="fas fa-comment" style="font-size:15px; padding-right:2%"></i> One-on-One chat modeEnable</a>            
        </div> --}}
    </div>
    <div class="col-2 navbar-right right">
        <div><a href="/home" style="text-decoration:none">XXX(name)</a></div>
    </div>
    <div class="col-1 navbar-right center">
        <a class="nav-font" href="">Logout</a>
    </div>
</div>
<div class="row">
<!-- Side navigation -->
    <div class="col-3" style="background-color:white;">
        <div class="col-9">
            <div class="sidenav">
                <div class="center" style="font-size:20px">Name</div>
                <div class="center username">@Username</div>
                <hr>
                <div class="dropdown_sidenav">Group & Chat Management</div>
                <div class="dropdown_container">
                    <a href="/group_chat_management/announcement">&nbsp; &nbsp; Announcement</a>
                    <a href="/group_chat_management/ban_users">&nbsp; &nbsp; Ban users</a>
                    <a href="/group_chat_management/chat_history">&nbsp; &nbsp; Chat history</a>
                    <a href="/group_chat_management/control_panel_main">&nbsp; &nbsp; Control panel</a>
                </div>
                <hr>
                <div class="dropdown_sidenav">Bot</div>
                    <div class="dropdown_container">
                        <a href="/bot/broadcast">&nbsp; &nbsp; Broadcast</a>
                        <a href="/bot/auto_reply_message">&nbsp; &nbsp; Auto reply message</a>
                        <a href="/bot/keyword_reply_message">&nbsp; &nbsp; Keyword reply message</a>
                        <a href="/bot/greeting_message">&nbsp; &nbsp; Greeting message</a>
                    </div>
                <hr>
                <div class="dropdown_sidenav">Setting</div>
                    <div class="dropdown_container">
                        <a href="/setting/basic">&nbsp; &nbsp; Account Settings</a>
                        <a href="/setting/control_panel_main">&nbsp; &nbsp; Control Panel</a>
                    </div>
                <div class="dropdown_sidenav">Account Information</div>
                    <div class="dropdown_container">
                        <a href="/account_information/price_plan">&nbsp; &nbsp; Price Plan</a>
                        <a href="/account_information/registered_information">&nbsp; &nbsp; Registered Information</a>
                    </div>
            </div>
        </div>
    </div>
    <div class="col-9" style="background-color:white;">
        <div class="container" style="margin-top:5%; padding: 0 12% 0 0">
            @yield("contents")
        </div>
    </div>


    
    <div class="footer">
   <!-- Begin Footer -->
        <footer style="background-color: transparent">
                <div class="row" style="margin-top:10px; margin-left:3.6%; margin-bottom:10px;">
                    <div class="col-sm-12 col-sm-offset-2 text-small left">
                        <a href="" target="_blank" class="faq_footer">FAQ</a>&nbsp; &nbsp; &nbsp;
                        <a href="" target="_blank" class="contact_footer">Contact us</a>&nbsp; &nbsp; &nbsp;                 
                        <a href="" target="_blank" class="term_footer">Privacy policy</a>
                    </div>
                    <!-- /.column -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-sm-12 col-sm-offset-2 left icon-contact footerdot">
                        <!-- <span class="icon-handle-streamline-vector logo"></span>
            <h2 class="theme-title">Particles
                <span class="theme-title-smaller">Theme</span>
            </h2> -->
                        <a href="https://twitter.com/CryptovationX?lang=en" target="_blank">
                            <span class="fab fa-twitter social-icons-dark-hover  m50 mfooter footer_width"></span>
                        </a>
                        <a href="https://t.me/joinchat/H2POp0-8T_X5FYBq_qfS6A" target="_blank">
                        <i class="fab fa-telegram-plane social-icons-dark-hover  m50 mfooter footer_width"></i>
                        </a>

                        <a href="https://github.com/cryptovationx" target="_blank">
                            <i class="fab fa-github social-icons-dark-hover  m50 mfooter footer_width"></i>
                        </a>
                        <!-- <a href="https://cryptovationx.slack.com/open">
                <i class="fab fa-slack-hash social-icons-dark-hover  m50 mfooter"></i>
            </a> -->

                        <!-- <a>
                <i class="fab fa-google-plus social-icons-dark-hover  m50 mfooter"></i>
            </a> -->
                        <a href="https://medium.com/cryptovationx" target="_blank">
                            <i class="fab fa-medium-m social-icons-dark-hover  m50 mfooter footer_width"></i>
                        </a>
                        <a href="https://www.facebook.com/cryptovation.co/" target="_blank">
                            <span class="fab fa-facebook-f social-icons-dark-hover  m50 mfooter footer_width"></span>
                        </a>
                        <!-- <a href="#" target="_blank">
                            <span class="fab fa-instagram social-icons-dark-hover  m50 mfooter"></span>
                        </a> -->
                        <!-- <a>
                    <i class="fa-reddit-alien social-icons-dark-hover  m50 mfooter"></i>
            </a>
            <a>
                    <i class="fa-bitcoin social-icons-dark-hover  m50 mfooter"></i>
            </a> -->
                        <!-- <a>
                <i class="fab fa-linkedin-in social-icons-dark-hover mr50 m50 mfooter"></i>
            </a> -->
                    </div>
                </div>
        </footer>
        <!-- /.footer -->
    </div>