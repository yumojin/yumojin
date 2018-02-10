$('.burger').click(function() {
    jQuery(this).text('△');
    if($('.navigation').is(':visible')){
          jQuery(this).text('▽');
    }else{
          jQuery(this).text('△');
    }
    $('.navigation').slideToggle('fast');
    return false;
});