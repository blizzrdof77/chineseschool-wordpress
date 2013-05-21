<?php 
/* File for ACF customizations */
?>
<script type="text/javascript">
$(document).ready(function() {
   $('#poststuff .acf_postbox .field-date_picker p.label').click(function(){
      alert('yay');
      $('.acf_postbox .field-date_picker input[type="text"]').focus();
    
  });
});
</script>
<style type="text/css">
/*-----------------
 *  Custom Styles  *
 -----------------*/
.acf_postbox .field input[type="text"], .acf_postbox .field input[type="number"], .acf_postbox .field input[type="password"], .acf_postbox .field textarea {
padding: 8px 5px!important;
color: #999;
font-style: italic!important;
border-color: #CCC!important;
box-shadow: 0px 0px 2px #EEE!important;
background-color: #FFF!important;
}
post.phpmedia="all"
textarea, input[type="text"], input[type="password"], input[type="file"], input[type="email"], input[type="number"], input[type="search"], input[type="tel"], input[type="url"], select {
border-color: #DFDFDF!important;
}
.acf_postbox .field-date_picker {
  position:relative
  display:block!important;
    margin-bottom: 140px!important;
    height:100px;

}
#poststuff .acf_postbox .field {padding-bottom:6px!important;}
.acf_postbox .field-date_picker input[type="text"] { background-color:transparent; width: 111px!important;background-repeat: no-repeat!important; background-position: 86px center; background-image: url(/wp-admin/images/date-button.gif)!important; text-indent: 3px;cursor:pointer;}
#poststuff .acf_postbox .field-date_picker p.label{ cursor: text;}
#poststuff .acf_postbox .field-date_picker p.label label { cursor: text;}
#poststuff .acf_postbox .field-date_picker p.label:after {content:' + ';color:royalblue;width:72px;height:28px;position:absolute;float:left;clear:none;z-index: 9999999999999999;display:block!important;top:43px;text-align:center;filter:alpha(opacity=0);left:6px;line-height:2em;opacity:0;}

</style>
