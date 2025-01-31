$.get('../reef/list.txt', function(data) {
	var element = 1;
	var title = '';
	var lines = data.split("\n");
	$.each(lines, function(n, elem) {
		var current = elem.split(" ")[0];
		if (current == '--') {
			element = element + 1;
		}
		else {
			var content = elem.slice(current.length+1);
			current = current.toLowerCase();
			if(current == 'identity' || current =='print' || current =='webdesign' || current =='releases' || current =='corporate' || current =='events' || current =='coding') {
				cssclass = current;
				current = '#' + element + '-' + current + ' .branchbar';
				var size = ( content * 34 ) - content;
				var css_size = size + '%';
				$(current).css("width", css_size);
				current = '#' + element;
				if(content > 0 ) { $(current).addClass(cssclass); }
			}
			else if(current == 'link') {
				current = '#' + element + ' .' + current;
				content = '<a href="' + content + '" target="_blank" title="'+ content +'">' + content + '</a>';
				$(current).append(content);
			}
			else if(current == 'content') {
				current = '#' + element + '-' + current;
				var bg = '/reef/sr' + content + '.webp';
				$.get(bg)
					.done(function() {
						content = '<img id="' + element + '-img" src="https://simonquasar.net' + bg + '" oncontextmenu="return false;"/>'; 
				$(current).append(content);
					}).fail(function() { 
						content = 'prova';
					});
				$(current).click(function() {
					// $.fancybox.open(bg);
					this.title = title;
				});
			}
			else if(current == 'title' || current =='location' || current =='description'){
				if(current == 'title'){
					tool = '#tooltip-' + element;
					$(tool).append(content);
					tool = '#' + element + ' .intro';
					$(tool).append(content);
				}
				current = '#' + element + ' .' + current;
				$(current).append(content);
			}
		}
	});
});