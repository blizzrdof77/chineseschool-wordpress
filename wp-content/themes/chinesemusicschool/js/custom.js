function changeLink(linkname)  { 
  // document.getElementById('normal-view').href = linkname;
  $("#content-container > div").hide();
  
  if (shifted == false) {
    navShift();
   
    $("#"+ linkname +"-container").css({
      opacity: 0,top: 230
      }).show().animate({
        opacity: 1,top: 248
      }, 1000
    );
  }
  else {
    $("#"+ linkname +"-container").css({
      opacity: 0
    }).show().animate({
      opacity: 1
    }, 1000);
  }
      shifted = true;
}

function hideDiv(pass) { 
  var divs = document.getElementsByTagName('div'); 
  for(i=0;i<divs.length;i++) { 
    if(divs[i].id.match(pass)) {//if they are 'see' divs 
      if (document.getElementById) { // DOM3 = IE5, NS6 
        divs[i].style.opactity="0";// show/hide 
        divs[i].style.visibility="hidden";// show/hide 
        divs[i].style.display="none";// show/hide 
      }
    }
  }
}

function showDiv(pass) { 
  var divs = document.getElementsByTagName('div'); 
  for(i=0;i<divs.length;i++){ 
    if(divs[i].id.match(pass)){ 
      if (document.getElementById) { 
        divs[i].style.visibility="visible";
        divs[i].style.display="block";
        divs[i].style.opacity="1";
      }
      else  { }
    } 
  } 
} 

function initVideoSlider() {
  $("#video-scroll .next").click(function() {
    if( $(".current").hasClass("last")) {
      $("#video-scroll .last").fadeOut("slow").removeClass("current");
      $("#video-scroll .first").addClass("current").fadeIn("slow");
    } else {
      $(".current").removeClass("current").next().addClass("current").hide().fadeIn("slow");
    }
  });
  $("#video-scroll .prev").click(function() {
    if( $(".current").hasClass("first")) {
      $("#video-scroll .first").fadeOut("slow").removeClass("current");
      $("#video-scroll .last").fadeIn("slow").addClass("current");
    } else {
      $(".current").removeClass("current").prev().addClass("current").hide().fadeIn("slow");
    }
  });
}

// Called by Adapt.js
function myCallback(i, height) {
  // Alias HTML tag.
  var html = document.documentElement;
  // Find all instances of range_NUMBER and kill 'em.
  html.className = html.className.replace(/(\s+)?range_\d/g, '');
  // Check for valid range.
  if (i > -1) {
    // Add class="range_NUMBER"
    html.className += ' range_' + i;
  }
  // Note: Not making use of width here, but I'm sure
  // you could think of an interesting way to use it.
}

// Edit to suit your needs.
var ADAPT_CONFIG = {
  // false = Only run once, when page first loads.
  // true = Change on window resize and page tilt.
  dynamic: true,

  // Optional callback... myCallback(i, width)
  callback: myCallback,

  // First range entry is the minimum.
  // Last range entry is the maximum.
  // Separate ranges by "to" keyword.
  range: [
  '0 to 660',
  '660 to 770',
  '770 to 780',
  '880 to 800',
  '800 to 1920',
  '1920'
  ]
};

$(document).keyup(function(e) {
  // Close overlay/shadowbox with escape key
  if (e.keyCode == 27) { 
    hideDiv('password-form');
  }

});

function customCloseOverlay () {
  $("#link-shows").click( function () {
    $('link[href="styles/shadowbox.css"]').attr('href','styles/shadowbox-custom.css');
  });
  $("#link-music").click( function () {
    $('link[href="styles/shadowbox.css"]').attr('href','styles/shadowbox-custom.css');
  });
  $("#link-videos, #password").click( function () {
    
  });
  $("#link-contact").click( function () {
    $('link[href="styles/shadowbox-custom.css"]').attr('href','styles/shadowbox.css');
  });
$("#link-photos").click( function () {
    $('link[href="styles/shadowbox-custom.css"]').attr('href','styles/shadowbox.css');
  });   
}


function navShift () { 
$("#wrapper").addClass("nav-shift");
$("#chinese-school-nav").css({
      opacity: 1,top: 0
    }).show().animate({
      opacity: .8,top: -80
      }, 1000);
$("#slogan").css({
      opacity: 1, height: 'auto'
    }).show().animate({
      opacity: 0,height: 0
      }, 1000);
    $("header").animate({
      opacity: .9,marginTop: 25
      }, 1000);
}

function navPreShift () { 
  if ( $("#wrapper").hasClass("nav-shift") ) {
    $("#chinese-school-nav").css({
        opacity: 1,top: 0
      }).show().css({
        opacity: .8,top: -52
        }, 1000);
    $("#slogan").hide();
      $("header").css({
        opacity: .9,marginTop: 25
    }, 1000);
  }
}

function initCufon() {
  
  Cufon.replace(
    'h1, h2, h3, #main-navigation a, #contact_form strong, .cufon'
  );
}

function initShadowbox() {
  Shadowbox.init({ handleOversize: "resize", modal: true });
}

function initHtml5MusicPlayers() {
  $(document).ready(function() {
    if ( $("ul.music").length ) {
      $("ul.music").each( function() {
        var audioFile = $(this).children("li").children("a").attr("href").replace("mp3", "");
        $(this).children("li").append('<audio controls> <source src="' + audioFile + 'ogg" type="audio/ogg"> <source src="' + audioFile + 'mp3" type="audio/mpeg"> Your browser does not support the audio element.  Try <a href="https://www.google.com/chrome" target="_blank">chrome</a> or <a href="https://www.firefox.com" target="_blank">firefox</a>. </audio>');
      });
    /* Temporary fix for static menu */
    $("#link-music").addClass("current-page");
    }
     
  });
}

 function initContactForm(){
  if ( $("#contact_form").length ) {
    // Dialog     
    $('#dialog').dialog({
      autoOpen: false,
      width: 600,
      buttons: {
        "ok": function() { 
          $(this).dialog("close"); 
        }
      }
    });
    // Dialog Link
    $('#dialog_link').click(function(){
      $('#dialog').dialog('open');
      return false;
    });
    $("#link-contact").addClass("current-page");
  }
}

$(function () {
  shifted = false;
  customCloseOverlay();
  initCufon();
  initShadowbox();
  navPreShift();
  initHtml5MusicPlayers();
  initContactForm();
});