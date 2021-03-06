jQuery(document).ready(function(){
    var scripts = document.getElementsByTagName("script");
    var jsFolder = "";
    for (var i= 0; i< scripts.length; i++)
    {
        if( scripts[i].src && scripts[i].src.match(/initslider-1\.js/i))
            jsFolder = scripts[i].src.substr(0, scripts[i].src.lastIndexOf("/") + 1);
    }
    jQuery("#amazingslider-1").amazingslider({
        jsfolder:jsFolder,
        width:550,
        height:340,
        loadimageondemand:false,
        isresponsive:true,
        autoplayvideo:false,
        pauseonmouseover:false,
        randomplay:false,
        slideinterval:5000,
        transitiononfirstslide:false,
        loop:0,
        autoplay:false,
        navplayvideoimage:"play-32-32-0.png",
        navpreviewheight:60,
        timerheight:2,
        skin:"VerticalNumber",
        textautohide:true,
        addgooglefonts:false,
        navshowplaypause:true,
        navshowplayvideo:true,
        navbuttonradius:0,
        navpreviewposition:"top",
        navradius:0,
        showshadow:false,
        navfeaturedarrowimagewidth:16,
        navpreviewwidth:120,
        googlefonts:"Inder",
        textpositionmarginright:24,
        bordercolor:"#ffffff",
        navthumbnavigationarrowimagewidth:32,
        navthumbtitlehovercss:"text-decoration:underline;",
        arrowwidth:32,
        navmargin:12,
        texteffecteasing:"easeOutCubic",
        texteffect:"fade,slide",
        navspacing:2,
        navarrowimage:"navarrows-28-28-0.png",
        ribbonimage:"rock-on-small.png",
        navwidth:24,
        navheight:24,
        timeropacity:0.6,
        navthumbnavigationarrowimage:"carouselarrows-32-32-1.png",
        navpreviewbordercolor:"#ffffff",
        ribbonposition:"bottomleft",
        navthumbdescriptioncss:"display:block;position:relative;padding:2px 4px;text-align:left;font:normal 12px Arial,Helvetica,sans-serif;color:#333;",
        arrowstyle:"mouseover",
        navthumbtitleheight:20,
        textpositionmargintop:24,
        navswitchonmouseover:false,
        playvideoimage:"playvideo-64-64-0.png",
        arrowimage:"arrows-32-32-1.png",
        textstyle:"static",
        playvideoimageheight:64,
        navfonthighlightcolor:"#990000",
        showbackgroundimage:false,
        navpreviewborder:4,
        navdirection:"horizontal",
        navbuttonshowbgimage:true,
        navbuttonbgimage:"navbuttonbgimage-28-28-0.png",
        navthumbnavigationarrowimageheight:32,
        textbgcss:"display:block; position:absolute; top:0px; left:0px; width:100%; height:100%; background-color:#333333; opacity:0.6; filter:alpha(opacity=60);font-family:'Helvetica Neue', Helvetica, Arial, sans-serif;",
        shadowcolor:"#aaaaaa",
        navborder:4,
        bottomshadowimagewidth:110,
        showtimer:true,
        navshowpreview:true,
        navpreviewarrowheight:8,
        navfeaturedarrowimage:"featuredarrow-16-8-1.png",
        showribbon:true,
        navfeaturedarrowimageheight:8,
        navstyle:"bullets",
        textpositionmarginleft:24,
        descriptioncss:"padding-left:36px; display:block; position:relative; margin-top:4px; font:12px normal 16px/20px 'Helvetica Neue', Helvetica, Arial, sans-serif; color:#fff;",
        navplaypauseimage:"navplaypause-28-28-0.png",
        backgroundimagetop:-10,
        timercolor:"#ffffff",
        navfontsize:13,
        navhighlightcolor:"",
        navimage:"bullet-24-24-1.png",
        navbuttoncolor:"",
        navshowarrow:true,
        navshowfeaturedarrow:false,
        titlecss:"padding-left:36px; display:block; position:relative; font: 14px normal 16px/20px 'Helvetica Neue', Helvetica, Arial, sans-serif; color:#fff;font-weight:bold;",
        ribbonimagey:-9,
        ribbonimagex:-9,
        shadowsize:5,
        arrowhideonmouseleave:1000,
        navopacity:0.9,
        backgroundimagewidth:120,
        navcolor:"",
        navthumbtitlewidth:120,
        playvideoimagewidth:64,
        arrowheight:32,
        arrowmargin:8,
        texteffectduration:1000,
        bottomshadowimage:"bottomshadow-110-100-5.png",
        border:5,
        timerposition:"bottom",
        navfontcolor:"#777",
        navthumbnavigationstyle:"auto",
        borderradius:1,
        navbuttonhighlightcolor:"",
        textpositionstatic:"bottom",
        navthumbstyle:"imageonly",
        textcss:"display:block; padding:12px; text-align:left;font-family:'Helvetica Neue', Helvetica, Arial, sans-serif;",
        navbordercolor:"#ffffff",
        navpreviewarrowimage:"previewarrow-8-16-1.png",
        showbottomshadow:true,
        backgroundimage:"",
        navposition:"bottom",
        navpreviewarrowwidth:16,
        bottomshadowimagetop:100,
        textpositiondynamic:"bottomleft",
        navshowbuttons:false,
        navthumbtitlecss:"display:block;position:relative;padding:2px 4px;text-align:left;font:bold 14px Arial,Helvetica,sans-serif;color:#333;",
        textpositionmarginbottom:24,
        crossfade: {
            duration:1000,
            easing:"easeInOutCubic",
            checked:true
        },
        transition:"crossfade"
    });
});