		"use strict";   
		var lukani_testipause = 3000,
			lukani_testianimate = 2000;
		var lukani_testiscroll = false;
							lukani_testiscroll = true;
					var lukani_catenumber = 6,
			lukani_catescrollnumber = 2,
			lukani_catepause = 3000,
			lukani_cateanimate = 700;
		var lukani_catescroll = false;
					var lukani_menu_number = 10;
		var lukani_sticky_header = false;
							lukani_sticky_header = true;
			
		jQuery(document).ready(function(){
			jQuery("#ws").focus(function(){
				if(jQuery(this).val()=="Search product..."){
					jQuery(this).val("");
				}
			});
			jQuery("#ws").focusout(function(){
				if(jQuery(this).val()==""){
					jQuery(this).val("Search product...");
				}
			});
			jQuery("#wsearchsubmit").on('click',function(){
				if(jQuery("#ws").val()=="Search product..." || jQuery("#ws").val()==""){
					jQuery("#ws").focus();
					return false;
				}
			});
			jQuery("#search_input").focus(function(){
				if(jQuery(this).val()=="Search..."){
					jQuery(this).val("");
				}
			});
			jQuery("#search_input").focusout(function(){
				if(jQuery(this).val()==""){
					jQuery(this).val("Search...");
				}
			});
			jQuery("#blogsearchsubmit").on('click',function(){
				if(jQuery("#search_input").val()=="Search..." || jQuery("#search_input").val()==""){
					jQuery("#search_input").focus();
					return false;
				}
			});
		});
		