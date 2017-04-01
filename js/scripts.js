/* back to top */ 
$(document).ready(function(){ /* hide #back-top first */ 	$("#back-top").hide(); /* fade in #back-top */ $(function () { $(window).scroll(function () { if ($(this).scrollTop() > 100) { $('#back-top').fadeIn(); } else { $('#back-top').fadeOut(); } }); /* scroll body to 0px on click */ $('#back-top a').click(function () { $('body,html').animate({ scrollTop: 0 }, 800); return false; }); });} );
/* mobile nav */
if ($(window).width() <= 320){ $('header nav').click(function(){ $(this).toggleClass('navChange'); $('#MainNav').slideToggle('slow'); }); }
/* table highlighter 
$("table.indicators").delegate('td','mouseover mouseleave', function(e) { if (e.type == 'mouseover') { $(this).parent().addClass("zebra"); $("colgroup").eq($(this).index()).addClass("zebra"); } else { $(this).parent().removeClass("zebra"); $("colgroup").eq($(this).index()).removeClass("zebra"); } });*/