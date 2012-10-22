/*-----------tile slideshow on home---------*/
storyBoard = {
	puzzel1 : {
		delay : 0,
		target : '.pone',
		keyframe : 'puzzel1',
		due : 1000,
		ease : 'ease-out'
	},
	puzzel2 : {
		delay : 500,
		target : '.ptow',
		keyframe : 'puzzel2',
		due : 1000,
		ease : 'ease-out'
	},
	puzzel3 : {
		delay : 1000,
		target : '.pthree',
		keyframe : 'puzzel3',
		due : 1000,
		ease : 'ease-out'
	},
	puzzel4 : {
		delay : 1500,
		target : '.pfour',
		keyframe : 'puzzel4',
		due : 1000,
		ease : 'ease-out'
	}
};

$(function(){
	$.tween(storyBoard);
});
/*-----------fadeloop slideshow on home---------*/

$(function(){
	$('div.homecontent > div.fade').fadeLoop(1000);
});
/*-----------Bottom Content slideshow on Projects part---------*/
$(function(){
	var bcsp=$('div.pages > section.bigpart'),
		bcsp_pic=$('div.pages > section.bigpart > div.bigpic'),
		bcsp_txt=$('div.pages section.bigpart div.bigtxt'),
		bcsp_total=$('div.pages section.bigpart div.bigpic > div').length,
		bcsp_smallpart=$('div.pages > section.smallpart'),
		bcsp_minpic=$('div.pages > section.smallpart ul.btn'),
		bcsp_spic=$('div.pages section.smallpart > ul.btn > li'),
		bcsp_butn=$('div.pages div.butn'),
		bcsp_prev=$('section.smallpart div.prev'),
		bcsp_next=$('section.smallpart div.next'),
		total=$('div.pages section.smallpart > ul.btn > li').length,
		curentSlide=0,
		curentminpic=0;
		(bcsp_go2slide=function(n){
			if(n>bcsp_total-1)n=0;
			var left_pic=-490*n;
			bcsp_pic.css({'right':left_pic+'px'});
			bcsp_txt.css({'right':left_pic+'px'});
			curentSlide=n;
			//alert(n);
		})(0);// set active of first li

		nextslide=function(){
			//alert(1);
			bcsp_go2slide(curentSlide+1);
		};
		
		var auto=false;
		(autoplay=function(){
			if(auto) return;
			auto=setInterval(nextslide,2500);
		})();
		stopauto=function(){
			clearInterval(auto);
			auto=false;
		};

		bcsp.mouseout(autoplay);
		bcsp.mouseover(stopauto);
		
		//button part
		bcsp_next_minpic=function(m){
			if(m==total-6)m=0
				else 
			if(m==-1)m=total-7
			var right_pic=-80*m;
			bcsp_minpic.css({'right':right_pic+'px'});
			curentminpic=m;		
			
			
		};
		bcsp_next.click(function(){
			bcsp_next_minpic(curentminpic+1);
		});
		bcsp_prev.click(function(){
			bcsp_next_minpic(curentminpic-1);
		});
		bcsp_smallpart.mouseover(function(){
			bcsp_butn.css({opacity:1});
		});	
		bcsp_smallpart.mouseout(function(){
			bcsp_btn.css({opacity:0});
		});	

		bcsp_spic.mouseover(function(){
			bcsp_butn.css({opacity:1});
			
			stopauto();
			bcsp_go2slide($(this).index());
		});
		bcsp_smallpart.mouseout(function(){
			bcsp_butn.css({opacity:0});
			autoplay();
		});
		

});