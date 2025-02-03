// MATH FUNCTIONS
		
function getRandom(min, max) {
	return Math.random() * (max - min) + min;
}

function angleBetweenPointsInDegrees(x1, y1, x2, y2) {
	var angle = Math.atan2(y2 - y1, x2 - x1) * 180.0 / Math.PI;
	angle = 180 + angle;
	return angle;
}

function distanceBetweenPoints(x1, y1, x2, y2) {
	var a = x1 - x2;
	var b = y1 - y2;
	return Math.sqrt((a * a) + (b * b));
}

// INTRO TEXT
//var text = ['HELLO', 'こんにちは', 'HALLO', 'CIAO', '¡Hola!']

function change() {
	var x = Math.floor(getRandom(0, 4));
	
	// $('#hello').html(text[x]);
	var content = $('#hello').text();
	var width = $('#hello').width();
	var fontSize = width < 700 ? 64 : 96;
	var padAmount = width < 700 ? 50 : 100;

	var Itext = new Blotter.Text(content, {
	  family : "'Vollkorn', Open Sans Condensed,  Helvetica, Verdana, sans-serif",
	  size : fontSize,
	  fill : "#171717",
	  paddingRight: padAmount,
	  paddingLeft : padAmount,
	  paddingTop : 200,
	  paddingBottom : padAmount
    });

	var hellomaterial = new Blotter.ChannelSplitMaterial();
	
	var offset = getRandom(0.01, 0.03); // max 1.0
	var rotation = getRandom(0, 360);
		
	hellomaterial.uniforms.uOffset.value = offset;
	hellomaterial.uniforms.uRotation.value = rotation;
	hellomaterial.uniforms.uApplyBlur.value = 1;
	hellomaterial.uniforms.uAnimateNoise.value = 1;
	
	var blotter = new Blotter(hellomaterial, {
	  texts : Itext
	});

	var elem = document.getElementById("hello");
	var scope = blotter.forText(Itext);
	$('#hello').html("");
	scope.appendTo(elem);
	
	scope.on("mousemove", function (mousePosition) {
		var offset = Math.min(0.02, distanceBetweenPoints(0.3, 0.3, mousePosition.x, mousePosition.y));
		var rotation = angleBetweenPointsInDegrees(0.2, 0.2, mousePosition.x, mousePosition.y);

		hellomaterial.uniforms.uOffset.value = offset;
		hellomaterial.uniforms.uRotation.value = rotation;
	});	
}

// START

jQuery(document).ready(function($) {
		
		change();
		
		$(window).load(function(){

			$('#preloader').slideDown('slow',function(){$(this).remove();});
			$('.branches').fadeIn(800);
			$('#portwrap').fadeIn(800);
			
			// START FILTERS

			$(function(){
			  $('#portwrap').mixItUp({
				load: {
					filter: 'all',
					// sort: 'random'
				},
				controls: {
					toggleFilterButtons: true,
					toggleLogic: 'and'
				},
				callbacks: {
					onMixEnd: function(state){
						console.log(state.activeFilter)
					}
				},
				animation: {
					effectsIn: 'fade translateY(-100px)',
					animateResizeContainer: false
				},
			  });
			});				
		});

	//  SCROLL AND OTHER EFFECTS 
	
	$('#wrap').scroll(function(){                          
		if ($(this).scrollTop() > 900) {
			$('#menuleft').fadeIn(1000);
			$('#br').fadeOut(500);
		} else {
			$('#menuleft').fadeOut(800);
			$('#br').fadeIn(500);
		}
	});
		
	$( "article" ).click(function() {
	  $(this).toggleClass("open");
	});
	
	$(document).click( function(e) {
		var clicked = $(e.target).closest('.open');
		if ( clicked.length == 0 ) {
			$(".open").removeClass('open');
		}
	});
	
	
	// H1 HEADERS TYPO EFFECT
	
	var Headers = document.querySelectorAll('[id$="-header"]');
	
	Headers.forEach(function(element) {
		id = element.getAttribute('id');
		content = element.textContent;
		
		var text = new Blotter.Text(content, {
		  family : "'Vollkorn', Open Sans Condensed,  Helvetica, Verdana, sans-serif",
		  size : 24,
		  weight: 800,
		  fill : "#171717",
		  padding: 0,
		  paddingRight: 80
		});

		var material = new Blotter.ChannelSplitMaterial();
		
		var offset = getRandom(0.05, 0.2); // max 1.0
		var rotation = getRandom(0, 360);
		
		material.uniforms.uOffset.value = offset;  
		material.uniforms.uRotation.value = rotation;
		material.uniforms.uApplyBlur.value = 0;
		material.uniforms.uAnimateNoise.value = 0;
		
		var blotter = new Blotter(material, {
		  texts : text
		});  

		var scope = blotter.forText(text);
		$('#'+id).html("");
		scope.appendTo(element);
			
		scope.on("mousemove", function (mousePosition) {
			var rotation = angleBetweenPointsInDegrees(0.3, 0.3, mousePosition.x, mousePosition.y);
			var offset = Math.min(0.15, distanceBetweenPoints(0.3, 0.3, mousePosition.x, mousePosition.y));

			material.uniforms.uOffset.value = offset;
			material.uniforms.uRotation.value = rotation;
		});
		
	});
});