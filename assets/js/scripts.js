include("http://localhost/salma_group_ci/assets/js/jquery.color.js");
include("http://localhost/salma_group_ci/assets/js/jquery.backgroundpos.js");
include("http://localhost/salma_group_ci/assets/js/jquery.easing.js");
include("http://localhost/salma_group_ci/assets/js/googleMap.js");
include("http://localhost/salma_group_ci/assets/js/superfish.js");
include("http://localhost/salma_group_ci/assets/js/switcher.js");
include("http://localhost/salma_group_ci/assets/js/bgStretch.js");
include("http://localhost/salma_group_ci/assets/js/sImg.js");
include("http://localhost/salma_group_ci/assets/js/forms.js");
include("http://localhost/salma_group_ci/assets/js/jquery.cycle.all.min.js");
include('http://localhost/salma_group_ci/assets/js/jquery.fancybox-1.3.4.pack.js');

function include(url) {
    document.write('<script src="' + url + '"></script>');
}
var MSIE = false,
    content, defColor, h = 0, defMh = 0;
 
function addAllListeners() {
	
	
    $('.soc_icons>li>a').hover(
        function(){
        	$(this).children('img').stop().animate({'top':'4px'},300,'easeOutExpo');  
        },
        function(){
            $(this).children('img').stop().animate({'top':'0px'},400,'easeOutCubic');  
        }
    );
	$('.soc_icons2>li>a').hover(
        function(){
        	$(this).children('img').stop().animate({'top':'4px'},300,'easeOutExpo');  
        },
        function(){
            $(this).children('img').stop().animate({'top':'0px'},400,'easeOutCubic');  
        }
    );


	
	$('#prev,.prev').hover(
        function(){
		  $(this).children('span').stop().animate({opacity:0.5}, 600, 'easeOutCubic');
		   
        },
        function(){
		  $(this).children('span').stop().animate({opacity:0.2}, 600, 'easeOutCubic');
        }
    );
    $('#next,.next').hover(
        function(){
		    $(this).children('span').stop().animate({opacity:0.5}, 600, 'easeOutCubic');
        },
        function(){
		    $(this).children('span').stop().animate({opacity:0.2}, 600, 'easeOutCubic');
        }
    );
	
	
	$('.google_map ').hover(
        function(){
		  $(this).stop().animate({opacity:1}, 600, 'easeOutCubic');
		   
        },
        function(){
		  $(this).stop().animate({opacity:0.5}, 600, 'easeOutCubic');
        }
    );
	
}

function showSplash(){
    $('#splashGrid').stop(true).delay(500).animate({'opacity':'0'},400);
    $('.pagin').stop(true).delay(500).fadeIn(400);
    $('#splashInfo').stop().delay(500).fadeIn(400);
	 $('.btnsHolder').stop().delay(500).fadeIn(400);
	 
}

function hideSplash(){
    $('#splashGrid').stop(true).animate({'opacity':'1'},500)  
    $('.pagin').stop(true).fadeOut(300);
    $('#splashInfo').stop(true).fadeOut(300);
	$('.btnsHolder').stop(true).fadeOut(300);
}

function hideSplashQ(){
    $('#splashGrid').css({'opacity':'1'});
    $('.pagin').stop(true).hide();
    $('#splashInfo').stop(true).hide();
	$('.btnsHolder').stop(true).hide();
}

$(document).ready(ON_READY);
$(window).load(ON_LOAD);

function ON_READY() {
    /*SUPERFISH MENU*/   
    $('.menu #menu').superfish({
	   delay: 800,
	   animation: {
	       height: 'show'
	   },
       speed: 'slow',
       autoArrows: false,
       dropShadows: false
    });
}
function ON_LOAD(){
    MSIE = ($.browser.msie) && ($.browser.version <= 8);
    $('.spinner').fadeOut();
	
	
	$('.fancyPic').fancybox({'titlePosition': 'inside', 'overlayColor':'#000'}); 
	$('.fancyPic2').fancybox({'titlePosition': 'inside', 'overlayColor':'#000'}); 
	
	if(!MSIE){ $('.fancyPic').find(".zoomSp").fadeTo(500, 0)}else{ $('.fancyPic').find(".zoomSp").css({"display":"none"})  }
	if(!MSIE){ $('.fancyPic2').find(".zoomSp2").fadeTo(500, 0)}else{ $('.fancyPic2').find(".zoomSp2").css({"display":"none"})  }
	
	$('.fancyPic').hover(function(){
    if(!MSIE){ 
        $(this).find(".zoomSp").stop().fadeTo(500, 0.4)
		
    }else{
        $(this).find(".zoomSp").css({"display":"block"})   
		
    }
    },
     function(){
            if(!MSIE){ 
                $(this).find(".zoomSp").stop().fadeTo(500, 0)
            }else{
                     $(this).find(".zoomSp").css({"display":"none"})    
            }   
        }	
 	) ;
	
	$('.fancyPic2').hover(function(){
    if(!MSIE){ 
        $(this).find(".zoomSp2").stop().fadeTo(500, 0.4)
		
    }else{
        $(this).find(".zoomSp2").css({"display":"block"})   
		
    }
    },
     function(){
            if(!MSIE){ 
                $(this).find(".zoomSp2").stop().fadeTo(500, 0)
            }else{
                     $(this).find(".zoomSp2").css({"display":"none"})    
            }   
        }	
 	) ;
    
    
    if ($("#splashInfo>ul").length) {
        $('#splashInfo>ul').cycle({
            fx: 'fade',
            speed: 1000,
    		timeout: 0,                
    		easing: 'easeOutExpo',
    		cleartypeNoBg: true ,
            rev:0,
            startingSlide: 0,
            wrap: true,
			next: '#next',
    		prev: '#prev',
			before: function(curr, next, opts) {
				opts.animOut.opacity = 0;
			}

  		})
    };
    $('.pagin>ul>li>a').click(function (){
       $('#splashInfo>ul').cycle($(this).parent().index());
    });
    
    //content switch
    content = $('#content');
    content.tabs({
        show:0,
        preFu:function(_){
            _.li.css({'visibility':'hidden'});	
            hideSplashQ();	
        },
        actFu:function(_){            
            if(_.curr){
                if (_.n == 0){
                    showSplash();
                } else {
                    hideSplash();
                }
                                
                h = parseInt( _.curr.outerHeight(true));
                $(window).trigger('resize');
                
                _.curr
                    .css({'top':'-4500px','visibility':'visible'}).stop(true).delay(100).show().animate({'top':'0px'},{duration:1500,easing:'easeInOutExpo'});
            }   
    		if(_.prev){
  		        _.prev
                    .show().stop(true).animate({'top':'2500px'},{duration:1000,easing:'easeInExpo',complete:function(){
                            if (_.prev){
                                _.prev.css({'visibility':'hidden'});
                            }
                        }
		              });
            }            
  		}
    });
    defColor = $('#menu>li>a').eq(0).css('color'); 
    var nav = $('.menu');
    nav.navs({
		useHash:true,
        defHash: '#!/page_home',
        hoverIn:function(li){
            $('>a>span', li).eq(0).stop().animate({'marginTop': '120px'},400,'easeOutExpo');
            $('>a>span', li).eq(1).stop().animate({'top': '0px'},400,'easeOutExpo');
            $('>strong',li).stop().animate({'height':'100%'},300,'easeOutExpo');
        },
        hoverOut:function(li){
            if ((!li.hasClass('with_ul')) || (!li.hasClass('sfHover'))) {
                $('>a>span', li).eq(0).stop().animate({'marginTop': '50px'},500,'easeOutCubic');
                $('>a>span', li).eq(1).stop().animate({'top': '-90px'},500,'easeOutCubic');
                $('>strong',li).stop().animate({'height':'0'},500,'easeOutCubic');
            }
        }
    })
    .navs(function(n,_){
   	    $('#content').tabs(n);
        if (_.prevHash == '#!/page_mail') { 
            $('#form1 a').each(function (ind, el){
                if ($(this).attr('data-type') == 'reset') { $(this).trigger('click') }   
            })
        }
   	});
    
    setTimeout(function(){
        $('#bgStretch').bgStretch({
    	   align:'leftTop',
           autoplay: false,
           navs:$('.pagin').navs({})
        })
        .sImg({
            sleep: 1000,
            spinner:$('<div class="spinner spinner_bg"></div>').css({opacity:100}).stop().hide(3000)
        });
		
	
		
		
		var img=0;
        var num=$('.pagin>ul>li').length-1;
        $('#prev').click(function(){
            img=img-1;
    		if (img<0) img=img+num+1;
    		$.when($('#bgStretch img')).then(function(){
    			$('.pagin>ul>li>a').eq(img).click();
    		})
    		return false
    	});
    	$('#next').click(function(){
    		img=img+1;
    		if (img>num) img=img-num-1;
    		$.when($('#bgStretch img')).then(function(){
    			$('.pagin>ul>li>a').eq(img).click();
    		})
            return false
    	});
    },0);
    
    setTimeout(function(){  $('body').css({'overflow':'visible'}); },300);    
    addAllListeners();
    
    $(window).trigger('resize');
    defMh = parseInt($('body').css('minHeight'));
}

$(window).resize(function (){
    var newMh = h+430;
    if (defMh > newMh) {newMh = defMh;};
    $('body').stop().animate({'minHeight':newMh})
});






  /* Demo purposes only */
  $(".hover").mouseleave(
    function () {
      $(this).removeClass("hover");
    }
  );
  
  


 $(".hover").mouseleave(
    function () {
      $(this).removeClass("hover");
    }
  );
  
  
;(function() {

  $(document).ready(function() {

    var slider2 = function() {
      
      var backImg = [];
      backImg[0] = "images/ra2a.jpg";
      backImg[1] = "images/ra2b.jpg";
      backImg[2] = "images/ra2c.jpg";
	  backImg[3] = "images/ra2d.jpg";
	  backImg[4] = "images/ra2e.jpg";
	  backImg[5] = "images/ra2f.jpg";
	  backImg[6] = "images/ra2g.jpg";
	  backImg[6] = "images/ra2g.jpg";
	  backImg[6] = "images/ra2i.jpg";
      
      var i = 0;
      var x = (backImg.length) - 1;
      var int = 3500;
      
      var initialize = function() {
        attachEvents();
      };
      
      var attachEvents = function() {
        $('.btnLeft').click(function() {
          left();
        });

        $('.btnRight').click(function() {
          right();
        });
      };

      var changeImg = function() {
        $('.slider2').css('background-image', 'url(' + backImg[i] + ')');
      }

      var left = function() {
        (i <= 0) ? i = 3 : i--;
        changeImg(i);
      };

      var right = function() {
        (i >= x) ? i = 0 : i++;
        changeImg(i);
      };

      window.setInterval(right, int);

      changeImg(i);
      return initialize();
    }

    slider2();

  });
  
})();



jQuery.fn.liScroll = function(settings) {
	settings = jQuery.extend({
		travelocity: 0.03
		}, settings);		
		return this.each(function(){
				var $strip = jQuery(this);
				$strip.addClass("newsticker")
				var stripHeight = 1;
				$strip.find("li").each(function(i){
					stripHeight += jQuery(this, i).outerHeight(true); // thanks to Michael Haszprunar and Fabien Volpi
				});
				var $mask = $strip.wrap("<div class='mask'></div>");
				var $tickercontainer = $strip.parent().wrap("<div class='tickercontainer'></div>");								
				var containerHeight = $strip.parent().parent().height();	//a.k.a. 'mask' width 	
				$strip.height(stripHeight);			
				var totalTravel = stripHeight;
				var defTiming = totalTravel/settings.travelocity;	// thanks to Scott Waye		
				function scrollnews(spazio, tempo){
				$strip.animate({top: '-='+ spazio}, tempo, "linear", function(){$strip.css("top", containerHeight); scrollnews(totalTravel, defTiming);});
				}
				scrollnews(totalTravel, defTiming);				
				$strip.hover(function(){
				jQuery(this).stop();
				},
				function(){
				var offset = jQuery(this).offset();
				var residualSpace = offset.top + stripHeight;
				var residualTime = residualSpace/settings.travelocity;
				scrollnews(residualSpace, residualTime);
				});			
		});	
};

$(function(){
    $("ul#ticker01").liScroll();
});