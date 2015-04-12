jQuery(document).ready(function(){

    
//  //    jQuery('ul.items').easyPaginate({
//  //        step:3
//  //    });

// 	// if(jQuery('body').hasClass('logged-in')) {
// 	//     jQuery('.container').addClass('backend');
// 	// }
	//cycle2

	jQuery('.diaporama').cycle({
        timeout:4000,
        fx: 'scrollHorz',
        pauseOnHover: false
    });


	var elementPosition = jQuery('.front-large-menu').offset();

	jQuery(window).scroll(function(){
	    if(jQuery(window).scrollTop() > elementPosition.top){
	          jQuery('.front-large-menu').css('position','fixed').css('top','0').css('width','100%').css('z-index','500').css('background-color', 'rgba(51, 51, 51, 0.8)').css('margin-left', '0').css('padding', '0');
	          jQuery('.front-logo').css('width', '110px').css('padding', '15px 20px 15px 40px');
	          jQuery('h1').css('display', 'none');
	          jQuery('.main-menu').css('padding-top', '0');
	          jQuery('.main-menu').css('margin-top', '10px');
	          
	          if(jQuery('body').hasClass('logged-in')) {
	          		jQuery('.front-large-menu').css('margin-top', '');
	      		}

	          jQuery('#block-locale-language').css('display', 'none');
	          jQuery('.front-main-content').css('margin-top','590px');
	    } else {
	        jQuery('.front-large-menu').css('position','static').css('width','').css('background-color', 'rgba(51, 51, 51, 0.6)').css('margin', '').css('padding','');
	        jQuery('.front-logo').css('width', '').css('padding', '').css('margin', '');
	        jQuery('.main-menu').css('padding-top', '');
	        jQuery('.main-menu').css('margin-top', '');
	        if(jQuery('body').hasClass('logged-in')) {
	          	jQuery('.front-large-menu').css('margin-top', '0');
	      		}
	        jQuery('h1').css('display', 'block');
	        jQuery('.block-locale-language').css('display', 'block');
	        jQuery('.front-main-content').css('margin-top','');

	    }
	});  
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

var formHeight=jQuery('#colorbox').height();
jQuery(".show_cb").colorbox({inline:true, width:"50%", height: "100%"});

// });




