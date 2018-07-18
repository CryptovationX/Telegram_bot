<script>

/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown_sidenav");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}

// Messagelist Tab [telegram.message.message_lists]
function messagelistTab(evt, cityName) {
    var i, tabletabcontent, tabletablinks;
    tabletabcontent = document.getElementsByClassName("tabletabcontent");
    for (i = 0; i < tabletabcontent.length; i++) {
        tabletabcontent[i].style.display = "none";
    }
    tabletablinks = document.getElementsByClassName("tabletablinks");
    for (i = 0; i < tabletablinks.length; i++) {
        tabletablinks[i].className = tabletablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Keyword Reply Tab [telegram.message.keyword_reply_message]
function openCity(evt, cityName) {
    var i, keyword_reply_tabcontent, keyword_reply_tablinks;
    keyword_reply_tabcontent = document.getElementsByClassName("keyword_reply_tabcontent");
    for (i = 0; i < keyword_reply_tabcontent.length; i++) {
        keyword_reply_tabcontent[i].style.display = "none";
    }
    keyword_reply_tablinks = document.getElementsByClassName("keyword_reply_tablinks");
    for (i = 0; i < keyword_reply_tablinks.length; i++) {
        keyword_reply_tablinks[i].className = keyword_reply_tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Datepicker [telegram.message.auto_reply_message_creating]
$(function() {
    $( "#datepicker" ).datepicker();
  });

// Adding Elements Dynamically [telegram.message.keyword_reply_message_creating]
$(document).ready(function(){
    var maxField = 99; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<br> <div>{{ Form::text('Keyword', null, array("class"=>"creating_messagebox_inside left" )) }}<a href="" class="remove_button" style="text-decoration:none; color:red; padding-left:2px;"> <i class="fas fa-times"></i></a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        $("br:first").remove();        
        x--; //Decrement field counter
    });
});

// Preview image
$("#fileUpload").on('change', function () {

var imgPath = $(this)[0].value;
var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
    if (typeof (FileReader) != "undefined") {

        var image_holder = $("#image-holder");
        image_holder.empty();

        var reader = new FileReader();
        reader.onload = function (e) {
            $("<img/>", {
                "src": e.target.result,
                    "class": "thumb_image"
            }).appendTo(image_holder);

        }
        image_holder.show();
        reader.readAsDataURL($(this)[0].files[0]);
    } else {
        alert("This browser does not support FileReader.");
    }
} else {
    alert("Only images");
}
});

$("#attach_file").on('change', function () {

var imgPath = $(this)[0].value;
var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
    if (typeof (FileReader) != "undefined") {

        var image_holder2 = $("#image-holder2");
        image_holder2.empty();

        var reader = new FileReader();
        reader.onload = function (e) {
            $("<img/>", {
                "src": e.target.result,
                    "class": "thumb_image"
            }).appendTo(image_holder2);

        }
        image_holder2.show();
        reader.readAsDataURL($(this)[0].files[0]);
    } else {
        alert("This browser does not support FileReader.");
    }
} else {
    alert("Only images");
}
});

// On & Off display
function botElimination() {
    var be_checkBox = document.getElementById("bot_Elimination");
    var be_text = document.getElementById("be_on");
  	var be_text = document.getElementById("be_off");
      if (be_checkBox.checked == true){
          	be_on.style.display = "block";
         	be_off.style.display = "none";
      }else{
			be_on.style.display = "none";
            be_off.style.display = "block";
      }
}
function deleteServiceMessage() {
    var dsm_checkBox = document.getElementById("delete_ServiceMessage");
    var dsm_text = document.getElementById("dsm_on");
  	var dsm_text = document.getElementById("dsm_off");
      if (dsm_checkBox.checked == true){
          	dsm_on.style.display = "block";
         	dsm_off.style.display = "none";
      }else{
			dsm_on.style.display = "none";
            dsm_off.style.display = "block";
      }
}
function reportChat() {
    var rc_checkBox = document.getElementById("report_Chat");
    var rc_text = document.getElementById("rc_on");
  	var rc_text = document.getElementById("rc_off");
      if (rc_checkBox.checked == true){
          	rc_on.style.display = "block";
         	rc_off.style.display = "none";
      }else{
			rc_on.style.display = "none";
            rc_off.style.display = "block";
      }
}

// Section in groupchat announcement
$("#boardcast-alert").hide();
$("#submit-button").click(function () {

window.setTimeout(function () { 
$("#boardcast-alert").fadeTo(200, 50).slideDown(50, function(){
$("#boardcast-alert").fadeTo(200, 50).slideDown(50);
})
});
window.setTimeout(function () { 
$("#boardcast-alert").fadeTo(200, 50).slideUp(50, function(){
$("#boardcast-alert").fadeTo(200, 50).slideUp(50);
}); 
} , 2000); 
}); 
// Hammenu
function Hammenu() {
    document.getElementById("myDropdown").classList.toggle("show");
}
</script>