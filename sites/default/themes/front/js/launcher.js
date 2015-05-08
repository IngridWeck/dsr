jQuery(document).ready(function(){


	//cycle2
	jQuery('.diaporama').cycle({
        timeout:8000
    });

    var formHeight=jQuery('#colorbox').height();
    jQuery(".show_cb").colorbox({inline:true, width:"50%", height: "80%"});

    var formHeight=jQuery('#colorbox1').height();
    jQuery(".show_cb1").colorbox({inline:true, width:"50%", height: "80%"});

	var elementPosition = jQuery('.front-large-menu').offset();

	jQuery(window).scroll(function(){
	    if(jQuery(window).scrollTop() > elementPosition.top){
          jQuery('.front-large-menu').css('position','fixed').css('top','0').css('width','100%').css('z-index','500').css('background-color', 'rgba(51, 51, 51, 0.1)').css('margin-left', '0').css('padding', '0');
          jQuery('.front-logo').css('width', '110px').css('padding', '15px 20px 15px 40px');
          jQuery('h1').css('display', 'none');
          jQuery('.main-menu').css('padding-top', '0').css('margin-top', '10px');
          jQuery('#block-locale-language').css('display', 'none');
          jQuery('.front-main-content').css('margin-top','790px');      
	    } 

	    else {
	        jQuery('.front-large-menu').css('position','static').css('width','').css('background-color', 'rgba(51, 51, 51, 0.3)').css('margin', '').css('padding','');
	        jQuery('.front-logo').css('width', '').css('padding', '').css('margin', '');
	        jQuery('.main-menu').css('padding-top', '').css('margin-top', '');
	        jQuery('h1').css('display', 'block');
	        jQuery('#block-locale-language').css('display', 'block');
	        jQuery('.front-main-content').css('margin-top','');
	    }
	});

});

jQuery(function mailReserve() {
    var x = document.getElementById('superDate').value;
    var y = document.getElementById('superDate1').value;
    var z = document.getElementById('superSelect').value;
    var text = 'Bonjour, je souhaite réserver    ...' + z + '...     du ...' + x + '...      au ...' + y  + '...' ;
    document.getElementById('edit-submitted-texte').innerHTML = text ;
    var res = 'Réservation';
    document.getElementById('edit-submitted-sujet').value = res ;
});

// var screenWidth=jQuery(window).width() /2;
// jQuery('.mariage-entreprise-image.field-content a img').css('width', screenWidth);

//MODULE FB

	
jQuery(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/fr_FR/sdk.js.xfbml=1&version=v2.0";
	fjs.parentNode.insertBefore(js, fjs);
}
	(document, 'script', 'facebook-jssdk'));

// 









